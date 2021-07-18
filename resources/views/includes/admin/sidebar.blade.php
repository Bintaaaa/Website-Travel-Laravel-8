<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">Nomads</a>
      </div>
      {{-- <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div> --}}
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('dashboard') }}" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('dashboard') }}">General Dashboard</a></li>
              <li><a class="nav-link" href="{{ route('dashboard') }}">Ecommerce Dashboard</a></li>
            </ul>
          </li>
          <li class="menu-header">Travel</li>
          <li class="active"><a class="nav-link" href="{{ route('travel-package.index') }}"><i class="fas fa-hotel"></i> <span>Paket Travel</span></a></li>
          <li class="active"><a class="nav-link" href="{{ route('gallery.index') }}"><i class="far fa-images"></i> <span>Galeri Travel</span></a></li>
          <li class="active"><a class="nav-link" href="{{ route('transaction.index') }}"><i class="fas fa-dollar-sign"></i> <span>Transaksi</span></a></li>
    </aside>
  </div>