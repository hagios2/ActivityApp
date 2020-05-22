<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="shortcut icon" href="https://npontu.com/UI/img/NpontuLogostroke.png" />
  <title>Npontu Support App</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Aquamarine template for unique events.">
  <meta name="keywords" content="Pingendo conference event aquamarine free template bootstrap 4">

  <script src="{{ asset('js/app.js') }}"></script>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="aquamarine.css">
  <link rel="stylesheet" href="rating.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark" style="transition: all 0.25s;">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation" style=""> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
    {{--       <li class="nav-item mx-2">
            <a class="nav-link" href="#schedule">Orders</a>
          </li> --}}
        </ul>
        <a class="btn navbar-btn mx-2 text-white btn-outline-light" href="/login">Login now</a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url('https://eliteforce.nl/wp-content/uploads/2018/11/customer-care.jpg'); transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-5">
          <h1 class="display-2 d-none d-md-block">Npontu Technologies</h1>
          <h1 class="display-4 d-block d-md-none">Support Personnel</h1>
          <p class="">{{ Date('Y-m-d') }}, NYC </p>
          <a href="/login" class="btn btn-lg mt-4 btn-outline-light">Login</a><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
        </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
{{--   <div class="py-5 section-parallax" style="background-image: url('https://www.resume4dummies.com/wp-content/uploads/2020/02/customer-service-representative-resume-1194x882.jpg'); transition: all 0.25s;">
  </div> --}}
  <!-- Speakers -->
  <div class="py-3 text-center" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
      </div>
      <div class="row justify-content-center">
      </div>
    </div>
  </div>
  <div class="py-5 bg-light col-md-12" id="speakers" style="transition: all 0.25s;" style="height: 400">
    <div class="container-fluid">
      <div class="row">
      </div>
      <h3 class="mb-0"><b>Npontu Technologies</b></h3> <br>
      <div class="row">
        <div class="col-md-6">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://www.cancapital.com/wp-content/uploads/2016/03/ERP5.jpg">
                <div class="carousel-caption">
                  <h5 class="m-0">Support Service </h5>
                  <p>Providing quality service to our clients</p>
                </div>
              </div>
              <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://www.allbusiness.com/asset/2019/06/Customer-care-concept.jpg">
                <div class="carousel-caption">
                    <h5 class="m-0">Support Service </h5>
                    <p>Providing quality service to our clients</p>
                </div>
              </div>
              <div class="carousel-item active">
                <div class="carousel-caption">
                    <h5 class="m-0">Support Service </h5>
                    <p>Providing quality service to our clients</p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style=""> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
        <div class="col-md-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.0145746104545!2d-0.2741729857944157!3d5.564856495965288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf982662c72685%3A0xcb320c00ad026473!2sNpontu%20Technologies%20Ltd!5e0!3m2!1sen!2sgh!4v1590139377506!5m2!1sen!2sgh" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
 
  <!-- Schedule -->
  <div class="py-5">
  </div>
  <!-- Call to action -->
  <div class="py-5 section-aquamarine" id="register" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-md-left text-center">
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="text-md-left text-center p-4 bg-dark text-light" style="transition: all 0.25s;">
    <div class="container">
      <div class="row">
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Npontu Technologies</h3>
          <p class="text-muted">March 4, 2020</p>
          <p class="my-3">
            <a href="https://goo.gl/maps/ayn28vkB5F92" target="blank" class="text-muted">Empire State building 350 5th Ave, <br>New York, NY 10118</a>
          </p>
        </div>
        <div class="my-3 col-lg-4 col-md-6">
          <h3>Contact us</h3>
          <form>
            <fieldset class="form-group my-3">
              <input type="email" class="form-control" id="Input Email" placeholder="Email"> </fieldset>
            <fieldset class="form-group my-3">
              <input type="message" class="form-control" id="Input Message" placeholder="Message"> </fieldset>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-1"> </div>
        <div class="my-3 col-lg-3">
          <h3>Follow</h3>
          <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-square text-muted fa-3x m-2"></i></a>
          <a href="https://www.instagram.com" target="blank"><i class="fa fa-3x fa-instagram text-muted m-2"></i></a>
          <a href="https://twitter.com" target="blank"><i class="fa fa-3x fa-twitter m-2 text-muted"></i></a>
          <a href="https://plus.google.com" target="blank"><i class="fa fa-3x fa-google-plus-official text-muted m-2"></i></a>
          <a href="https://pinterest.com" target="blank"><i class="fa fa-3x text-muted fa-pinterest-p m-2"></i></a>
          <a href="https://www.youtube.com" target="blank"><i class="fa fa-3x text-muted fa-youtube-play m-2"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted">© Copyright 2020 Shuntaul - All rights reserved. </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" style="transition: all 0.25s;"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" style="transition: all 0.25s;"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" style="transition: all 0.25s;"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js" style="transition: all 0.25s;"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>