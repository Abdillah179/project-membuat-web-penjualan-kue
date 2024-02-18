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
            Checkout <strong><?= $this->session->flashdata("berhasill") ?></strong>. Silahkan Lakukan Pembayaran
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
    <?php if ($this->session->flashdata("pembayaran")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            <strong><?= $this->session->flashdata("pembayaran") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("batal")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            <strong><?= $this->session->flashdata("batal") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata("metodepembayarann")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            <strong><?= $this->session->flashdata("metodepembayarann") ?>
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
                    <div class="col-10 sm-7 mt-3">
                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="false">Menunggu Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="true">Sudah Di Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Di Kirim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Selesai</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-settings-tab2" data-toggle="pill" href="#custom-tabs-one-settings2" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Pesanan Dibatalkan</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Order</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Nama Penerima</th>
                                                        <th>Total Bayar</th>
                                                        <th>Detail Order Alamat</th>
                                                        <th>Detail Order Barang</th>
                                                        <th>Status</th>
                                                        <th>Metode Pembayaran</th>
                                                        <th>Bank Pembayaran</th>
                                                        <th>Action</th>
                                                        <th>Batal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($belumbayar as $blmbyr) : ?>
                                                        <tr>
                                                            <td><?= $blmbyr["no_order"]; ?></td>
                                                            <td><?= $blmbyr["tgl_order"]; ?></td>
                                                            <td><?= $blmbyr["nama_penerima"]; ?></td>
                                                            <td>Rp. <?= number_format($blmbyr["total_bayar"], '0', ',', '.'); ?></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesanan/<?= $blmbyr["id_transaksi"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananBarang/<?= $blmbyr["no_order"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <?php
                                                            if ($blmbyr["status_bayar"] == 0) {

                                                                echo '<td>
                                                                <span class="badge text-bg-primary">Belum Bayar</span>
                                                                <span class="badge text-bg-warning">Menunggu Pembayaran</span>
                                                                </td>';
                                                            } else {
                                                                if ($blmbyr["status_bayar"] == 1 && $blmbyr["metode_pembayaran"] == 'cod') {
                                                                    echo '<td>
                                                                    <span class="badge text-bg-warning">Menunggu Untuk Di Proses</span>
                                                                    </td>';
                                                                } else {
                                                                    if ($blmbyr["status_bayar"] == 1 && $blmbyr["metode_pembayaran"] == 'transfer_bank') {
                                                                        echo '<td>
                                                                            <span class="badge text-bg-primary">Sudah Bayar</span>
                                                                            <span class="badge text-bg-warning">Menunggu Untuk Di Proses</span>
                                                                            </td>';
                                                                    }
                                                                }
                                                            }

                                                            ?>

                                                            <?php
                                                            if ($blmbyr["metode_pembayaran"] == 'cod') {
                                                                echo '<td><span class="badge text-bg-primary">COD</span></td>';
                                                            } else {
                                                                if ($blmbyr["metode_pembayaran"] == 'transfer_bank') {

                                                                    echo '<td><span class="badge text-bg-primary">Transfer Bank</span></td>';
                                                                }
                                                            }


                                                            ?>

                                                            <td><span class="badge text-bg-primary"><?= $blmbyr["bank_pembayaran"] ?></span></td>

                                                            <?php
                                                            if ($blmbyr["status_bayar"] == 0) {
                                                                echo '<td><a href="' . base_url() . 'Halaman_Pembeli/MetodePembayaran/' . $blmbyr["id_transaksi"] . '" class="btn btn-success btn-sm">Bayar
                                                                </a></td>
                                                                <td><a href="' . base_url() . 'Halaman_Pembeli/BatalTransaksi/' . $blmbyr["id_transaksi"] . '" class="btn btn-danger btn-sm"onclick="return confirm(\'Apakah Anda yakin ingin membatalkan pesanan?\');">Batalkan Pesanan
                                                             </a></td>';
                                                            } else {
                                                                if ($blmbyr["status_bayar"] == 1) {
                                                                    echo '<td></td>';
                                                                }
                                                            }

                                                            ?>




                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Order</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Nama Penerima</th>
                                                        <th>Total Bayar</th>
                                                        <th>Detail Order Alamat</th>
                                                        <th>Detail Order Barang</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($diproses as $dprs) : ?>
                                                        <tr>
                                                            <td><?= $dprs["no_order"]; ?></td>
                                                            <td><?= $dprs["tgl_order"]; ?></td>
                                                            <td><?= $dprs["nama_penerima"]; ?></td>
                                                            <td>Rp. <?= number_format($dprs["total_bayar"], '0', ',', '.'); ?></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananDiproses/<?= $dprs["id_transaksi"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananBarangDiproses/<?= $dprs["no_order"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td>
                                                                <span class="badge text-bg-primary">Sudah Di Proses</span>
                                                                <span class="badge text-bg-warning">Menunggu Untuk Dikirim</span>
                                                            </td>
                                                        </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>No Order</th>
                                                    <th>Tanggal Order</th>
                                                    <th>Nama Penerima</th>
                                                    <th>Total Bayar</th>
                                                    <th>Detail Order Alamat</th>
                                                    <th>Detail Order Barang</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($dikirim as $dkrm) : ?>
                                                    <tr>
                                                        <td><?= $dkrm["no_order"]; ?></td>
                                                        <td><?= $dkrm["tgl_order"]; ?></td>
                                                        <td><?= $dkrm["nama_penerima"]; ?></td>
                                                        <td>Rp. <?= number_format($dkrm["total_bayar"], '0', ',', '.'); ?></td>
                                                        <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananDikirim/<?= $dkrm["id_transaksi"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                        <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananBarangDikirim/<?= $dkrm["no_order"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                        <td>
                                                            <span class="badge text-bg-primary">Sudah Di Dikirim</span>
                                                            <span class="badge text-bg-warning">Menunggu untuk diterima</span>

                                                        </td>
                                                        <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Terima Barang</button></td>

                                                        <!-- Modal -->

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Barang Sudah Di terima </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="<?= base_url() ?>Halaman_Pembeli/TerimaBarang/<?= $dkrm["id_transaksi"]; ?>" method="post" enctype="multipart/form-data">
                                                                            <div class="mb-3">
                                                                                <label for="exampleInputFile">Bukti Foto</label>
                                                                                <input type="file" name="bukti_diterima" class="form-control" id="exampleInputFile">
                                                                            </div>
                                                                            <h5 class="text-danger"><?= form_error("bukti_diterima"); ?></h5>
                                                                            <div class="modal-footer">
                                                                                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>

                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Order</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Nama Penerima</th>
                                                        <th>Total Bayar</th>
                                                        <th>Detail Order Alamat</th>
                                                        <th>Detail Order Barang</th>
                                                        <th>Status</th>
                                                        <th>Nilai Pesanan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($diterima as $dtrm) : ?>
                                                        <tr>
                                                            <td><?= $dtrm["no_order"]; ?></td>
                                                            <td><?= $dtrm["tgl_order"]; ?></td>
                                                            <td><?= $dtrm["nama_penerima"]; ?></td>
                                                            <td>Rp. <?= number_format($dtrm["total_bayar"], '0', ',', '.'); ?></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananSelesai/<?= $dtrm["id_transaksi"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananBarangSelesai/<?= $dtrm["no_order"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td>
                                                                <span class="badge text-bg-primary">Pesanan Sudah Diterima</span>
                                                                <span class="badge text-bg-warning">Orderan Selesai</span>
                                                            </td>
                                                            <?php
                                                            if ($dtrm["penilaian_barang"] == null) {
                                                                echo '<td>
                                                                    <a href="' . base_url() . 'Halaman_Pembeli/NilaiPesanan/' . $dtrm["id_transaksi"] . '" class="btn btn-primary btn-sm">Nilai</a>
                                                                    </td>';;
                                                            } else {
                                                                echo '<td></td>';
                                                            }

                                                            ?>
                                                        </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-settings2" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab2">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No Order</th>
                                                        <th>Tanggal Order</th>
                                                        <th>Nama Penerima</th>
                                                        <th>Total Bayar</th>
                                                        <th>Detail Order Alamat</th>
                                                        <th>Detail Order Barang</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($dibatalkan as $dbtlkn) : ?>
                                                        <tr>
                                                            <td><?= $dbtlkn["no_order"]; ?></td>
                                                            <td><?= $dbtlkn["tgl_order"]; ?></td>
                                                            <td><?= $dbtlkn["nama_penerima"]; ?></td>
                                                            <td>Rp. <?= number_format($dbtlkn["total_bayar"], '0', ',', '.'); ?></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananSelesai/<?= $dbtlkn["id_transaksi"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td><a href="<?= base_url(); ?>Halaman_Pembeli/DetailOrderPesananBarangSelesai/<?= $dbtlkn["no_order"]; ?>"><button class="btn btn-primary">Detail</button></a></td>
                                                            <td>
                                                                <span class="badge text-bg-primary">Pesanan Dibatalkan</span>
                                                                <span class="badge text-bg-warning">Orderan Dibatalkan</span>
                                                            </td>
                                                        </tr>

                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
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