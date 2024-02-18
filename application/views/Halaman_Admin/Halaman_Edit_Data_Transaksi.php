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
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
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
                        <div class="col-md-6">
                            <h1 class="m-0">Edit Data Transaksi</h1>
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
                <?php if ($this->session->flashdata("edit")) : ?>
                    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                        Edit Data Barang <strong><?= $this->session->flashdata("edit") ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata("editt")) : ?>
                    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                        Edit Data Barang <strong><?= $this->session->flashdata("editt") ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata("transaksi")) : ?>
                    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                        Edit Data Transaksi <strong><?= $this->session->flashdata("transaksi") ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data Transaksi</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="" method="post">
                                    <div class="card-body">
                                        <input type="hidden" name="id_transaksi" value="<?= $user2["id_transaksi"] ?>">
                                        <div class="form-group">
                                            <label for="no_order">No Order</label>
                                            <input type="text" name="no_order" class="form-control" id="no_order" value="<?= $user2["no_order"]; ?>" readonly>
                                        </div>
                                        <h5 class="text-danger"><?= form_error("no_order"); ?></h5>
                                        <div class="form-group">
                                            <label for="tgl_order">Tanggal Order</label>
                                            <input type="text" name="tgl_order" class="form-control" id="tgl_order" value="<?= $user2["tgl_order"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("tgl_order"); ?></h5>
                                        <div class="form-group">
                                            <label for="nama_alamat">Nama Alamat</label>
                                            <input type="text" name="nama_alamat" class="form-control" id="nama_alamat" value="<?= $user2["nama_alamat"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("nama_alamat"); ?></h5>
                                        <div class="form-group">
                                            <label for="nama_penerima">Nama Penerima</label>
                                            <input type="text" name="nama_penerima" class="form-control" id="nama_penerima" value="<?= $user2["nama_penerima"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("nama_penerima"); ?></h5>
                                        <div class="form-group">
                                            <label for="no_handphone_penerima">No Handphone Penerima</label>
                                            <input type="text" name="no_handphone_penerima" class="form-control" id="no_handphone_penerima" value="<?= $user2["no_handphone_penerima"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("no_handphone_penerima"); ?></h5>
                                        <div class="form-group">
                                            <label for="alamat_lengkap_penerima">Alamat Lengkap Penerima</label>
                                            <input type="text" name="alamat_lengkap_penerima" class="form-control" id="alamat_lengkap_penerima" value="<?= $user2["alamat_lengkap_penerima"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("alamat_lengkap_penerima"); ?></h5>
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?= $user2["kecamatan"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("kecamatan"); ?></h5>
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <input type="text" name="kode_pos" class="form-control" id="kode_pos" value="<?= $user2["kode_pos"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("kode_pos"); ?></h5>
                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <input type="text" name="kota" class="form-control" id="kota" value="<?= $user2["kota"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("kota"); ?></h5>
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?= $user2["provinsi"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("provinsi"); ?></h5>
                                        <div class="form-group">
                                            <label for="berat">Berat Total (gr)</label>
                                            <input type="text" name="berat_total" class="form-control" id="berat" value="<?= $user2["berat_total"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("berat_total"); ?></h5>
                                        <div class="form-group">
                                            <label for="total_bayar">Total Bayar</label>
                                            <input type="text" name="total_bayar" class="form-control" id="total_bayar" value="<?= $user2["total_bayar"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("total_bayar"); ?></h5>
                                        <div class="form-group">
                                            <label for="status_bayar">Status Bayar</label>
                                            <input type="text" name="status_bayar" class="form-control" id="status_bayar" value="<?= $user2["status_bayar"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("status_bayar"); ?></h5>
                                        <div class="form-group">
                                            <label for="atas_nama">Atas Nama</label>
                                            <input type="text" name="atas_nama" class="form-control" id="atas_nama" value="<?= $user2["atas_nama"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("atas_nama"); ?></h5>
                                        <div class="form-group">
                                            <label for="nama_bank">Nama Bank</label>
                                            <input type="text" name="nama_bank" class="form-control" id="nama_bank" value="<?= $user2["nama_bank"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("nama_bank"); ?></h5>
                                        <div class="form-group">
                                            <label for="no_rek">No Rekening</label>
                                            <input type="text" name="no_rek" class="form-control" id="no_rek" value="<?= $user2["no_rek"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("no_rek"); ?></h5>
                                        <div class="form-group">
                                            <label for="status_order">Status Order</label>
                                            <input type="text" name="status_order" class="form-control" id="status_order" value="<?= $user2["status_order"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("status_order"); ?></h5>
                                        <div class="form-group">
                                            <label for="status_order">Penilaian Pesanan</label>
                                            <input type="text" name="penilaian_barang" class="form-control" id="status_order" value="<?= $user2["penilaian_barang"]; ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("penilaian_barang"); ?></h5>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                            <!-- general form elements -->

                            <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->

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