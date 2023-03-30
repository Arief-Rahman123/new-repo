@extends('_partial.top')
@section('title', 'PEMAS | Pengaduan Masyarakat')
@section('title_content', 'Detail Laporan Anda')
<div id="app">
    <div class="container">
        <div class="page-heading mt-3">
        </div>
        <div class="page-content">
            <section class="section">
                <div class="row">
                    <div class="col-6 justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <b>Foto / Berkas Pengaduan :</b>
                                <img src="{{ asset('berkas/pengaduan/' . $data->file) }}" style="width:100%;border:1px solid rgb(223, 223, 223);">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Beri Tanggapan Mengenai ( {{ $data->judul_pengaduan }})</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.create-tanggapan', $data->id_pengaduan) }}" method="post">
                                    <div class="table-responsive">
                                        <div class="col-md-12 col-12">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Nama Pelapor </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->masyarakat->nama }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Judul Pengaduan </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->judul_pengaduan }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Tgl Kejadian </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->tanggal_kejadian }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Sifat </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>: {{ $data->kategori }}</b>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Isi Pengaduan </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <textarea name="isi_pengaduan" class="form-control mb-2 @error('isi_pengaduan') @enderror" cols="30" rows="5" readonly>{{ $data->isi_pengaduan }}</textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Status Laporan</label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <b>:@if ($data->status === '0')
                                                                    <div class="badge bg-danger">Pending</div>
                                                                    @elseif($data->status == 'proses')
                                                                    <div class="badge bg-warning text-white">Proses
                                                                    </div>
                                                                    @else
                                                                    <div class="badge bg-success">Selesai</div>
                                                                    @endif
                                                                </b>
                                                            </div>
                                                            @csrf
                                                            <div class="col-md-4">
                                                                <label>Beri Tanggapan </label>
                                                            </div>
                                                            <div class="col-md-8 mb-2">
                                                                <textarea name="tanggapan" id="tanggapan" class="form-control" placeholder="Tanggapan Anda" rows="8"></textarea>
                                                            </div>
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <a href="{{ route('admin.dashboard') }}" class="btn btn-warning me-1 mb-1">
                                                                    Kembali</a>
                                                                <button class="btn btn-primary mb-1">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>