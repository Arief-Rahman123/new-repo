@extends('_partial.content')
@section('title', 'Pengaduan Masyarakat')
@section('title_content', 'Laporan Desa Bitung Sari')
@section('content')
<section class="row">
    <div class="col-12 col-lg-12">
        <div class="row">
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Jumlah Laporan</h6>
                                <h6 class="font-semibold text-center mb-0">{{ number_format($pengaduan) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Laporan Pending</h6>
                                <h6 class="font-semibold text-center mb-0">{{ number_format($pending) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted text-center font-bold">Laporan Selesai</h6>
                                <h6 class="font-semibold text-center mb-0">{{ number_format($selesai) }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header text-center font-bold">Data Pengaduan Masyarakat Desa Bitung sari</div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Pelapor</th>
                                <th>Judul Laporan</th>
                                <th>Berkas</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $item)
                            <tr>
                                <td>{{ $item->masyarakat->nama }}</td>
                                <td>{{ $item->judul_pengaduan }}</td>
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
                                    <a href="{{ route('admin.detail', $item->id_pengaduan) }}" class="btn btn-sm btn-primary col-12">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection