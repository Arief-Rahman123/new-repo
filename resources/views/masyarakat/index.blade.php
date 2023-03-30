@extends('_partial.content')
@section('title', 'PEMAS | Pengaduan')
@section('title_content', 'Pengaduan!')
@section('content')
    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sampaikan Laporan Anda!</h4>
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('masyarakat/store.pengaduan') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <label>Judul Pengaduan :</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="judul_pengaduan" class="form-control"
                                                placeholder="Judul Pengaduan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>Tanggal Kejadian :</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="date" name="tanggal_kejadian" class="form-control"
                                                placeholder="Judul Pengaduan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>Kategori :</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="umum">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Umum
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kategori" value="umum">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Privasi
                                    </label>
                                </div>
                                <div class="col-md-5">
                                    <label>Isi Laporan :</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <textarea name="isi_pengaduan" class="form-control @error('isi_pengaduan') @enderror" cols="30" rows="10"></textarea>
                                            <div class="form-control-icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label>Foto/Berkas :</label>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <p>File dalam bentuk : jpg, png, jpeg</p>
                                </div>
                                <div class="form-group col-md-12 offset-md-4">
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Laporan Anda</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table class="table table-lg" id="data-table">
                            <thead>
                                <tr>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduan as $item)
                                    <tr>
                                        <td>{{ $item->tanggal_pengaduan }}</td>
                                        <td>{{ $item->judul_pengaduan }}</td>
                                        <td>
                                            @if ($item->status === '0')
                                                <div class="badge bg-danger">Pending</div>
                                            @elseif($item->status == 'proses')
                                                <div class="badge badge-primary">Proses</div>
                                            @else
                                                <div class="badge bg-success">Selesai</div>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('masyarakat/detail', $item->id_pengaduan) }}"
                                                class="btn btn-sm btn-primary mx-2 my-2 col-12">Selengkapnya</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <span>Difilter dari {{ $total }} entri</span>
                            {!! $pengaduan->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#data-table').DataTable();
        });
    </script>
@endsection
