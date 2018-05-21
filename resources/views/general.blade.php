
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">



<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<link href="css/app.css" rel="stylesheet">
</head>
<!--Change Class in body to change color Scheme for Homepages  ie theme-green , theme-green -->

<body class="theme-green">
<div class="page-wrapper"> 
  
  <!-- start preloader -->
  <div class="preloader"></div>
  <!-- end preloader --> 
  
  <!-- Main Header / Style One-->
  <header class="main-header header-style-one"> 
    <!-- Header Top -->
    <div class="header-top">
      <div class="container clearfix ptn pbn"> 
        <!--Top Left-->
        <div class="top-left pull-left">

            <ul class="info-nav clearfix">
                <li> 
                    <div class="social-links pull-left">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-youtube-play"></span></a>
                    </div>
                </li>
                <li>
                    <a href="#"> @lang('home.nosotros') </a>
                </li>
                <li class="separator">
                    <span class="fa fa-circle"></span>
                </li>
                <li>
                    <a href="#"> @lang('home.puerto-vallarta') </a>
                </li>
          </ul>

        </div>
        <!--Top Right-->
        <div class="top-right pull-right clearfix">
            <ul class="info-nav clearfix">
                <li>
                    <a href=""> <span class="icon-phone"></span> @lang('home.phone') </a>
                </li>
                <li>
                    <a href=""> <span class="icon-movil"></span> @lang('home.movil') </a>
                </li>
                <li>
                    <a href="#" class="contacto text-uppercase"> <span class="icon-contact"></span> @lang('home.contacto') </a>
                </li>
                <li>
                    <a href="#" class="text-uppercase"> @lang('home.lang') </a>
                </li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Header Top End --> 
    
    <!--Header-Main Box-->
    <div class="header-mainbox">
      <div class="container ptn pbn">
        <div class="clearfix">
          <div class="pull-left">
            <div class="logo"> <a href="index-mp-layout1.html"><img src="images/logo/logo.png" alt="" title="Green"></a> </div>
          </div>
          <div class="outer-box clearfix"> 
            <!-- Main Menu -->
            <nav class="main-menu logo-outer">
              <div class="navbar-header"> 
                <!-- Toggle Button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li class="current"> <a href="#"> @lang('home.home') </a>
                  </li>
                  <li class="dropdown"> <a href="#"> @lang('home.cirugia-gas') </a>
                    <ul>
                      <li><a href="about-1.html">About Style One</a></li>
                      <li><a href="about-2.html">About Style Two</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#"> @lang('home.cirugia-bar') </a>
                    <ul>
                      <li><a href="service-1.html"> @lang('home.manga-gastrica') </a></li>
                      <li><a href="service-2.html"> @lang('home.bypass') </a></li>
                      <li><a href="service-3.html"> @lang('home.cirugia-paq') </a></li>
                      <li><a href="services-details.html"> @lang('home.url-imc') </a></li>
                      <li><a href="services-details.html"> @lang('home.obesidad') </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#"> @lang('home.hospitales') </a>
                    <ul>
                      <li><a href="portfolio-3.html"> @lang('home.cmq') </a></li>
                      <li><a href="portfolio-4.html"> @lang('home.cmq-nayarit') </a></li>
                      <li><a href="portfolio-fullwidth.html"> @lang('home.consultorio') </a></li>
                    </ul>
                  </li>
                  <li> <a href="#"> @lang('home.testimonio') </a>
                  </li>
                  <li> <a href="blog.html"> @lang('home.blog') </a></li>
                  <li> <a href="#"> @lang('home.galeria') </a>
                  
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Main Menu End--> 
          </div>
        </div>
      </div>
    </div>
    <!--Header Main Box End--> 
  </header>
  <!--End Main Header --> 
  @yield('content')
  
  
  <!--Main Footer-->
  <footer class="main-footer">
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-3 col-sm-6 col-xs-12">

          <div class="footer-1">
            
            <h4> @lang('home.contacto') </h4>
            <div>
              <p>
                Neo Médica / CMQ Premiere <br />
                160 int. 9 Av. Los tules <br />
                Puerto Vallarta, Jalisco.
              </p>
              <p>
                CMQ Riviera Nayarit <br />
                280 Av. Héroes de Nacozari <br />
                Bucerías, Nayarit.
              </p>
            </div>

          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="mas-info footer-2">
            <h4>@lang('home.mas-informacion') </h4>
            <ul>
              <li>
                <a href="#" class="contacto text-uppercase"> <span class="icon-contact"></span> @lang('home.contacto')</a>
              </li>
              <li>
                <a href=""> <span class="icon-phone"></span> @lang('home.phone') </a>
              </li>
              <li>
                <a href=""> <span class="icon-movil"></span> @lang('home.movil') </a>
              </li>
              
            </ul>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="formadepago footer-3">
            <h4> @lang('home.forma-pago') </h4>
            <ul>
              <li> <span class="icon-visa"></span> </li>
              <li> <span class="icon-mastercard"></span> </li>
              <li> <span class="icon-amex"></span> </li>
            </ul>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-4">
            <h4> @lang('home.mapa-sitio') </h4>
            <ul>
              <li> <a href=""> @lang('home.home') </a> </li>
              <li> <a href=""> @lang('home.cirugia-gas') </a> </li>
              <li> <a href=""> @lang('home.cirugia-bar') </a> </li>
              <li> <a href=""> @lang('home.hospitales') </a> </li>
              <li> <a href=""> @lang('home.blog') </a> </li>
              <li> <a href=""> @lang('home.galeria') </a> </li>
          </div>
        </div>
      </div>
      <div class="social col-md-12">
        <ul>
          <li> <a href="#"> <span class="fa fa-facebook-f"></span> </a> </li>
          <li> <a href="#"> <span class="fa fa-google-plus"></span> </a> </li>
          <li> <a href="#"> <span class="fa fa-youtube-play"></span> </a> </li>
        </ul>
    </div>
    <div class="aviso col-md-12">
        <a href="#"> @lang('home.aviso-privacidad') </a>
    </div>
    </div>
  </footer>
</div>

<!--End pagewrapper--> 
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>
<script src="js/jquery.js"></script> 
<script src="js/all-jquery.js"></script> 
<script src="js/script.js"></script>
</body>
</html>