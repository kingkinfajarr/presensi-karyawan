@extends('admin.admin')

@section('title')
    Halo
@endsection

@section('content')
<section>
  <div class="container-fluid content">
    <div class="container text-center col-md-8">
      <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="220px" class="mt-4">
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
      <a href="{{ route('cetak-laporan') }}" target="_blank" class="btn btn-presensi">Cetak Laporan</a>
    </div>
  </div>
</section>
<!-- Akhir Content -->
@endsection