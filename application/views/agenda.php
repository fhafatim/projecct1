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
  <?php $this->load->view("_partials/navbar1.php") ?>
    <style>
@charset "utf-8";
/* CSS Document */
html,body,form{ margin:0px; padding:0px; font-family:Ebrima, Arial, Helvetica, sans-serif; font-size:12px; color:#666; empty-cells:hide;}
table.calendar{border-style: solid; border-width: 1px; border-width:1px; border-color:#666; -moz-box-shadow:0px 0px 4px #CCCCCC; -webkit-box-shadow:0px 0px 4px #CCCCCC; box-shadow:0px 0px 4px #CCCCCC; }
tr.calendar-row  {  }
td.calendar-day  { min-height:80px; position:relative; } * html div.calendar-day { height:80px; }
td.calendar-day:hover  { background:#FFF; -moz-box-shadow:0px 0px 20px #eeeeee inset; -webkit-box-shadow:0px 0px 20px #eeeeee inset; box-shadow:0px 0px 20px #eeeeee inset; cursor:pointer;}
td.calendar-day-np  { background:#eee; min-height:80px; } * html div.calendar-day-np { height:80px; }
td.calendar-day-head {font-weight:bold; text-shadow:0px 1px 0px #FFF;color:#666; text-align:center; width:64px; padding:12px 6px; border-bottom:1px solid #CCC; border-top:1px solid #CCC; border-right:1px solid #CCC; background: #ffffff;
background: -moz-linear-gradient(top,  #ffffff 0%, #ededed 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed));
background: -webkit-linear-gradient(top,  #ffffff 0%,#ededed 100%);
background: -o-linear-gradient(top,  #ffffff 0%,#ededed 100%);
background: -ms-linear-gradient(top,  #ffffff 0%,#ededed 100%);
background: linear-gradient(to bottom,  #ffffff 0%,#ededed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
}
div.day-number{padding:6px; text-align:center; }
/* shared */
td.calendar-day, td.calendar-day-np {padding:5px; border-bottom:1px solid #DBDBDB; border-right:1px solid #DBDBDB; font-size:14px;background: #ffffff;
background: -moz-linear-gradient(top,  #ffffff 0%, #f2f2f2 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f2f2f2));
background: -webkit-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
background: -o-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
background: -ms-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%);
background: linear-gradient(to bottom,  #ffffff 0%,#f2f2f2 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f2f2f2',GradientType=0 );
}
.overday{ color:#000; text-shadow:0px 1px 0px #FFF;}
.currentday{background: #ff8800 !important;
background: -moz-linear-gradient(top,  #ff8800 0%, #ff5500 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff8800), color-stop(100%,#ff5500)) !important;
background: -webkit-linear-gradient(top,  #ff8800 0%,#ff5500 100%) !important;
background: -o-linear-gradient(top,  #ff8800 0%,#ff5500 100%) !important;
background: -ms-linear-gradient(top,  #ff8800 0%,#ff5500 100%) !important;
background: linear-gradient(to bottom,  #ff8800 0%,#ff5500 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff8800', endColorstr='#ff5500',GradientType=0 ) !important; color:#FFF  !important; font-weight:bold; -moz-box-shadow:0px 0px 18px #1F68BA inset; -webkit-box-shadow:0px 0px 18px #1F68BA inset; box-shadow:0px 0px 18px #1F68BA inset;
}
.currentday:hover{-moz-box-shadow:0px 0px 24px #074080 inset !important; -webkit-box-shadow:0px 0px 24px #074080 inset !important; box-shadow:0px 0px 24px #074080 inset !important;}
</style>
<header>
<br>
<h2 align="center"><a href="#">KALENDER</a></h2>

<div class="container">
<center>
<br>
<br>

 <div id="calendar"></div>
 <?php
function draw_calendar($month,$year){


    // Draw table for Calendar
    $calendar = '
<table cellpadding="0" cellspacing="0" class="calendar">';


    // Draw Calendar table headings
    $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
    $calendar.= '
<tr class="calendar-row">
<td class="calendar-day-head">'.implode('</td>
<td class="calendar-day-head">',$headings).'</td>
</tr>
';


    //days and weeks variable for now ...
    $running_day = date('w',mktime(0,0,0,$month,1,$year));
    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));
    $days_in_this_week = 1;
    $day_counter = 0;
    $dates_array = array();


    // row for week one
    $calendar.= '
<tr class="calendar-row">';


    // Display "blank" days until the first of the current week
    for($x = 0; $x < $running_day; $x++):
        $calendar.= '
<td class="calendar-day-np"> </td>
';
        $days_in_this_week++;
    endfor;


    // Show days....
    for($list_day = 1; $list_day <= $days_in_month; $list_day++):
        if($list_day==date('d') && $month==date('n'))
        {
            $currentday='currentday';
        }else
        {
            $currentday='';
        }
        $calendar.= '
<td class="calendar-day '.$currentday.'">';
        
            // Add in the day number
            if($list_day<date('d') && $month==date('n'))
            {
                $showtoday='<strong class="overday">'.$list_day.'</strong>';
            }else
            {
                $showtoday=$list_day;
            }
            $calendar.= '
<div class="day-number">'.$showtoday.'</div>
';


        // Draw table end
        $calendar.= '</td>
';
        if($running_day == 6):
            $calendar.= '</tr>
';
            if(($day_counter+1) != $days_in_month):
                $calendar.= '
<tr class="calendar-row">';
            endif;
            $running_day = -1;
            $days_in_this_week = 0;
        endif;
        $days_in_this_week++; $running_day++; $day_counter++;
    endfor;


    // Finish the rest of the days in the week
    if($days_in_this_week < 8):
        for($x = 1; $x <= (8 - $days_in_this_week); $x++):
            $calendar.= '
<td class="calendar-day-np"> </td>
';
        endfor;
    endif;


    // Draw table final row
    $calendar.= '</tr>
';


    // Draw table end the table
    $calendar.= '</table>
';
    
    // Finally all done, return result
    return $calendar;
}
?>
<?php echo '
<h2></h2>
';
echo draw_calendar(1,2017); ?>
</div>


         <br>
         <br> 
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