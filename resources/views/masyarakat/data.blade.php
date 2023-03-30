@extends('_partial.content');
@section('title_content', 'Data Masyarakat')
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header text-center font-bold">Data Masyarakat Desa Bitung Sari</div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama </th>
                        <th>Username</th>
                        <th>Telp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->telp }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
