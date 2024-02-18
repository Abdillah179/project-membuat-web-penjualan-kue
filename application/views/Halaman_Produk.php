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

  <!-- <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/dist/css/adminlte.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/responsive.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/app.css"> -->

  <link rel="stylesheet" href="<?= base_url() ?>public/css/style3.css">



</head>

<body class="hold-transition layout-top-nav">
  <?php if ($this->session->flashdata("Loginnnn")) : ?>
    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
      Login <strong><?= $this->session->flashdata("Loginnnn") ?></strong> Selamat Datang <strong><?= $user["nama"]; ?></strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata("keranjang")) : ?>
    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
      Produk Berhasil <strong><?= $this->session->flashdata("keranjang") ?> Ke Keranjang.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata("lebihbatass")) : ?>
    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
      Maaf QTY yang anda inputkan Melebihi <strong><?= $this->session->flashdata("lebihbatass") ?> Produk.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <div class="wrapper">
    <!-- Navbar -->
    <div class="container-fluid p-0 m-0 dark-produkkk">
      <nav class="main-header navbar navbar-expand-lg navbar-light fixed-top">
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
                <a class="nav-link" href="<?= base_url() ?>Halaman_Pembeli/GalleryProduk" style="margin-left: 10px; margin-right:9px;">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>Halaman_Pembeli/HalamanKeranjang">
                  <i class="fa fa-shopping-cart"><?= $this->cart->total_items(); ?></i>
                </a>
              </li>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline small" style="color: rgb(201, 197, 197);"><?= $user["nama"]; ?></span>
                  <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" height="20px" class="rounded-circle">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url() ?>Halaman_Pembeli/Profile">
                    <!-- <i class="fas fa-sign-out-alt fa fa-user mr-2 text-gray-400"></i>
                    Profile -->
                    <img src="<?= base_url('assets/profile/' . $user["image"]); ?>" height="20px" class="rounded-circle me-2"> Profile
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

  <!-- Content Wrapper. Contains page content -->
  <!-- <section id="produk"> -->
  <!-- <div class="content-wrapper">
    <div class="content m-0 p-0"> -->
  <div class="container-fluid p-0 m-0">
    <div class="row">
      <img src="<?= base_url() ?>public/image/foto baru.jpg" width="1360px" height="700px">
    </div>
    <div class="container-fluid p-0 m-0">
      <div class="row mt-5 ms-4 me-4 p-2 dark-produk">
        <div class="col-md-2 mt-5 hidden-md-down mb-5">
          <!-- <div class="border hidden-sm-down widget-wrapper mb-5 mt-3">
              <h5>Sorted By</h5>
              <div class="ml-2">
                <ul style="text-decoration: none; list-style: none; padding: 0">
                  <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-order-sorting">A-Z</a> </li>
                  <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-order-sorting/1">Z-A</a> </li>
                  <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-order-sorting/2">Recomended</a> </li>
                </ul>
              </div>
            </div> -->
          <!-- <div class="border hidden-sm-down widget-wrapper">
                <h5>Location</h5>
                <div class="ml-2">
                  <ul id="filter-kitchen-group">
                    <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-kitchen/4">Bali</a> </li>
                    <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-kitchen/10">Balikpapan</a> </li>
                    <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-kitchen/23">Bandung</a> </li>
                    <li> <a class="kitchen-list " href="https://www.hollandbakery.co.id/set-kitchen/26">Batam</a> </li>
                  </ul> <a class="color-black" id="lokasi" href="#" role="button" aria-expanded="false" aria-controls="lokasi">Other Cities</a>
                </div>
              </div> -->
          <div class="border hidden-sm-down widget-wrapper mt-3 dark-produkk">
            <h5 class="text-center">Category</h5>
            <hr>
            <ul class="nav flex-column">
              <li class="nav-item"><a class="nav-link active color-black" href="<?= base_url() ?>Halaman_Pembeli/index">All Product</a>
              </li>
              <?php foreach ($kategori as $ktgr) : ?>
                <li class="nav-item"> <a href="<?= base_url() ?>Halaman_Pembeli/TampilCategory/<?= $ktgr["id_kategori"]; ?>" class="nav-link color-black"><?= $ktgr["nama_kategori"]; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div id="tambahan-menu" class="col-12 mt-3" style="display: none;">
          <div class="row d-flex justify-content-center">
            <div class="col-6 no-gutters"><button class="compare-btn btn btn-holland-color-1 card-img-bottom rounded-0" style="font-size:12px;">COMPARE</button> <button style="display: none; font-size:12px;" class="show-me-comparison btn btn-holland-color-1 card-img-bottom rounded-0">SHOW ME COMPARISON</button></div>
            <div class="col-6 no-gutters"><button id="btn_sort_action" class="btn btn-holland-color-1 card-img-bottom rounded-0" style="font-size:12px;">SORTED BY</button></div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-10 mt-5">
          <div class="row text-center">
            <?php foreach ($produk as $prdk) : ?>
              <div class="col-6 col-sm-4 col-lg-3">
                <div class="card mt-3">
                  <img src="<?= base_url() . 'public/image/fotoproduk/' . $prdk["gambar"]; ?>" height="200px">
                  <div class="card-body mt-3 text-center">
                    <h5 class="card-title text-center"><?= $prdk["nama_barang"]; ?></h5>
                    <p class="card-text">Rp. <?= number_format($prdk["harga_barang"], 0, ',', '.'); ?></p>
                    <form action="<?= base_url() ?>Halaman_Pembeli/Keranjang/<?= $prdk["id_barang"]; ?>" method="post">
                      <div class="input-group mb-3">
                        <input type="number" name="qty" class="form-control" min="1" value="1" style="width: 10px;">
                        <span class="input-group-append">
                          <a href="<?= base_url() ?>Halaman_Pembeli/Keranjang/<?= $prdk["id_barang"]; ?>"><button type="submit" class="btn btn-success btn-number"><i class="fas fa-cart-plus"></i></button></a>
                        </span>
                      </div>
                    </form>
                    <a href="<?= base_url() ?>Halaman_Pembeli/DetailProduk/<?= $prdk["id_barang"] ?>" class="btn btn-warning d-block mb-2">Detail Produk</a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="container mt-5 d-flex justify-content-center me-5">
            <!-- <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav> -->

            <?= $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </section> -->
  <!-- </div>
  </div> -->




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

  <script src="<?= base_url() ?>public/AdminLTE/plugins/jquery/jquery.min.js"></script>

  <script src="<?= base_url() ?>public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="<?= base_url() ?>public/AdminLTE/dist/js/adminlte.min.js"></script>

  <script src="<?= base_url() ?>public/AdminLTE/dist/js/demo.js"></script>
  <script src="<?= base_url() ?>public/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
  <!-- <script src="<?= base_url() ?>public/AdminLTE/assets/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- <script src="<?= base_url() ?>public/MyModal.js"></script> -->

</body>

</html>