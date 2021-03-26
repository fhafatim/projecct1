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

    <header>
      <div class="carousel">
        <!-- <button class="btn btn-control"></button> -->
        <div class="items">
          <div class="item" data-marker="1">
            <img src=""/>
            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      <div class="align-center">
                        <h1>International Council for Small Business (ICSB) Indonesia</h1>
                        <h2>Form Pengajuan UMKM</h2>
                        <br><br>
                      </div>
                      <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                </div>
                                <div class="row">
                                    <form enctype="multipart/form-data" action="<?php echo site_url(). '/pengajuan/simpan'; ?>" method="POST">
                                    <div class="alert alert-info">
                                    <strong>Data Diri</strong>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-4 form-group">
                                                <label class="control-label">NIK</label>
                                                <input required class="form-control form-white" placeholder="Diisi Sesuai NIK" type="number" name="nik" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <!-- <br> -->
                                                <label class="control-label">Nama Pemilik</label>
                                                <input required class="form-control form-white" placeholder="Nama Lengkap" type="text" name="nama_pemilik" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Alamat Rumah</label>
                                                <input required class="form-control form-white" placeholder="Jalan/Dusun, Keluarahan/Desa, Kecamatan" type="text" name="alamat_rumah" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">No Tlp/HP</label>
                                                <input required class="form-control form-white" placeholder="Nomor Tlp/HP" type="number" name="no_hp" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">  
                                                <label class="control-label">KTP *jpg/png</label>
                                                <input required class="form-control form-white" placeholder="Foto KTP" type="file" name="ktp" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">  
                                                <label class="control-label">Foto Pemilik *jpg/png</label>
                                                <input required class="form-control form-white" placeholder="Foto Pemilik" type="file" name="foto_pemilik" />
                                                <!---->
                                            </div>
                                      <div class="alert alert-info col-md-12">
                                      <strong>Detail Usaha</strong>
                                      </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Nama Usaha</label>
                                                <input required class="form-control form-white" placeholder="Nama Usaha" type="text" name="nama_usaha" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Alamat Usaha</label>
                                                <input required class="form-control form-white" placeholder="Jalan/Dusun, Keluarahan/Desa, Kecamatan" type="text" name="alamat_usaha" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Jenis Usaha</label>
                                                <select class="form-select form-control" name="jenis_usaha">
                                                    <option value=""></option>
                                                    <option value="produksi">Produksi</option>
                                                    <option value="perdagangan">Perdagangan</option>
                                                    <option value="jasa">Jasa</option>
                                                    <option value="pertanian">Pertanian</option>
                                                    <option value="peternakan">Peternakan</option>
                                                </select>
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Modal Usaha Awal</label>
                                                <input required class="form-control form-white" placeholder="Modal" type="number" name="modal" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Nilai Aset</label>
                                                <input required class="form-control form-white" placeholder="Nilai Aset" type="number" name="aset" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Omset Penjualan Perbulan</label>
                                                <input required class="form-control form-white" placeholder="Omset Penjualan" type="number" name="omset" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Keuntungan/Laba Perbulan</label>
                                                <input required class="form-control form-white" placeholder="Keuntungan/Laba" type="number" name="laba" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Jumlah Tenaga Kerja</label>
                                                <input required class="form-control form-white" placeholder="Jumlah Tenaga Kerja" type="number" name="tenaga_kerja" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Pernah/Belum Mendapat Pinjaman Dana</label>
                                                <select class="form-select form-control" name="pinjaman_dana">
                                                    <option value=""></option>
                                                    <option value="pernah">Pernah</option>
                                                    <option value="belum_pernah">Belum Pernah</option>
                                                </select>
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label class="control-label">Pernah Ikut Pembinaan Usaha</label>
                                                <select class="form-select form-control" name="pembinaan_usaha">
                                                    <option value=""></option>
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">  
                                                <label class="control-label">Tahun Mulai Berusaha</label>
                                                <input required class="form-control form-white" placeholder="Tahun Mulai Usaha" type="number" name="tahun_usaha" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">  
                                                <label class="control-label">Foto Produk *jpg/png</label>
                                                <input required class="form-control form-white" placeholder="Foto Produk" type="file" name="foto_produk" />
                                                <!---->
                                            </div>
                                            <div class="col-md-4 form-group">  
                                                <label class="control-label">Surat Keterangan Usaha (Desa/Kelurahan) *jpg/png</label>
                                                <input required class="form-control form-white" placeholder="Foto SUKET" type="file" name="pernyataan" />
                                                <!---->
                                            </div>
                                            <div class="form-group col-md-12">
                                              <input required type="submit" class="btn btn-primary" value="Kirim"/>
                                            </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>
    <br><br>

          
    <footer>     
    <div class="col-sm-6 col-sm-offset-3 align-center">
              <a href="#"><i class="ion-social-facebook"></i></a>
              <a href="#"><i class="ion-social-twitter"></i></a>
              <a href="#"><i class="ion-social-googleplus-outline"></i></a>
              <a href="#"><i class="ion-social-instagram-outline"></i></a>
              <a href="#"><i class="ion-social-linkedin-outline"></i></a>
              <a href="#"><i class="ion-social-youtube-outline"></i></a>
            </div>

        <div class="row menu">
          <div class="col-sm-3 col-md-2">
           
            </div>
          </div>
          
            </div>
          </div>
         
              
            </div>
            <hr class="offset-xs">

      <hr>

          </div>
          <div class="col-sm-6 col-sm-offset-3 align-center">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>Copyright © 2020 International Council for Small Business (ICSB) | Policy <br> Designed By Aisha Rahmayanti <a target="_blank"></a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <h4 class="modal-title">Forgot Your Password?</h4>
                  <br>

                  <form class="join" action="index.php" method="post">
                    <input required type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                    <a href="#Sign-In" data-action="Sign-In">Back ></a>
                  </form>
                </div>
                <div class="col-sm-6">
                  <br><br>
                  <p>
                    Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/core.js"></script>
    <script src="../js/carousel.js"></script>
    <script src="../js/carousel-recommendation.js"></script>
    
  </body>
</html>