@extends('_partial.top')
@section('title', 'PEMAS | Pengaduan Masyarakat')
<div class="container">
    <div class="col-12 d-flex justify-content-center" style="margin-top: 12%;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-3 d-flex justify-content-center"><b>Pengaduan Desa Bitung Sari</b></h5>
                <p class="card-subtitle mb-2 d-flex justify-content-center text-muted">Login untuk membuat laporan!</p>
                <form action="{{ route('admin.authenticate') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-4">
                            <label>Username :</label>
                        </div>
                        <div class="col-8">
                            <input type="text" name="username"
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
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
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
