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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/carousel.css')?>" rel="stylesheet">
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
      <div class="carousel" data-count="3" data-current="2">
        <!-- <button class="btn btn-control"></button> -->

        <div class="items">
          <div class="item active" data-marker="1">
            <img src="assets/img/carousel/bckg.jpg" alt="Background" class="background"/>
            
            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 align-center">
                        <h1>International Council for Small Business (ICSB) Indonesia                        </h1>
                        <p>International Council for Small Business (ICSB) Indonesia adalah organisasi nonprofit dengan jaringan global di 85 negara    yang fokus pada pemberdayaan usaha kecil dan menengah (UKM) serta penyebaran semangat kewirausahaan                        </p>
                        <br><br>
                      </div>
                      <div class="col-sm-6 col-sm-offset-3 align-center">
                        <img src="assets/img/carousel/pict1.jpg" alt="Laptops"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item" data-marker="2">
            <img src="assets/img/carousel/bckg.jpg" alt="Background" class="background"/>

            <div class="content">
              <div class="outside-content">
                <div class="inside-content">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 align-center">
                        <img src="assets/img/carousel/pict2.jpg" alt="Surface Pro"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <ul class="markers">
          <li data-marker="1" class="active"><img src="<?php echo base_url('assets/img/carousel/pict1.jpg')?>" alt="Background"/></li>
          <li data-marker="2" class="active"><img src="<?php echo base_url('assets/img/carousel/pict2.jpg')?>" alt="Background"/></li>
        </ul>
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
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
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
    <script src="assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/core.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/carousel-recommendation.js"></script>
    
  </body>
</html>