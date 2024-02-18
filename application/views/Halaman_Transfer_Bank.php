<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/app.css"> -->
    <style>
        .profile {
            list-style: none;
            padding: 10px;
            margin-top: 20px;
            background-color: #f4f3f3;
            transition: background-color 0.5s ease;
        }

        .profile:hover {
            background-color: #aeaeae;
            opacity: 0.8;
            border-radius: 5px;

        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <div class="container-fluid p-0 m-0">
            <nav class="main-header navbar navbar-expand-lg bg-light navbar-light fixed-top">
                <div class="container mt-2">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url() ?>public/image/logo .jpg" alt="Logo" class="brand-image rounded-circle" style="opacity: .8; height:50px;">
                        <span class="brand-text font-weight-light">Cahaya Bakery</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link " aria-current="page" href="<?= base_url() ?>Halaman_Pembeli/index">Produk</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="<?= base_url(); ?>Halaman_Pembeli/Contact" style="margin-left: 10px; margin-right:9px;">Kontak</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="<?= base_url(); ?>Halaman_Pembeli/GalleryProduk" style="margin-left: 10px; margin-right:9px;">Gallery</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="<?= base_url() ?>Halaman_Pembeli/HalamanKeranjang" style="margin-left: 10px; margin-right:9px;"><i class="fa fa-shopping-cart" aria-hidden="true"><?= $this->cart->total_items(); ?></i></a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline small" style="color: rgb(201, 197, 197);"><?= $user["nama"]; ?></span>
                                    <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" height="20px" class="img-circle">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url() ?>Halaman_Pembeli/Profile">
                                        <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" height="20px" class="img-circle me-2"> Profile
                                    </a>
                                    <a class="dropdown-item" href="<?= base_url() ?>Logout/logout" onclick="return confirm('Apakah Anda Yakin Ingin Logout ?')">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <?php if ($this->session->flashdata("berhasill")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Checkout <strong><?= $this->session->flashdata("berhasill") ?></strong>. Menunggu Di Proses
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata("berhasilllll")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Pembayaran <strong><?= $this->session->flashdata("berhasilllll") ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("berhasil")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Barang <strong><?= $this->session->flashdata("berhasil") ?> Di terima
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("hapus")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Pesanan <strong><?= $this->session->flashdata("hapus") ?> Di Hapus
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("nilai")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            <strong><?= $this->session->flashdata("nilai") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("terimabarang")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            <strong><?= $this->session->flashdata("terimabarang") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper">
        <div class="content p-0 m-0"> -->
    <div class="main-wrapper">
        <div class="account-information">
            <div class="container-fluid p-5" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                        <div class="side-menu">
                            <label class="pl20">Profil Saya</label>
                            <ul class="profil">
                                <li class="profile" style="list-style: none;"><a href="<?= base_url() ?>Halaman_Pembeli/Profile" class="profileee">Akun</a></li>
                                <li class="profile" style="list-style: none;"><a href="<?= base_url(); ?>Halaman_Pembeli/DetailHistoriPesanan" class="profileee">History Pembelian</a></li>
                                <li class="profile" style="list-style: none;"><a href="<?= base_url() ?>Halaman_Pembeli/PesananSaya" class="profileee">Pesanan Saya</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        MANDIRI
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Total Bayar</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <form class="form-horizontal">
                                                            <div class="card-body">
                                                                <p class="text-primary" style="font-size: 40px;">Rp. <?= number_format($transferbank["total_bayar"], '0', ',', '.') ?> </p>
                                                                <p>Silahkan Transfer Ke No Rek Dibawah ini :</p>
                                                                <hr>
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Bank</th>
                                                                                <th>No Rekening</th>
                                                                                <th>Atas Nama</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $mandiri["nama_bank"]; ?></td>
                                                                                <td><?= $mandiri["no_rek"]; ?></td>
                                                                                <td><?= $mandiri["atas_nama"] ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pembayaran</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->

                                                        <div class="card-body">
                                                            <?= form_open('Halaman_Pembeli/Pembayaran_TransferBank_Mandiri/' . $transferbank["id_transaksi"], ['enctype' => 'multipart/form-data']); ?>
                                                            <div class="form-group">
                                                                <label for="atasnama">Atas Nama</label>
                                                                <input type="text" name="atas_nama" class="form-control" id="atasnama" placeholder="Masukkan Atas Nama">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("atas_nama"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="namabank">Nama Bank</label>
                                                                <input type="text" name="nama_bank" class="form-control" id="namabank" placeholder="Masukkan Nama Bank">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("nama_bank"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="norek">No Rek</label>
                                                                <input type="text" name="no_rek" class="form-control" id="norek" placeholder="Masukkan No Rek">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("no_rek"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Bukti Bayar</label>
                                                                <input type="file" name="bukti_bayar" class="form-control" id="exampleInputFile" required>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            <a href="<?= base_url(); ?>Halaman_Pembeli/PesananSaya"><button type="button" class="btn btn-warning">
                                                                    << Kembali</button></a>
                                                        </div>
                                                        <?= form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        BCA
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Total Bayar</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <form class="form-horizontal">
                                                            <div class="card-body">
                                                                <p class="text-primary" style="font-size: 40px;">Rp. <?= number_format($transferbank["total_bayar"], '0', ',', '.') ?> </p>
                                                                <p>Silahkan Transfer Ke No Rek Dibawah ini :</p>
                                                                <hr>
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Bank</th>
                                                                                <th>No Rekening</th>
                                                                                <th>Atas Nama</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $bca["nama_bank"]; ?></td>
                                                                                <td><?= $bca["no_rek"]; ?></td>
                                                                                <td><?= $bca["atas_nama"] ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pembayaran</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->

                                                        <div class="card-body">
                                                            <?= form_open('Halaman_Pembeli/Pembayaran_TransferBank_BCA/' . $transferbank["id_transaksi"], ['enctype' => 'multipart/form-data']); ?>
                                                            <div class="form-group">
                                                                <label for="atasnama">Atas Nama</label>
                                                                <input type="text" name="atas_namaa" class="form-control" id="atasnama" placeholder="Masukkan Atas Nama">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("atas_namaa"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="namabank">Nama Bank</label>
                                                                <input type="text" name="nama_bankk" class="form-control" id="namabank" placeholder="Masukkan Nama Bank">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("nama_bankk"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="norek">No Rek</label>
                                                                <input type="text" name="no_rekk" class="form-control" id="norekk" placeholder="Masukkan No Rek">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("no_rekk"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Bukti Bayar</label>
                                                                <input type="file" name="bukti_bayar" class="form-control" id="exampleInputFile" required>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            <a href="<?= base_url(); ?>Halaman_Pembeli/PesananSaya"><button type="button" class="btn btn-warning">
                                                                    << Kembali</button></a>
                                                        </div>
                                                        <?= form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        BNI
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Total Bayar</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <form class="form-horizontal">
                                                            <div class="card-body">
                                                                <p class="text-primary" style="font-size: 40px;">Rp. <?= number_format($transferbank["total_bayar"], '0', ',', '.') ?> </p>
                                                                <p>Silahkan Transfer Ke No Rek Dibawah ini :</p>
                                                                <hr>
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Bank</th>
                                                                                <th>No Rekening</th>
                                                                                <th>Atas Nama</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td><?= $bni["nama_bank"]; ?></td>
                                                                                <td><?= $bni["no_rek"]; ?></td>
                                                                                <td><?= $bni["atas_nama"] ?></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="accordion-body">
                                                    <div class="card card-primary">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pembayaran</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->

                                                        <div class="card-body">
                                                            <?= form_open('Halaman_Pembeli/Pembayaran_TransferBank_BNI/' . $transferbank["id_transaksi"], ['enctype' => 'multipart/form-data']); ?>
                                                            <div class="form-group">
                                                                <label for="atasnama">Atas Nama</label>
                                                                <input type="text" name="atas_namaaa" class="form-control" id="atasnama" placeholder="Masukkan Atas Nama">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("atas_namaaa"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="namabank">Nama Bank</label>
                                                                <input type="text" name="nama_bankkk" class="form-control" id="namabank" placeholder="Masukkan Nama Bank">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("nama_bankkk"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="norek">No Rek</label>
                                                                <input type="text" name="no_rekkk" class="form-control" id="norek" placeholder="Masukkan No Rek">
                                                            </div>
                                                            <h5 class="text-danger"><?= form_error("no_rekkk"); ?></h5>
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Bukti Bayar</label>
                                                                <input type="file" name="bukti_bayar" class="form-control" id="exampleInputFile" required>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                            <a href="<?= base_url(); ?>Halaman_Pembeli/PesananSaya"><button type="button" class="btn btn-warning">
                                                                    << Kembali</button></a>
                                                        </div>
                                                        <?= form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div> -->
    <!-- </div> -->
    <!-- </section> -->

    <!-- </div>/.container-fluid -->
    <!-- </div> -->


    <!-- /.content -->

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class=" control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer" style="background-color: black;">
        <div class="footer mb-3">
            <div class="footer-top">
                <div class="container mt-3">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-md-6 footer-info mt-3" style="padding-top:10px;padding-bottom:0px">
                            <div class="footer-title">TENTANG KAMI</div>
                            <p class="mt-4">
                                Cahaya Bakery adalah toko roti dan kue yang berdiri sejak 2003 yang menyediakan berbagai macam roti dan kue yang berkualitas dengan harga bersaing.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 mt-3" style="padding-top:10px;padding-bottom:0px;">
                            <div class="footer-title">KONTAK KAMI</div>
                            <ul class="mt-4" style="color: #5d5d5d;">
                                <li>
                                    <a href="https://wa.me/6282122332466" target="_blank">
                                        <i style="font-size: 18px" class="fab fa-whatsapp"></i>
                                        &nbsp;6281386052908
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:itmonamibakery23@gmail.com">
                                        <i style="font-size: 18px" class="far fa-envelope"></i>
                                        &nbsp;cahayabakery@gmail.com
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-6 mt-3" style="padding-top:10px;padding-bottom:0px">
                            <div class="footer-title">METODE PEMBAYARAN</div>
                            <div class="row cour mt-4" style="padding-left:13px;">
                                <div class="col-md-3 col-lg-3 mb10 col-xs-6 col-3" style="padding-left:0px;">
                                    <img src="https://prod-haloretail.s3-ap-southeast-1.amazonaws.com/1/payment-gateway-images/2-6135b59345a0c0.11634704.png" alt="Bank Central Asia" width="62px" loading="lazy">
                                </div>
                                <div class="col-md-3 col-lg-3 mb10 col-xs-6 col-3" style="padding-left:0px;">
                                    <img src="https://prod-haloretail.s3-ap-southeast-1.amazonaws.com/1/payment-gateway-images/3-6135b5b787a4b2.87614966.png" alt="Bank Negara Indonesia" width="62px" loading="lazy">
                                </div>
                                <div class="col-md-3 col-lg-3 mb10 col-xs-6 col-3" style="padding-left:0px;">
                                    <img src="https://prod-haloretail.s3-ap-southeast-1.amazonaws.com/1/payment-gateway-images/4-6135b5a32ed182.13896890.png" alt="Bank Mandiri" width="62px" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container con-1 mt-0">
            <div class="copyright mb-3">
                © 2023 <strong><span>Cahaya Bakery</span></strong>.
            </div>
        </div>
    </footer>
    <!-- </div> -->
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>public/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="<?= base_url() ?>public/AdminLTE/dist/js/adminlte.min.js"></script>

    <script src="<?= base_url() ?>public/AdminLTE/dist/js/demo.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <script src="<?= base_url() ?>public/MyModal.js"></script> -->
</body>

</html>