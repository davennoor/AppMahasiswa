<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Daftar</title>
</head>
<body>
    @if (Session::has('info'))
        <div><span style="color: blue">{{ Session::get('info') }}</span></div>
    @endif

    <form action="{{ route('postdaftarkuy') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div>
            <label>NIK</label>
            <input type="number" name="nik" required>
        </div>
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="namalengkap" required>
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" required>
        </div><div>
            <label>Jenis Kelamin</label>
            <select name="jk">
                <option value="" selected disabled>Pilih</option>
                <option value="laki-laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <select name="agama">
                <option selected disabled>---Pilih---</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="budha">Budha</option>
                <option value="hindu">Hindu</option>
                <option value="konghucu">Konghucu</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>
        <div>
            <label>Tempat Lahir</label>
            <input type="text" name="tempatlahir" required>
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggallahir" required>
        </div>
        <div>
            <label>Nomor HP</label>
            <input type="number" name="nohp" required>
        </div>
        <div>
            <label>Lulusan Tahun</label>
            <input type="number" name="lulusantahun" required>
        </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
</form>
        {{-- Dropdown Fakultas
<select name="data_fakultas_id">
    <option selected disabled>Pilih Fakultas</option>
    @foreach ($fakultas as $item)
        <option value="{{ $item->id }}">{{ $item->namafakultas }}</option>
    @endforeach
</select>

Dropdown Program Studi 
<select name="programstudi">
    <option selected disabled>Pilih Program Studi</option>
    @foreach ($programstudi as $item)
        <option value="{{ $item->id }}">{{ $item->namaprogramstudi }}</option>
    @endforeach
</select>
            
        </div> --}}
      
<a href="{{ route('welcomekuy') }}">Daltech Univversity</a>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>