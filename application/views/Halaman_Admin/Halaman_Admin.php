<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/summernote/summernote-bs4.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link" style="text-decoration: none;">
        <img src="<?= base_url(); ?>public/image/logo .jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CAHAYA BAKERY</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?= base_url(); ?>Halaman_Admin/Profile" class="d-block" style="text-decoration: none;"><?= $user["nama"]; ?></a>
          </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/index" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/StatusToko" class="nav-link">
                <i class="nav-icon fas fa fa-home"></i>
                <p>
                  Status Toko
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/PesananMasuk" class="nav-link">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Pesanan Masuk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataBarang" class="nav-link">
                <i class="nav-icon fa fa-birthday-cake"></i>
                <p>
                  Data Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataKategoriBarang" class="nav-link">
                <i class="nav-icon fa fa-birthday-cake"></i>
                <p>
                  Data Kategori Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataTransaksi" class="nav-link">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                  Data Transaksi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataRinciTransaksi" class="nav-link">
                <i class="nav-icon fa fa-credit-card"></i>
                <p>
                  Data Rincian Transaksi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataUserPembeli" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data User Pembeli
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataUserAdmin" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Data User Admin
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataRekeningToko" class="nav-link">
                <i class="nav-icon fas fa-credit-card"></i>
                <p>
                  Data Rekening Toko
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Halaman_Admin/DataPesan" class="nav-link">
                <i class="nav-icon fa fa-comments"></i>
                <p>
                  Data Pesan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>Logout/logout" onclick="return confirm('Yakin Ingin Log out ?')" class="nav-link">
                <i class="nav-icon fa fa-sign-out-alt" aria-hidden="true"></i>
                <p>
                  Log out
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $jumlahdatabarang; ?></h3>

                  <p>Jumlah Data Barang</p>
                </div>
                <div class="icon">
                  <i class="fa fa-birthday-cake"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataBarang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $jumlahdatakategoribarang; ?><sup style="font-size: 20px"></sup></h3>

                  <p>Jumlah Data Kategori Barang</p>
                </div>
                <div class="icon">
                  <i class="fa fa-birthday-cake"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataKategoriBarang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $jumlahdatatransaksi; ?></h3>

                  <p>Jumlah Data Transaksi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataTransaksi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?= $jumlahdatarinciantransaksi; ?></h3>

                  <p>Jumlah Data Rincian Transaksi</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataRinciTransaksi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?= $jumlahdatauserpembeli; ?></h3>

                  <p>Jumlah Data User Pembeli</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataUserPembeli" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $jumlahdatauseradmin; ?></h3>

                  <p>Jumlah Data User Admin</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?= base_url(); ?>Halaman_Admin/DataUserAdmin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $datarekeningtoko; ?></h3>

                  <p>Data Rekening Toko</p>
                </div>
                <div class="icon">
                  <i class="fa fa-credit-card"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?= $jumlahdatapesanmasuk; ?></h3>

                  <p>Jumlah Data Pesan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-comment"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">

          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="" style="text-decoration: none;">Cahaya Bakery</a>.</strong>
      <!-- All rights reserved. -->
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>public/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>public/AdminLTE/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>public/AdminLTE/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url(); ?>public/AdminLTE/dist/js/pages/dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>