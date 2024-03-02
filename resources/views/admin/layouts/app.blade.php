<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.includes.css')
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.includes.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.includes.side-bar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
          @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.includes.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
@include('admin.includes.js')
@yield('js')
</body>
</html>
