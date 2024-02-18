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
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/app.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>folder_plugin/css/lightgallery.css">
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

    <!-- /.navbar -->
    <div class="container mb-5" style="margin-top:150px">
        <div class="judul-produk">
            <h2 class="text-center">Gallery Produk</h2>
        </div>
        <div class="row me-2 ms-2" id="lightgallery">
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 1.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 1.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 1.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 2.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 2.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 2.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 3.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 3.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 3.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 4.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 4.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 4.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 5.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 5.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 5.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 6.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 6.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 6.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 7.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 7.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 7.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 8.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 8.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 8.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 9.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 9.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 9.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 10.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 10.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 10.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 11.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 11.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 11.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 12.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 12.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 12.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 17.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 17.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 17.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 18.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 18.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 18.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 19.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 19.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 19.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 20.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 20.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 20.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 21.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 21.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 21.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 22.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 22.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 22.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 23.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 23.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 23.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 24.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 24.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 24.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 25.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 25.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 25.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 26.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 26.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 26.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 27.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 27.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 27.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 28.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 28.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 28.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 41.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 41.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 41.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 42.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 42.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 42.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 49.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 49.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 49.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 43.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 43.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 43.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 44.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 44.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 44.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 45.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 45.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 45.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 46.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 46.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 46.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 47.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 47.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 47.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 48.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 48.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 48.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 50.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 50.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 50.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 51.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 51.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 51.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 52.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 52.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 52.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 53.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 53.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 53.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 54.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 54.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 54.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 55.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 55.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 55.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 56.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 56.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 56.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 57.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 57.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 57.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 58.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 58.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 58.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 59.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 59.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 59.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 61.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 61.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 61.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 62.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 62.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 62.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 66.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 66.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 66.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 67.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 67.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 67.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 68.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 68.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 68.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 69.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 69.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 69.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 70.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 70.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 70.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 71.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 71.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 71.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 72.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 72.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 72.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 73.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 73.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 73.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 74.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 74.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 74.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 75.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 75.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 75.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 76.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 76.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 76.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 77.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 77.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 77.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
            </div>
            <div class=" col-sm-4 mt-3" data-src="<?= base_url(); ?>public/image/fotoproduk/foto 78.jpg">
                <a href="<?= base_url(); ?>public/image/fotoproduk/foto 78.jpg">
                    <img src="<?= base_url(); ?>public/image/fotoproduk/foto 78.jpg" class="img-thumbnail" style="border-radius: 2rem" />
                </a>
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

    <script src="<?= base_url() ?>folder_plugin/js/lightgallery-all.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>

</body>

</html>