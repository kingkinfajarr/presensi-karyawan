<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Menu Presensi</title>
  
  @include('user.templates.style')

</head>
<body>

  <!-- Awal Navbar -->
  <nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container container-fluid">
        <a class="navbar-brand" href="{{ route('presensi') }}">
          <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="120px">
        </a>
        <div class="collapse navbar-collapse justify-content-center">
          <div class="navbar-nav pl-auto pr-auto">
            <a class="nav-link" aria-current="page" href="{{ route('presensi') }}">Beranda</a>
            <a class="nav-link active" href="{{ route('presensi') }}">Presensi</a>
          </div>
        </div>
        <div class="button ml-auto">
          <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="img-avatar" alt="User Image">
          <a href="" class="nama-user" style="text-decoration: none; color: #181616;">{{ auth()->user()->name }}</a>
          <a href="{{ route('logout') }}" class="btn btn-logout">Logout</a>
        </div>
      </div>
    </nav>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Content -->
  <section>
    <div class="container-fluid content">
      <div class="container text-center col-md-8">
        <h1 class="text-content-presensi pb-4">Silahkan Pilih Menu</h1>
        <a href="{{ route('presensi-masuk') }}" class="btn btn-presensi">Presensi Masuk</a> &nbsp; &nbsp;&nbsp; 
        <a href="{{ route('presensi-keluar') }}" class="btn btn-presensi">Presensi Keluar</a> <br>
        {{-- <a href="{{ route('rekap-presensi') }}" class="btn btn-presensi mt-4">Lihat Rekap Presensi</a> --}}
      </div>
    </div>
  </section>
  <!-- Akhir Content -->

  <!-- Awal Footer -->
  <footer>
    <div class="container text-center">
      <p>Kelompok 7 || XII RA</p>
    </div>
  </footer>
  <!-- Akhir Footer -->
  
  @include('user.templates.script')
  @include('sweetalert::alert')
</body>
</html>