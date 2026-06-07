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
    <form action="{{ route('postpembayarankuy') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="data_program_studi_id" value="{{ $programstudi->id }}">//ai
        <div>
            <h2>{{ $datacalonmahasiswa->namalengkap }}</h2>
        </div>
        <div>
           <h2>{{ $programstudi->Datafakultas->namafakultas }}</h2>
        </div>
        <div>
            <h2>{{ $programstudi->namaprogramstudi}}</h2>
        </div>
        <div>
            <h2>Status :<span>Pending (Menunggu verifikasi Universitas)</span></h2>
        </div>
        <div>
            <h2>Datangi Universitas Untuk Melakukan Pembayaran</h2>
        </div>
        <button type="submit">Selesai</button>
    </form>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>