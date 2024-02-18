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

    <!-- jsGrid -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/jsgrid/jsgrid-theme.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/AdminLTE/plugins/daterangepicker/daterangepicker.css">

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
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline" action="" method="post">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="text" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <input class="btn btn-navbar" type="submit" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                    </input>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
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
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                                    Data Rekening
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
                <?php if ($this->session->flashdata("adminnnn")) : ?>
                    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                        Tambah Data Barang <strong><?= $this->session->flashdata("adminnnn") ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Barang</h1>
                            <button class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModalBarang"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Barang</button>

                            <!-- Modal Data Barang -->

                            <div class="modal fade" id="exampleModalBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Barang </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!-- <?php $image = $upload_data['upload']['file_name']; ?> -->
                                        <div class="modal-body">
                                            <form action="<?= base_url() ?>Halaman_Admin/TambahDataBarang" method="post" enctype="multipart/form-data">
                                                <h5 class="text-danger"><?= form_error("nama_barang"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nama_barang" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("keterangan_barang"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Keterangan Barang</label>
                                                    <input type="text" class="form-control" name="keterangan_barang" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("kategori_barang"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">kategori Barang</label>
                                                    <input type="text" class="form-control" name="kategori_barang" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("id_kategori"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">ID KATEGORI</label>
                                                    <input type="text" class="form-control" name="id_kategori" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("harga_barang"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Harga Barang</label>
                                                    <input type="text" class="form-control" name="harga_barang" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("berat"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Berat Barang (gr)</label>
                                                    <input type="text" class="form-control" name="berat" id="exampleFormControlInput1">
                                                </div>
                                                <h5 class="text-danger"><?= form_error("stok"); ?></h5>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Stok Barang</label>
                                                    <input type="text" class="form-control" name="stok" id="exampleFormControlInput1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputFile">Foto Barang</label>
                                                    <input type="file" name="gambar" class="form-control" id="exampleInputFile">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Barang</h3>

                                    <div class="card-tools">
                                        <form action="<?= base_url(); ?>Halaman_Admin/DataBarang" method="post">
                                            <div class="input-group" style="width: 159px;">
                                                <input type="text" name="cari" class="form-control" placeholder="Search">

                                                <div class="input-group-append">
                                                    <input name="submit" type="submit" class="form-control btn btn-primary"></input>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 500px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Keterangan Barang</th>
                                                <th>Kategori Barang</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1 ?>
                                        <tbody>
                                            <?php foreach ($databarang as $dtbrg) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $dtbrg["nama_barang"] ?></td>
                                                    <td><?= $dtbrg["keterangan_barang"] ?></td>
                                                    <td><?= $dtbrg["kategori_barang"] ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>Halaman_Admin/HapusDataBarang/<?= $dtbrg["id_barang"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                                        <a href="<?= base_url(); ?>Halaman_Admin/DetailDataBarang/<?= $dtbrg["id_barang"]; ?>"><button type="button" class="btn btn-primary">Detail</button></a>
                                                        <a href="<?= base_url(); ?>Halaman_Admin/EditDataBarang/<?= $dtbrg["id_barang"]; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="" style="text-decoration: none;">Cahaya Bakery</a>.</strong>

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

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/chart.js/Chart.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/sparklines/sparkline.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>public/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>public/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/dist/js/adminlte.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/dist/js/demo.js"></script>

    <script src="<?= base_url(); ?>public/AdminLTE/dist/js/pages/dashboard.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>