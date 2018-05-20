
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
                    <a href="#"> Nosotros </a>
                </li>
                <li class="separator">
                    <span class="fa fa-circle"></span>
                </li>
                <li>
                    <a href="#"> Puerto Vallarta </a>
                </li>
          </ul>

        </div>
        <!--Top Right-->
        <div class="top-right pull-right clearfix">
            <ul class="info-nav clearfix">
                <li>
                    <a href=""> <span class="icon-phone"></span> (322) 223 5521</a>
                </li>
                <li>
                    <a href=""> <span class="icon-movil"></span> (044) 322 150 6291</a>
                </li>
                <li>
                    <a href="#" class="contacto"> <span class="icon-contact"></span> Contacto</a>
                </li>
                <li>
                    <a href="#">ENG</a>
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
                  <li class="current dropdown"> <a href="#">Inicio</a>
                    <ul>
                      <li><a href="index.html">Home One</a></li>
                      <li><a href="index-mp-layout2.html">Home Two</a></li>
                      <li><a href="index-mp-layout3.html">Home Three</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#">Cirugía Gastrointestinal</a>
                    <ul>
                      <li><a href="about-1.html">About Style One</a></li>
                      <li><a href="about-2.html">About Style Two</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#">Cirugía Bariátrica</a>
                    <ul>
                      <li><a href="service-1.html">department One</a></li>
                      <li><a href="service-2.html">department Two</a></li>
                      <li><a href="service-3.html">department Three</a></li>
                      <li><a href="services-details.html">department Details</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#">Hospitales</a>
                    <ul>
                      <li><a href="portfolio-3.html">Portfolio Three Column</a></li>
                      <li><a href="portfolio-4.html">Portfolio Four Column</a></li>
                      <li><a href="portfolio-fullwidth.html">Portfolio Fullwidth</a></li>
                      <li><a href="portfolio-gutter-less.html">Portfolio Gutter Less</a></li>
                      <li><a href="portfolio-details.html">Portfolio Details</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#">Testimonios</a>
                    <ul>
                      <li><a href="pricing-table.html">Pricing Table</a></li>
                      <li><a href="faq.html">Faq</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="blog.html">Blog</a>
                    <ul>
                      <li><a href="blog-grid.html">Blog Grid</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                      <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                      <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#">Galería</a>
                    <ul class="from-right">
                      <li><a href="contact-1.html">Contact us One</a></li>
                      <li><a href="contact-2.html">Contact us Two</a></li>
                    </ul>
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
          <div class="footer-1"> <img src="images/logo/logo.png" alt="">
            <p>Nulla vitae cursus quam, nec ultrices nibh. Quisque tristique lorem ac diam laoreet auctor. Proin ac massa elit. </p>
            <ul class="social">
              <li><a href="#"><span>follow us :</span></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-2">
            <h4>latest news</h4>
            <p>Aenean tristique justo et nibh molestie, non porttitor eros suscipit</p>
            <p>Phasellus dapibus dictum augue ut</p>
            <p>Mauris blandit vitae. Praesent non</p>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-3">
            <h4>Contact us</h4>
            <p><span>Address :</span> <br>
              8500 Lorem Street, Chicago, IL, 55030</p>
            <p><span>Call Us :</span> <br>
              (123) 456-78-90</p>
            <p><span>Email :</span> <br>
              sales@yoursite.com </p>
          </div>
        </div>
        <!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="footer-4">
            <h4>Flickr</h4>
            <div class="flickr-feed clearfix">
              <ul>
                <li> <a href="images/flicker/1.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/1.jpg" alt=""></a> </li>
                <li> <a href="images/flicker/2.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/2.jpg" alt=""></a> </li>
                <li> <a href="images/flicker/3.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/3.jpg" alt=""></a> </li>
                <li> <a href="images/flicker/4.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/4.jpg" alt=""></a> </li>
                <li> <a href="images/flicker/5.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/5.jpg" alt=""></a> </li>
                <li> <a href="images/flicker/6.jpg" class="lightbox-image" title="Image Caption Here"><img src="images/flicker/6.jpg" alt=""></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Copyright--><div class="copyright">&copy; 2017 Copyrights <a href="https://themeforest.net/user/cmsoft/portfolio" target="_blank"> Cmsoft.</a> Design by <a href="https://themeforest.net/item/greenlawn-gardening-and-landscaping-psd-template/17451851?s_rank=2" target="_blank">wpthemeshaper.</a> </div>
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