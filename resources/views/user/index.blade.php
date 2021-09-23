<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Index</title>

  @include('user.templates.style')

</head>
<body>

  <!-- Awal Navbar -->
  @include('user.templates.navbar')
  <!-- Akhir Navbar -->

  <!-- Awal Content -->
  <section>
    <div class="container-fluid">
      <div class="container text-center">
        <h1 class="text-content">Presensi Sekarang Jangan <br>
          Sampai Terlambat
        </h1>
        <a href="{{ route('login') }}" class="btn-presensi">Presensi</a>
      </div>
    </div>
  </section>
  <!-- Akhir Content -->

  <!-- Awal Footer -->
  @include('user.templates.footer')
  <!-- Akhir Footer -->
  
  @include('user.templates.script')
</body>
</html>