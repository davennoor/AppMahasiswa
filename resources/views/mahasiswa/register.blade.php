<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('postregisterkuy') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="">Nama</label>
            <input type="text" name="nama" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" >
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    @if (Session::has('error'))
    <h4><span style="color: red">{{ Session::get('error') }}</span></h4>
@endif
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>