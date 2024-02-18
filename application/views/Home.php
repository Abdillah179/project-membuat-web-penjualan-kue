<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/AdminLTE/dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/style3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alkatra:wght@700&family=Anton&family=Geologica:wght@500&family=Lobster&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>public/css/responsive.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/app.css"> -->

</head>

<body class="hold-transition layout-top-nav">
  <?php if ($this->session->flashdata("kontakk")) : ?>
    <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
      Pesan Berhasil <strong><?= $this->session->flashdata("kontakk") ?>.</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <div class="wrapper">
    <!-- Navbar -->
    <div class="container-fluid p-0 m-0">
      <nav class="main-header navbar navbar-expand-lg bg-light navbar-light fixed-top">
        <div class="container mt-2">
          <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>public/image/logo .jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8; height:50px;">
            <span class="brand-text">Cahaya Bakery</span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item d-flex justify-content-center">
                <a class="nav-link " aria-current="page" href="#produkkami">Produk Kami</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <a class="nav-link" href="#kontak" style="margin-left: 10px; margin-right:9px;">Kontak</a>
              </li>
              <li class="nav-item d-flex justify-content-center">
                <div class="dropdown">
                  <a href="<?= base_url() ?>Login_Registrasi/index" class="btn btn-warning" type="button"><i class="fa fa-user" style="margin-right: 10px;"></i>Login</a>
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
  <div class="content-wrapper" style="margin-top:77px;">
    <div class="content m-0 p-0">
      <div class="container-fluid p-0 m-0">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url() ?>public/image/foto 13.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url() ?>public/image/foto 14.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url() ?>public/image/foto 15.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <section id="produkkami">
          <div class="container">
            <div class="row mt-5">
              <div class="container d-flex justify-content-center">
                <div class="judul">
                  <h1 style="font-size: 35px; font-weight:700">Produk Kami</h1>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-lg-3 col-4">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 1 .jpg" class="card-img-top">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE DADAR GULUNG</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 2.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE SUS COKLAT</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 3.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE SUS VANILLA</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 4.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE LAPIS BERAS</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 5.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE AWUK AWUK</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 6.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE TOK</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 7.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">KUE KLEPON</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 8.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROLL PANDAN</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 9.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROLL MOCCA</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 10.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROLL ZEBRA</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 11.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROLL SELAI</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotokue/foto 12.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROLL BANANA</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 1.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI COKLAT SUSU</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 2.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI KISMIS</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 3.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI KACANG</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 4.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI KACANG COKLAT</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 5.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI KOSONGAN MESES</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 6.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI BLUEBERRY</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 7.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI COKLAT</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 8.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI CREAM STRAWBERRY</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 9.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI CREAM VANILLA</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 10.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI CREAM DURIAN</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 11.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI MESES WIJEN</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-4 mt-2">
                <div class="card">
                  <img src="<?= base_url() ?>public/image/fotoproduk/foto 12.jpg" class="card-img-top" alt="...">
                  <div class="card-body" style="height: 89px;">
                    <p class="card-text text-center mt-3">ROTI SELAI NANAS</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="kontak">
          <div class="container mt-5">
            <div class="row">
              <div class="col">
                <div class="judul-kontak d-flex justify-content-center">
                  <h1 style="font-size: 35px; font-weight:700">Kontak</h1>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
              <div class="col-md-5">
                <form action="<?= base_url() ?>Home/Contact" method="post">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pengirim</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="name" name="nama_pengirim" />
                  </div>
                  <h5 style="color: red;"><?= form_error("nama_pengirim"); ?></h5>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" name="email_pengirim" />
                  </div>
                  <h5 style="color: red;"><?= form_error("email_pengirim") ?></h5>
                  <div class="mb-3">
                    <label for="no_handphone" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control" id="no_hp" aria-describedby="text" name="no_handphone" />
                  </div>
                  <h5 style="color: red;"><?= form_error("no_handphone"); ?></h5>
                  <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                  </div>
                  <h5 style="color: red;"><?= form_error("pesan"); ?></h5>
                  <button type="submit" name="kirim" class="btn btn-primary btn-kirim mb-5">Kirim</button>
                  <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </section>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer" style="background-color: black;">
    <div class="footer mt-3 mb-3">
      <div class="footer-top">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 footer-info" style="padding-top:10px;padding-bottom:0px">
              <div class="footer-title">TENTANG KAMI</div>
              <p class="mt-4">
                Cahaya Bakery adalah toko roti dan kue yang berdiri sejak 2003 yang menyediakan berbagai macam roti dan kue yang berkualitas dengan harga bersaing.
              </p>
            </div>

            <div class="col-lg-3 col-md-6" style="padding-top:10px;padding-bottom:0px;">
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


            <div class="col-lg-3 col-md-6" style="padding-top:10px;padding-bottom:0px">
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
    <div class="container con-1">
      <div class="copyright">
        © 2023 <strong><span>Cahaya Bakery</span></strong>.
      </div>
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="<?= base_url() ?>assets/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- <script src="<?= base_url() ?>public/MyModal.js"></script> -->
</body>

</html>