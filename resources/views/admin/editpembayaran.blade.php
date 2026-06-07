<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pembayaran</title>
</head>
<body>
    <form action="{{ route('posteditpembayarankuy',$pembayaran->id) }}" method="POST">
        @csrf
         @include('navbar')
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
                <td>{{ $pembayaran->namalengkap }}</td>
                <td>{{ $pembayaran->namafakultas }}</td>
                <td>{{ $pembayaran->namaprogramstudi }}</td>
                <td>Dilakukan Secara Langsung di Universitas</td>
                <td>
                    <select name="status">
                        <option selected disabled>--- Pilih Status ---</option>
                        <option value="lunas">Lunas</option>
                        <option value="pending">Pending</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
     <button type="submit" class="btn btn-primary">Simpan Edit</button>
    </form>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>