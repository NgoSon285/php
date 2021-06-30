<!DOCTYPE html>
<html>

<head>
  <title>Admin page</title>
  <meta charset="utf-8">

  <!-- <link rel="stylesheet" type="text/css" href="public/admin/css/bootstrap.css"> -->
  <link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="public/admin/plugins/jqvmap/jqvmap.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="public/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">
  <!-- load ckeditor -> ckeditor.com  -->
  <script type="text/javascript" src="public/admin/ckeditor/ckeditor.js"></script>

</head>

<body>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin.php?controller=home" class="brand-link">
      <img src="public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Viet Travel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['c_email'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="admin.php?controller=home" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin.php?controller=category_product" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Danh mục sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="admin.php?controller=product" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="admin.php?controller=order" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý đơn hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="admin.php?controller=user" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý tài khoản
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

        </ul>
        <a href="admin.php?controller=logout" class="btn btn-block bg-gradient-danger w-50 float-right mt-5">Đăng xuất</a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="">

    <?php
    //kiểm tra xem đường dẫn controller có tồn tại ko, nếu có tồn tại thì load file đó ra
    if (file_exists($controller))
      include $controller;
    ?>
  </div>


  <!-- jQuery -->
  <script src="public/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge(' uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="public/admin/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="public/admin/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="public/admin/plugins/moment/moment.min.js"></script>
  <script src="public/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="public/admin/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="public/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="public/admin/plugins/jszip/jszip.min.js"></script>
  <script src="public/admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="public/admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="public/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="public/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="public/admin/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/admin/dist/js/demo.js"></script>
  <!-- AdminLTE App -->
  <script src="public/admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="public/admin/dist/js/demo.js"></script>
</body>

</html>
</body>

</html>