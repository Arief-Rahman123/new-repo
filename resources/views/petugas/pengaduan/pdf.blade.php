<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td rowspan="2">
                    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tutoriduan.com%2F2020%2F05%2Ffree-vector-logo-27-kabupaten-kota-jawa.html&psig=AOvVaw3OtbLxtyT5d8u_CWKDpUtl&ust=1680223745500000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCIDog663gv4CFQAAAAAdAAAAABAD" style="width: 80px" alt="">
                </td>
                <td colspan="2">
                    <h2>&nbsp;&nbsp;PEBITSI</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6>&nbsp;&nbsp;Kode Desa (PUM), 3201262010. Desa/Kelurahan, Bitung Sari. Kecamatan, Ciawi.
                        Kabupaten/Kota, KABUPATEN BOGOR. Provinsi, JAWA BARAT.</h6>

                    <h6>Perhatian Jika di Laporan PDF di bagian Status 0 maka itu pending</h6>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>Tgl Kejadian</th>
                    <th>Isi Laporan</th>
                    <th>Tanggal Pengaduan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $k => $v)
                <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->masyarakat->nama}}</td>
                    <td>{{ $v->nik}}</td>
                    <td>{{ $v->tanggal_kejadian}}</td>
                    <td>{{ $v->isi_pengaduan}}</td>
                    <td>{{ $v->tanggal_pengaduan}}</td>
                    <td>{{ $v->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>