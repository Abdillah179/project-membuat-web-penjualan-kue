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
                                <a class="nav-link" href="<?= base_url(); ?>Halaman_Pembeli/Contact" style="margin-left: 10px; margin-right:9px;">Kontak</a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="" style="margin-left: 10px; margin-right:9px;">About</a>
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
    <!-- <div class="content-wrapper">
        <div class="content p-0 m-0"> -->
    <div class="main-wrapper">
        <div class="account-information">
            <div class="container" style="margin-top: 150px;">
                <div class="row">
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <div class="side-menu">
                            <label class="pl20">Profil Saya</label>
                            <ul>
                                <li class="active"><a href="<?= base_url() ?>Halaman_Pembeli/Profile">Akun</a></li>
                                <li class=""><a href="<?= base_url() ?>Halaman_Pembeli/Alamat">Alamat</a></li>
                                <li class=""><a href="<?= base_url(); ?>Halaman_Pembeli/DetailHistoriPesanan">History Pesanan</a></li>
                                <li class=""><a href="<?= base_url() ?>Halaman_Pembeli/PesananSaya">Pesanan Saya</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="title pb30">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1>Akun</h1>
                                </div>
                            </div>
                        </div>
                        <div class="content profile">
                            <label>Biodata Diri</label>
                            <div class="profile mt-2">
                                <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" height="90px">
                            </div>
                            <dl class="row mt-3">

                                <dt class="col-sm-3">Nama</dt>
                                <dd class="col-sm-9"><?= $user["nama"]; ?></dd>

                                <dt class="col-sm-3">Jenis Kelamin</dt>
                                <dd class="col-sm-9"><?= $user["jenis_kelamin"]; ?></dd>

                                <dt class="col-sm-3">Tempat Lahir</dt>
                                <dd class="col-sm-9"><?= $user["tempat_lahir"]; ?></dd>

                                <dt class="col-sm-3">Tanggal Lahir</dt>
                                <dd class="col-sm-9"><i><?= $user["tanggal_lahir"]; ?></i></dd>


                                <dt class="col-sm-3">Nomor HP</dt>
                                <dd class="col-sm-9"><i><?= $user["no_telepon"]; ?></i></dd>

                                <dt class="col-sm-3">Email</dt>
                                <dd class="col-sm-9"><i><?= $user["email"]; ?></i></dd>
                            </dl>

                            <div class="pt10 pb20">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Ubah Biodata
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Biodata </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url() ?>Halaman_Pembeli/UpdateProfileUser" method="post" enctype="multipart/form-data">
                                                    <h5 class="text-danger"><?= form_error("nama"); ?></h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?= $user["nama"]; ?>">
                                                    </div>
                                                    <h5 class="text-danger"><?= form_error("jenis_kelamin"); ?></h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Jenis Kelamin</label>
                                                        <select class="form-select" name="jenis_kelamin" id="exampleFormControlInput1" value="<?= $user["jenis_kelamin"]; ?>">
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <h5 class="text-danger"><?= form_error("tempat_lahir"); ?></h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Tempat Lahir</label>
                                                        <input type="text" class="form-control" name="tempat_lahir" id="exampleFormControlInput1" value="<?= $user["tempat_lahir"]; ?>">
                                                    </div>
                                                    <h5 class="text-danger"><?= form_error("tanggal_lahir"); ?></h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" name="tanggal_lahir" id="exampleFormControlInput1" value="<?= $user["tanggal_lahir"]; ?>">
                                                    </div>
                                                    <h5 class="text-danger"><?= form_error("no_telepon"); ?></h5>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">No Telepon</label>
                                                        <input type="text" class="form-control" name="no_telepon" id="exampleFormControlInput1" value="<?= $user["no_telepon"]; ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputFile">Ganti Foto</label>
                                                        <input type="file" name="image" class="form-control" id="exampleInputFile">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 400;">Email</label>
                                                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" readonly value="<?= $user["email"]; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
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
    <!-- <script src="<?= base_url() ?>public/MyModal.js"></script> -->
</body>

</html>