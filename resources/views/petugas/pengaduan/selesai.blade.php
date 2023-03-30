@extends('_partial.content');
@section('title_content', 'Data Pengaduan')
@section('content')
<div class="row">
    <div class="card">
        <h6>Perhatian Jika di Laporan PDF di bagian Status 0 maka itu pending</h6>
        <div class="card-header text-center font-bold">Data Pengaduan Masyarakat Desa Bitung Sari</div>
        <div class="card-body">
            <a href="{{ route('report.export-pdf') }}" class="btn btn-primary btn-sm m-2" target="_blank">Export
                PDF</a>
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
                    @foreach ($selesai as $item)
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
@endsection