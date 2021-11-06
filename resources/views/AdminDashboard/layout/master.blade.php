<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('AdminDashboard.layout.style') 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
  @include('AdminDashboard.layout.app')
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content') 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- ./wrapper -->

  @include('AdminDashboard.layout.script') 

</body>
</html>
<!-- add payment -->


