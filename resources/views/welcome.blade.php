<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Countdown landing page Bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700">
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="{{mix('css/countdown.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div style="background-image: url('images/beach.jpg')" class="main"> 
      <div class="overlay"></div>
      <div class="container">
        <p class="social"><a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="gplus"><i class="fa fa-google-plus"></i></a><a href="#" title="" class="instagram"><i class="fa fa-instagram"></i></a></p>
        <div class="row">
          <div class="col-sm-12">
            <h1 class="cursive">Countdown template</h1>
            <h2 class="sub">We are still tweaking few details, stay tuned!</h2>
          </div>
        </div>
        <!-- countdown-->
        <div id="countdown" class="countdown">
          <div class="row">
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-days" class="countdown-number">&nbsp;</div>
              <div class="countdown-label">days</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-hours" class="countdown-number">&nbsp;</div>
              <div class="countdown-label">hours</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-minutes" class="countdown-number">&nbsp;</div>
              <div class="countdown-label">minutes</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
              <div id="countdown-seconds" class="countdown-number">&nbsp;</div>
              <div class="countdown-label">seconds</div>
            </div>
          </div>
        </div>
        <!-- /.countdown-->
        <div class="mailing-list">
          <h3 class="mailing-list-heading">Join our mailing list and we will let you know all the news!</h3>
          <div class="row">
            <form class="form-inline">
              <div class="form-group">
                <label for="email" class="sr-only"></label>
                <input type="email" placeholder="jane.doe@example.com" id="email" class="form-control transparent">
              </div>
              <button class="btn btn-danger">subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy;2015 Your name/company goes here</p>
            </div>
            <div class="col-md-6">
              <p class="credit">Theme by <a href="https://bootstrapious.com/tutorials">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support the development at https://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{mix('js/date.js')}}"></script>
    <script type="text/javascript">
      let countDownDate = "{{param('countdown_date', 'date', '01-01-2018')}}";
      let dateFormat = 'DD-MM-Y';

      config = {
          countdown: {
              year: moment(countDownDate, dateFormat).format('Y'),
              month: moment(countDownDate, dateFormat).format('MM'),
              day: moment(countDownDate, dateFormat).format('DD'),
              hour: 0,
              minute: 0,
              second: 0
          }
      }
    </script>
    <!-- JAVASCRIPT FILES -->
    <script src="{{mix('js/countdown.js')}}"></script>
  </body>
</html>