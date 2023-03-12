<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">  <img src="{{ asset('assets/img/logo1.png') }}" alt="logo" width="230"></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
  <a href="{{ route('admin.dashboard') }}">  <img src="{{ asset('assets/img/logo2.png') }}" alt="logo" width="37"></a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      
      <ul class="sidebar-menu">
      <li class="menu-header">Organisasi Perangkat Daerah</li>
      <li><a class="nav-link" href="{{ route('admin.opd.index') }}"><i class="fas fa-city"></i> <span>OPD</span></a></li>

      <ul class="sidebar-menu">
      <li class="menu-header">Aset</li>
      <li><a class="nav-link" href="{{ route('admin.jenis_aset.index') }}"><i class="fa fa-layer-group"></i> <span>Jenis Aset</span></a></li>
      <li><a class="nav-link" href="{{ route('admin.lokasi_aset.index') }}"><i class="fa fa-map-marked-alt"></i> <span>Lokasi Aset</span></a></li>
      <li><a class="nav-link" href="{{ route('admin.aset_tik.index') }}"><i class="fa fa-database"></i> <span>Aset TIK</span></a></li>

      <ul class="sidebar-menu">
      <li class="menu-header">Maintenance</li>
      <li><a class="nav-link" href="{{ route('admin.maintenance.index') }}"><i class="fa fa-cogs"></i> <span>Maintenance</span></a></li>

      <ul class="sidebar-menu">
      <li class="menu-header">Pengguna</li>
      <li><a class="nav-link" href="{{ route('admin.pengguna.index') }}"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
  </ul>
</aside>
