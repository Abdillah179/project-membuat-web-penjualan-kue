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
                                <a class="nav-link" href="" style="margin-left: 10px; margin-right:9px;">Kontak</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="" style="margin-left: 10px; margin-right:9px;">Gallery</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="<?= base_url() ?>Halaman_Pembeli/HalamanKeranjang" style="margin-left: 10px; margin-right:9px;"><i class="fa fa-shopping-cart" aria-hidden="true"><?= $this->cart->total_items(); ?></i></a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline small" style="color: rgb(201, 197, 197);"><?= $user["nama"]; ?></span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url() ?>Halaman_Pembeli/Profile">
                                        <i class="fas fa-sign-out-alt fa fa-user mr-2 text-gray-400"></i>
                                        Profile
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

    <?php if ($this->session->flashdata("profile")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Update Profile <strong><?= $this->session->flashdata("profile") ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata("profilee")) : ?>
        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
            Update Profile <strong><?= $this->session->flashdata("profilee") ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid p-0 m-0">
        <div class="container" style="margin-top: 190px;">
            <div class="row" style="background-color: white; padding:2px; margin:2px">
                <div class="col-lg-8">
                    <div class="container">
                        <div class="judul-chekout">
                            <h5>Alamat Pengiriman</h5>
                        </div>
                        <form class="row g-3 mt-3">
                            <div class="col-12">
                                <label for="inputState" class="form-label">Nama Alamat</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih Tipe Alamat</option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Apartemen">Apartemen</option>
                                    <option value="Kantor">Kantor</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" id="inputAddress" value="<?= $user["nama"]; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">No Handphone Penerima</label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?= $user["no_telepon"] ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Alamat Lengkap (detail/Patokan/gang/Blok)</label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?= $user["alamat"] ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Kode Pos</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Kota</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-lg" style="background-color: #4930E9; font-weight:600; color:white">CHEKOUT</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container mt-3 p-3" style="background-color: #eaeaea; border-radius: 10px;">
                        <h5 style="font-weight: 500;">RINGKASAN BELANJA</h5>
                        <hr>
                        <h5>Produk Yang Dibeli : </h5>
                        <?php foreach ($this->cart->contents() as $items) : ?>
                            <?php $barang = $this->Model_Halaman_Pembeli->GetDetailProduk($items["id"]) ?>
                            <div class="container mt-5">
                                <div class="row">
                                    <hr>
                                    <div class="col-5">
                                        <img src="<?= base_url('public/image/fotoproduk/' . $barang["gambar"]) ?>" height="70px">
                                    </div>
                                    <div class="col">
                                        <td>
                                            <h5><?= $items["name"]; ?></h5>
                                        </td>
                                        <td>
                                            <h5 class="mt-3">X <?= $items["qty"]; ?></h5>
                                        </td>
                                        <td>
                                            <h5 class="mt-3">Rp. <?= number_format($items["price"], '0', ',', '.'); ?></h5>
                                        </td>
                                        <td>
                                            <h5 class="mt-3">SubTotal : Rp. <?= number_format($items["subtotal"], '0', ',', '.'); ?></h5>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <hr>
                        <h5>Total : Rp. <?= number_format($this->cart->total(), '0', ',', '.'); ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- </section> -->

    <!-- </div>/.container-fluid -->
    <!-- </div> -->


    <!-- /.content -->

    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
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
    <script src="<?= base_url() ?>public/MyModal.js"></script>
</body>

</html>