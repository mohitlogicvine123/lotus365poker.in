<div class="main-header">
    <div class="main-header-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="{{asset('asset/assets/img/lotus-logo.png')}}"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
      <div class="container-fluid">
        <div class="d-flex justify-content-between w-100 align-items-center">
          <h4 class="fw-bold">Dashboard</h4> 
          <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn bg-primary">Log out</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>