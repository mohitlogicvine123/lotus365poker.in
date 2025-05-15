<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
    @include('admin.includes.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
      @include('admin.includes.nav')

        <div class="container">
          <div class="page-inner">
            

            @yield('content')
          </div>
        </div>

        @include('admin.includes.footer')
      </div>
    </div>
    <!--   Core JS Files   -->
    @include('admin.includes.script')
  </body>
</html>
