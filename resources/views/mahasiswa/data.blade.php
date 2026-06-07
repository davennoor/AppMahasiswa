<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kamu</title>
</head>
<body>
    @include('navbar')
    @if (Session::has('info'))
        <div><span style="color: blue">{{ Session::get('info') }}</span></div>
    @endif
    @if (Session::has('sudahdaftar'))
        <div><span style="color: gold">{{ Session::get('sudahdaftar') }}</span></div>
    @endif
    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nomor HP</th>
                <th>Lulusan Tahun</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $datamahasiswa->nik }}</td>
                <td>{{ $datamahasiswa->namalengkap }}</td>
                <td>{{ $datamahasiswa->alamat }}</td>
                <td>{{ $datamahasiswa->jeniskelamin }}</td>
                <td>{{ $datamahasiswa->agama }}</td>
                <td>{{ $datamahasiswa->tempatlahir }}</td>
                <td>{{ $datamahasiswa->tanggallahir }}</td>
                <td>{{ $datamahasiswa->nohp }}</td>
                <td>{{ $datamahasiswa->lulusantahun }}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Nama Fakultas</th>
                <th>Nama Program Studi</th>
                <th>Harga Bayar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $datapembayaran->namalengkap }}</td>
                <td>{{ $datapembayaran->namafakultas }}</td>
                <td>{{ $datapembayaran->namaprogramstudi }}</td>
                <td>Datangi Universitas Untuk Melakukan Pembayaran</td>
                <td>{{ $datapembayaran->status }}</td>
            </tr>
        </tbody>
    </table>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>