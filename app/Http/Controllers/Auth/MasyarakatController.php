<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    // Login Masyarakat
    public function auth(){
        return view('_auth.masyarakat.auth');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
            if (Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
                return redirect('masyarakat/dashboard')->with('success', 'Selamat Datang! ' . Auth::guard('masyarakat')->user()->nama );
            }else{
                return redirect()->back()->with('error', 'Password atau Username salah!');
            }
    }
    // Register Masyarakat
    public function register(){
        return view('_auth.masyarakat.register');
    }

    public function storeMasyarakat(Request $request){

        // dd($request);
        $validator = $request->validate([
            'nik' => 'required|unique:masyarakats,nik|numeric',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'alamat' => 'required',
            'telp' => 'required|unique:petugas,telp|unique:masyarakats,telp|numeric',
            'username' => 'required|unique:masyarakats,username|unique:petugas,username',
            'password' => 'required',
        ]);
        $validator['password'] = Hash::make($request->password);
        if (Masyarakat::create($validator)) {
            return redirect('/login')->with('success', 'Berhasil Daftar Silahkan Masuk!');
        }
        return redirect()->back()->with('error', 'Oops! Sepertinya ada yang salah!');
    }

    public function logoutMasyarakat(){
       Auth::guard('masyarakat')->logout();
        return redirect('/login')->with('success', 'Logout Berhasi!');
    }

}
