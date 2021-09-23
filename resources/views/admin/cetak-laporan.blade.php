<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Laporan Presensi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  @include('admin.templates.style')
</head>
<body>
  <!-- Awal Content -->
  <section>
    <div class="container-fluid content">
      <div class="container text-center col-md-8">
        {{-- <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="220px" class="mt-4"> <br> --}}
        <small>Tanggal : {{ date('d-M-Y') }} </small>
        <hr class="mt-4 mb-5">
        <h1>Data Presensi Karyawan</h1>
        <table class="table">
          <thead>
            <tr>
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
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->tgl }}</td>
                <td>{{ $item->jam_masuk }}</td>
                <td>{{ $item->jam_keluar }}</td>
                <td>{{ $item->jam_kerja }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- Akhir Content -->
</body>
</html>