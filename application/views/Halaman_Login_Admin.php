<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>public/plugin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">


            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <?php if ($this->session->flashdata("login")) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                                            Maaf Username Dan Password Yang Anda Masukkan <strong><?= $this->session->flashdata("login") ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("loginn")) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                                            Maaf Username Dan Password Yang Anda Masukkan <strong><?= $this->session->flashdata("loginn") ?></strong>. Silahkan Aktivasi Terlebih Dahulu.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("loginnn")) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                                            Password Yang Anda Masukkan <strong><?= $this->session->flashdata("loginnn") ?></strong>. silahkan Masukkan Ulang
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata("sukses")) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show me-5 ms-5" role="alert" style="margin-top: 90px;">
                                            <strong><?= $this->session->flashdata("sukses") ?></strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    <?php endif; ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user" action="<?= base_url() ?>Login_Registrasi/LoginAdmin" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email2" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email Anda" value="<?= set_value("email2"); ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("email2"); ?></h5>
                                        <div class="form-group">
                                            <input type="password" name="password2" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" value="<?= set_value("password2") ?>">
                                        </div>
                                        <h5 class="text-danger"><?= form_error("password2"); ?></h5>
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url() ?>Login_Registrasi/ForgotPasswordAdmin">Forgot Password?</a>
                                    </div>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url() ?>Login_Registrasi/RegistrasiAdmin">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>public/plugin/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>public/plugin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>public/plugin/js/sb-admin-2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>