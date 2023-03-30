<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function login(){
        return view('_auth.petugas.auth');
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
            if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
                return redirect('webmin/dashboard')->with('success', 'Login Berhasil!');
            }else {
                return redirect()->back()->with('error', 'Username atau Password salah');
            }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('webmin/login')->with('success', 'Berhasil Logout!');
    }
}
