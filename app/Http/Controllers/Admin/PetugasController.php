<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class PetugasController extends Controller
{
    public function addPetugas()
    {
        $petugas = Petugas::where('level', 'petugas')->get();
        return view('petugas.index', compact('petugas'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_petugas' => 'required',
            'telp' => 'required|unique:petugas,telp|unique:masyarakats,telp|numeric',
            'username' => 'required|unique:masyarakats,username|unique:petugas,username',
            'password' => 'required',
        ]);
        $validator['password'] = Hash::make($request->password);
        if (Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'nama' => 'required',
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => 'petugas'
        ])) {
            return redirect()->back()->with('success', 'Petugas Berhasil! ditambahkan');
        }
        return redirect()->back()->with('error', 'Oops! Sepertinya ada yang salah!');
    }
}
