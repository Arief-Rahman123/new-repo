<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use PDF;

class PengaduanController extends Controller
{
    public function pengaduan()
    {
        $pengaduan = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->latest()->paginate(5);
        $total = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->count();
        return view('masyarakat.index', compact('pengaduan', 'total'));
    }

    public function storePengaduan(Request $request)
    {
        $request->validate([
            'judul_pengaduan' => 'required',
            'isi_pengaduan' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg',
            'tanggal_kejadian' => 'required',
            'kategori' => 'required'
        ]);
        $file = $request->file('file');
        $berkas = $file->move(public_path('berkas/pengaduan/'), time() . '-' . $file->getClientOriginalName());
        $data['file'] = $berkas;
        if (Pengaduan::create([
            'judul_pengaduan' => $request->judul_pengaduan,
            'isi_pengaduan' => $request->isi_pengaduan,
            'file' => time() . '-' . $file->getClientOriginalName(),
            'tanggal_pengaduan' => now(),
            'tanggal_kejadian' => now(),
            'kategori' => $request->kategori,
            'nik' => auth()->guard('masyarakat')->user()->nik,
            'status' => '0',
        ])) {
            return redirect('masyarakat/pengaduan')->with('success', 'Pengaduan berhasil dikirim!');
        } else {
            return redirect('/pengaduan')->with('error', 'Opps Ada Yang Salah!');
        }
    }

    public function detail($id)
    {
        $pengaduan = Pengaduan::with('masyarakat')->where('id_pengaduan', $id)->first();
        if ($pengaduan->status == 'selesai') {
            $tanggapan = Tanggapan::with('petugas')->where('id_pengaduan', $pengaduan->id_pengaduan)->first();
            return view('masyarakat.detail', compact('pengaduan', 'tanggapan'));
        } else {
            return view('masyarakat.undone-detail', compact('pengaduan'));
        }
    }
    public function exportPDF()
    {

        $pengaduan = Pengaduan::all();
        // dd($pengaduan);
        $pdf = PDF::loadview('petugas.pengaduan.pdf', [
            'pengaduan' => $pengaduan
        ])->setPaper('a4', 'landscape');
        // dd($pdf);
        return $pdf->stream('Laporan-Pengaduan-Masyarakat.pdf');
    }
}
