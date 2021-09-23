<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Menu Presensi</title>
  
  @include('user.templates.style')
  <script src="{{asset('jam/jam.js')}}"></script>

</head>
<body onload="realtimeClock()">

  <!-- Awal Navbar -->
  <nav>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="120px">
        </a>
        <div class="collapse navbar-collapse justify-content-center">
          <div class="navbar-nav pl-auto pr-auto">
            <a class="nav-link" aria-current="page" href="index.html">Beranda</a>
            <a class="nav-link active" href="presensi.html">Presensi</a>
          </div>
        </div>
        <div class="button ml-auto">
          <a href="" style="text-decoration: none; color: #181616;">{{ auth()->user()->name }}</a>
          <!-- <a href="" class="btn-daftar">Daftar</a>
          <a href="" class="btn-masuk">Masuk</a> -->
        </div>
      </div>
    </nav>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Awal Content -->
  <section>
    <div class="container-fluid content">
      <div class="container text-center col-md-6">
        <form action="{{ route('post-presensi-masuk') }}" method="post">
          @csrf
          <div class="card">
            <div class="card-header">
              Presensi Masuk
            </div>
            <div class="card-body">
              <label id="clock" style="font-size: 100px;">
                
              </label>
            </div>
          </div>
          <button class="btn btn-presensi" type="submit">Presensi Masuk</button>
        </form>
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
</body>
</html>