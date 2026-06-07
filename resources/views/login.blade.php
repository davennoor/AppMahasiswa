<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
</head>
<body>
   
    <form action="{{ route('postloginkuy') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button  class="btn btn-primary">Login</button>
    </form>
<h3>Belum Punya akun?<a style="color: blue" href="{{ route('registerkuy') }}">Register</a></h3>

@if (Session::has('error'))
    <div><span style="color: red">{{ Session::get('error') }}</span></div>
@endif
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>