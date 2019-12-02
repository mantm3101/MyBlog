<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin SodaHotGa's Blog</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/admin/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/css/admin/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/admin/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  @include('admin.layouts.header')

  @include('admin.layouts.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
          SodaHotGa's Blog
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/js/admin/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/admin/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/js/admin/overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/admin/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/js/admin/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/js/admin/jquery.mousewheel.js"></script>
<script src="/js/admin/raphael.min.js"></script>
<script src="/js/admin/jquery.mapael.min.js"></script>
<script src="/js/admin/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->

<!-- PAGE SCRIPTS -->
<script src="/js/admin/dashboard2.js"></script>
</body>
</html>
