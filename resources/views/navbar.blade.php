<nav class="nav bg-dark">
    @guest
        <a class="nav-link text-white" href="{{route('loginkuy') }}">Login</a>
    @endguest

    @if (auth()->user()->role == 'admin')
       <a class="nav-link text-white" href="{{route('dashboardkuy') }}">Data Mahasiswa</a>
       <a class="nav-link text-white" href="{{ route('adminpembayarankuy') }}">Pembayaran</a>
       <a class="nav-link text-white" href="{{route('adminlaporankuy') }}">Laporan</a>
    @else
        <a class="nav-link text-white" href="{{route('datakuy') }}">Lihat Data</a>
    @endif
    <a class="nav-link text-white" href="{{route('logoutkuy') }}">Logout</a>
</nav>