<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Unistore &middot; Responsive E-Commerce Template</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="../vendor/icsb/favicon.png">

     <!-- Bootstrap -->
     <link href="<?= base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet">
    <link href="assets/css/carousel.css">
    <link href="<?= base_url('assets/css/carousel-recommendation.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/ionicons-2.0.1/css/ionicons.css')?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

       
        <div class="container">

        <!-- Page Heading -->
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="user" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>" readonly>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Password Lama</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passlama" name="current_password">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passbaru" name="new_password1">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="konpass" name="new_password2">

                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="col-12 align-center">
            <hr class="offset-sm hidden-sm">
            <hr>
            <p>Copyright © 2020 International Council for Small Business (ICSB) | Policy <br> Designed By Aisha Rahmayanti <a target="_blank"></a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
        <!-- End of Main Content -->
  </body>
