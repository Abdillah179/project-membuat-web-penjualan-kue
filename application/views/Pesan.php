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


    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center mb-3">
                    <img src="<?= base_url(); ?>public/image/logo .jpg" height="150px;">
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h5>Hai <?= $this->session->userdata("email") ?>, Terimakasih Sudah Berbelanja Di Website Kami <br> Pesanan anda sedang diproses dan akan kami kirimkan secepatnya ke alamat tujuan.</h5>
                </div>
                <div class="col-12">
                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-shopping-cart"></i> Checkout.
                                    <small class="float-right">Date : <?= date('d-m-y'); ?></small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive" style="background-color: #fff;">

                                <table class="table table-striped" style="background-color: #fff;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Berat Satuan Produk (gr)</th>
                                            <th>Total Berat (gr)</th>
                                            <th>QTY</th>
                                            <th>Subtotal</th>
                                            <th>Kategori Barang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php $no = 1; ?>
                                        <?php $total_berat = 0; ?>


                                        <?php foreach ($this->cart->contents() as $items) : ?>

                                            <!-- <?php echo form_hidden("id_barang", $items["id"]); ?> -->

                                            <?php $berat = $items["berat"] * $items["qty"]; ?>
                                            <?php $total_berat = $total_berat + $berat; ?>

                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><img src="<?= base_url('public/image/fotoproduk/' . $items["gambar"]) ?>" height="100px"></td>
                                                <td><?php echo $items['name']; ?></td>
                                                <td style="text-align:left">Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                                                <td><?= $items["berat"]; ?>gr</td>
                                                <td><?= $berat; ?>gr</td>
                                                <td><?= $items["qty"]; ?></td>
                                                <td>Rp. <?= number_format($items["subtotal"], '0', '.', '.'); ?></td>
                                                <td><?= $items["kategori"]; ?></td>
                                            </tr>

                                            <?php $i++; ?>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div>
        </div>
    </section>
    <!-- /.container-fluid -->



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