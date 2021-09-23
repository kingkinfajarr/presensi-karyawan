<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="120px">
    </a>
    <div class="collapse navbar-collapse justify-content-center">
      <div class="navbar-nav pl-auto pr-auto">
        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
        <a class="nav-link" href="{{ route('presensi') }}">Presensi</a>
      </div>
    </div>
    <div class="button ml-auto">
      {{-- @if (auth()->user()->name == "")     --}}
        <a href="{{ route('registrasi') }}" class="btn-daftar">Daftar</a>
        <a href="{{ route('login') }}" class="btn-masuk">Masuk</a>
      {{-- @else
        <a href="" style="text-decoration: none; color: #181616;">{{ auth()->user()->name }}</a>
        <i class="fa fa-sign-out" aria-hidden="true"></i>
      @endif --}}
    </div>
  </div>
</nav>