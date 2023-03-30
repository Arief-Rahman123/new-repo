@extends('_partial.top')
@section('title', 'PEMAS | Pengaduan Masyarakat')
<div class="container">
    <div class="col-12 d-flex justify-content-center mt-5">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-3 d-flex justify-content-center"><b>Pengaduan Desa Bitung Sari</b></h5>
                <p class="card-subtitle mb-2 d-flex justify-content-center text-muted">Login untuk membuat laporan!</p>
                <form action="{{ route('store.register') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>NIK :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="nik" minlength="16" maxlength="16"
                                class="form-control @error('nik') is-invalid @enderror"
                                value="{{ old('nik') }}">
                            @error('nik')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Jenis Kelamin :</label>
                        </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin"  id="inlineRadio1" value="laki-laki">
                        <label class="form-check-label" for="inlineRadio1">laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio2" value="perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                      </div>
                    </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div> 
                </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Nama :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="nama"
                                class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>No Telp :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="telp" minlength="10" maxlength="13"
                                class="form-control @error('telp') is-invalid @enderror"
                                value="{{ old('telp') }}">
                            @error('telp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Username :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="username" minlength="8"
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Password :</label>
                        </div>
                        <div class="col-8">
                            <input type="password" name="password" minlength="8"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mt-2">
                            <p>Sudah Memiliki akun?<a href="{{ route('register') }}">Login disini!</a></p>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary" style="width: 120px">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('_partial.script')
