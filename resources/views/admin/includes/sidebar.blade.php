  <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{asset('asset/index.html')}}" class="logo">
              <img
                src="{{asset('assets/img/lotus-logo.png')}}"
                alt="navbar brand"
                class="navbar-brand"
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
            <!-- <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button> -->
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a href="{{ ('admin') }}"  class="collapsed">
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blog.create') }}" class="collapsed">
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blog.index') }}" class="collapsed">
                  <p>Blog List</p>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
