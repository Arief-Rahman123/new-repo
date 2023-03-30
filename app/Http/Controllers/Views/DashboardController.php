<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardMasyarakat()
    {
        $pengaduanku = Pengaduan::where('nik', Auth::guard('masyarakat')->user()->nik)->count();
        $umum = Pengaduan::where('kategori', 'umum')->get();
        $aduan = Pengaduan::all()->count();
        return view('_dashboard.masyarakat.dashboard', compact('aduan', 'pengaduanku', 'umum'));
    }

    public function dashboardPetugas()
    {
        $pengaduans = Pengaduan::all();
        $pending = Pengaduan::where('status', '0')->count();
        $selesai = Pengaduan::where('status', 'selesai')->count();
        $pengaduan = Pengaduan::count();
        return view('_dashboard.petugas.dashboard', compact('pengaduans', 'pengaduan', 'pending', 'selesai'));
    }

    public function pending()
    {
        $pending = Pengaduan::where('status', '0')->get();
        return view('petugas.pengaduan.pending', compact('pending'));
    }

    public function selesai()
    {
        $selesai = Pengaduan::where('status', 'selesai')->get();
        return view('petugas.pengaduan.selesai', compact('selesai'));
    }

    public function masyarakat()
    {
        $data = Masyarakat::all();
        return view('masyarakat.data', compact('data'));
    }

    public function landing()
    {
        $pending = Pengaduan::where('status', '!=', 'selesai')->count();
        $selesai = Pengaduan::where('status', 'selesai')->count();
        $pengaduan = Pengaduan::count();
        return view('landing.dashboard', compact('pending', 'selesai', 'pengaduan'));
    }
}
