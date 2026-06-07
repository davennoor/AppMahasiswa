<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran</title>
</head>
<body>
    @include('navbar')
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Nama Fakultas</th>
                <th>Nama Program Studi</th>
                <th>Harga Bayar</th>
                <th>Status</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pembayaran)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pembayaran->namalengkap }}</td>
                <td>{{ $pembayaran->namafakultas }}</td>
                <td>{{ $pembayaran->namaprogramstudi }}</td>
                <td>{{ $pembayaran->hargabayar }}</td>
                <td>{{ $pembayaran->status }}</td>
                <td><a href="{{ route('editpembayarankuy',$pembayaran->id) }}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>