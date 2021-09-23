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
      <div class="container text-center col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Karyawan</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Jam Masuk</th>
              <th scope="col">Jam Keluar</th>
              <th scope="col">Jumlah Jam Kerja</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($presensi as $item)    
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->jam_masuk }}</td>
                <td>{{ $item->jam_keluar }}</td>
                <td>{{ $item->jam_kerja }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('logout') }}">Logout</a>
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