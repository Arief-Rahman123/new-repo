<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function index($id)
    {

        $data = Pengaduan::with('masyarakat')->where('id_pengaduan', $id)->first();
        if ($data->status == 'selesai') {
            $tanggapan = Tanggapan::with('petugas')->where('id_pengaduan', $data->id_pengaduan)->first();
            return view('petugas.tanggapan.detail-done', compact('data', 'tanggapan'));
        } else {
            return view('petugas.tanggapan.detail', compact('data'));
        }
    }

    public function createTanggapan(Request $request, $id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();
        if ($pengaduan) {
            $request->validate([
                'tanggapan' => 'required'
            ]);
            $pengaduan->update([
                'status' => 'selesai'
            ]);
            Tanggapan::insert([
                'id_pengaduan' => $pengaduan->id_pengaduan,
                'id_petugas' => Auth::guard('admin')->user()->id_petugas,
                'tanggal_tanggapan' => now(),
                'tanggapan' => $request->tanggapan,
            ]);
        }
        return redirect('webmin/dashboard')->with('success', 'Tanggapan berhasil ditambahkan');
    }
}
