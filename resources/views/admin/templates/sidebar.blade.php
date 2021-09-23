<aside class="main-sidebar sidebar-light elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo-Presensi" width="120px">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        {{-- <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> --}}
        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('rekap-presensi-admin') }}" class="nav-link">
            <i class="fas fa-print"></i>
            <p>
              Cetak Laporan Presensi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('rekap-presensi-admin') }}" class="nav-link">
            <i class="fas fa-print"></i>
            <p>
              Cetak Daftar Gaji 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>