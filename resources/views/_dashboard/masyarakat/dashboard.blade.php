@extends('_partial.content')
@section('title', 'Pengaduan Masyarakat')
@section('title_content', 'Dashboard')
@section('content')
<section class="row">
    <div class="col-12 col-lg-12">
        <!-- <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card" style="height: 90%">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="mb-2" style="width:100%; height: auto;">
                                    <img src="{{ asset('assets/images/vector/bullhorn.png') }}" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Buat Laporan</h6>
                                <h6 class="font-semibold text-center mb-0">Laporkan keluhan atau aspirasi anda dengan
                                    jelas dan lengkap</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card" style="height: 90%">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="mb-2" style="width:100%; height: auto;">
                                    <img src="{{ asset('assets/images/vector/admin.png') }}" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Proses Verifikasi</h6>
                                <h6 class="font-semibold text-center mb-0">Laporan Anda akan diverifikasi & diteruskan
                                    kepada petugas</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                <div class=" mb-2" style="width:100%; height: auto;">
                                    <img src="{{ asset('assets/images/vector/ngob.png') }}" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Tindak Lanjut</h6>
                                <h6 class="font-semibold text-center mb-0">Pihak desa akan menindaklanjuti dan membalas
                                    laporan Anda</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="mb-2" style="width:100%; height: auto;">
                                    <img src="{{ asset('assets/images/vector/selesai.png') }}" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center xfont-bold">Selesai</h6>
                                <h6 class="font-semibold text-center mb-0">Laporan Anda akan terus ditindaklanjuti
                                    hingga terselesaikan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Aduanku</h6>
                                <h6 class="font-semibold text-center mb-0">{{ number_format($pengaduanku) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Seluruh Aduan Masyarakat Desa Bitung Sari</h6>
                                <h6 class="font-semibold text-center mb-0">{{ number_format($aduan) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header text-center font-bold">Data Pengaduan Masyarakat Desa Bitng Sari</div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Pelapor</th>
                            <th>Judul Laporan</th>
                            <th>Tgl Pengaduan</th>
                            <th>Berkas</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($umum as $item)
                        <tr>
                            <td>{{ $item->masyarakat->nama }}</td>
                            <td>{{ $item->judul_pengaduan }}</td>
                            <td>{{ $item->tanggal_pengaduan }}</td>
                            <td><img src="{{ asset('berkas/pengaduan/' . $item->file) }}" style="width: 100px;height: 100px;"></td>
                            <td>
                                @if ($item->status === '0')
                                <div class="badge bg-danger">Pending</div>
                                @elseif($item->status == 'proses')
                                <div class="badge badge-primary">Proses</div>
                                @else
                                <div class="badge bg-success">Selesai</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('masyarakat/detail', $item->id_pengaduan) }}" class="btn btn-sm btn-primary col-12">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="card">
            <div class="card-header text-center font-bold">Data Pengaduan Masyarakat Desa Bitng Sari</div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Pelapor</th>
                            <th>Judul Laporan</th>
                            <th>Tgl Pengaduan</th>
                            <th>Berkas</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($umum as $item)
                        <tr>
                            <td>{{ $item->masyarakat->nama }}</td>
                            <td>{{ $item->judul_pengaduan }}</td>
                            <td>{{ $item->tanggal_pengaduan }}</td>
                            <td><img src="{{ asset('berkas/pengaduan/' . $item->file) }}" style="width: 100px;height: 100px;"></td>
                            <td>
                                @if ($item->status === '0')
                                <div class="badge bg-danger">Pending</div>
                                @elseif($item->status == 'proses')
                                <div class="badge badge-primary">Proses</div>
                                @else
                                <div class="badge bg-success">Selesai</div>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('masyarakat/detail', $item->id_pengaduan) }}" class="btn btn-sm btn-primary col-12">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    </div>
</section>
@endsection