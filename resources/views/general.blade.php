
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>@yield('title')</title>

<link rel='shortcut icon' type='image/x-icon' href='{{ asset("favicon.ico") }}' />
<link rel="apple-touch-icon" href="{{ asset('favicon.png') }}" />

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('apple-touch-icon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('apple-touch-icon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-touch-icon-60x60.png') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-touch-icon-76x76.png') }}" />
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-touch-icon-120x120.png') }}" />
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-touch-icon-152x152.png') }}" />
<link rel="apple-touch-icon-precomposed" sizes="128x128" href="{{ asset('apple-touch-icon-128x128.png') }}" />




<link rel="manifest" href="{{ asset('site.webmanifest') }}">
<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WWZBZK');</script>
<!-- End Google Tag Manager -->

<script>
(function(h,e,a,t,m,p) {
m=e.createElement(a);m.async=!0;m.src=t;
p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
})(window,document,'script','https://u.heatmap.it/log.js');
</script>

<meta name="title" content="@yield('title')">
<meta name="description" content="@yield('description')">

<meta name=""DC.title" content="@yield('title')" />
 <meta name="geo.region" content="MX-JAL" />
 <meta name="geo.placename" content="Puerto Vallarta" />
 <meta name="geo.position" content="20.641706;-105.231316" />
 <meta name="ICBM" content="20.641706, -105.231316" />

 <meta property="og:type" content="place">
 <meta property=""og:title" content="@yield('title')">
 <meta property="og:url" content="http://drsergiodelhoyo.com/es">
 <meta property="og:image" content="http://drsergiodelhoyo.com/images/logo/logo.png"> 
 <meta property="og:description" content="" />
 <meta property="place:location:latitude" content="20.647058">
 <meta property="place:location:longitude" content="-105.220184">

<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">



<link rel="stylesheet" href="{{ asset('css/juxtapose.css') }}">
<!-- Responsive -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css') }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<script src='https://www.google.com/recaptcha/api.js'></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/tablet.css') }}" rel="stylesheet">
<link href="{{ asset('css/movil.css') }}" rel="stylesheet">
</head>
<!--Change Class in body to change color Scheme for Homepages  ie theme-green , theme-green -->

<body class="theme-green">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWZBZK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page-wrapper"> 
  
  <!-- start preloader -->
  <div class="preloader"></div>
  <!-- end preloader --> 
  <div class="float_contact">
    <div class="hidden-xs hidden-sm">
      <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto text-uppercase">
        <span class="icon-contacto"></span> @lang('home.contacto')
      </a>
    </div>
    <div class="hidden-md hidden-lg">
      <ul>
        <li>
          <a href="tel:{{ str_replace(' ', '', Lang::get('home.movil') ) }}" class="text-uppercase">
            <span class="icon-phone"></span>
          </a>
        </li>
        <li>
          <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto text-uppercase">
            <span class="icon-contacto"></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
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
                        <a href="https://www.facebook.com/Dr.SergiodelHoyo/" target="_blank"><span class="fa fa-facebook-f"></span></a>
                        <a href="https://www.instagram.com/drsergiodelhoyo/" target="_blank"><span class="fa fa-instagram"></span></a>
                        <a href="https://www.youtube.com/channel/UCnUh4U5zaAiFS9CfeovxVYw" target="_blank"><span class="fa fa-youtube-play"></span></a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.cirujanos_bariatricos') }}"> @lang('home.nosotros') </a>
                    <ul>

                      
                        <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.dr_sergio') }}">@lang('home.dr-title-url') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.cirujanos_bariatricos') }}">@lang('home.team-title-url')</a></li>
                    </ul>
                </li>
                <li class="separator">
                    <span class="fa fa-circle"></span>
                </li>
                <li>
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.puerto_vallarta') }}"> @lang('home.puerto-vallarta') </a>
                </li>
          </ul>

        </div>
        <!--Top Right-->
        <div class="top-right pull-right clearfix">
            <ul class="info-nav clearfix">
                <li>
                    <a href="tel:{{ str_replace(' ', '', Lang::get('home.phone') ) }}" class="text-uppercase">
                      <span class="icon-phone"></span> @lang('home.phone')
                    </a>
                </li>
                <li>
                    <a href="tel:{{ str_replace(' ', '', Lang::get('home.movil') ) }}"> <span class="icon-movil"></span> @lang('home.movil') </a>
                </li>
                <li>
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto text-uppercase"> <span class="icon-contacto"></span> @lang('home.contacto') </a>
                </li>
                <li>
                  @if (LaravelLocalization::getCurrentLocale() == "en")
                    <a rel="alternate" hreflang="es" href="{{ LaravelLocalization::getLocalizedURL('es', null, [], true) }}" class="text-uppercase">
                  @else
                    <a rel="alternate" hreflang="en" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="text-uppercase">
                  @endif
                    @lang('home.lang')
                    </a>
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
          <div class="logo_cont col-lg-3 col-md-4 pull-left">
            <div class="logo">
              <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , '/') }}">
                <h1>@yield('h1')</h1>
                <img src="{{ asset('images/logo/logo.png') }}" alt="" title="Green">
              </a>
            </div>

          </div>
          <div class="col-lg-9 col-md-8 outer-box clearfix"> 
            <!-- Main Menu -->
            <nav class="main-menu logo-outer">
              <div class="navbar-header"> 
                <!-- Toggle Button -->
                <div class="movil_lang">
                  @if (LaravelLocalization::getCurrentLocale() == "en")
                    <a rel="alternate" hreflang="es" href="{{LaravelLocalization::getLocalizedURL('es') }}" class="text-uppercase">@lang('home.lang')</a>
                  @else
                    <a rel="alternate" hreflang="en" href="{{LaravelLocalization::getLocalizedURL('en') }}" class="text-uppercase">@lang('home.lang')</a>
                  @endif
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
              </div>
              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li class="current"> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , '/') }}"> @lang('menu.home') </a>
                  </li>
                  


                  <li class="dropdown hidden-md hidden-lg">
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.cirujanos_bariatricos') }}"> @lang('home.nosotros') </a>
                    <ul>
                      @if (LaravelLocalization::getCurrentLocale() == "en")
                        <li><a href="{{ LaravelLocalization::getNonLocalizedURL('en/dr-sergio-cirujano-bariatrico') }}">@lang('home.dr-title-url') </a></li>
                      @else
                        <li><a href="{{ LaravelLocalization::getNonLocalizedURL('es/dr-sergio-cirujano-bariatrico') }}">@lang('home.dr-title-url') </a></li>
                      @endif
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.cirujanos_bariatricos') }}">@lang('home.team-title-url')</a></li>
                    </ul>
                  </li>

                   <li class="hidden-md hidden-lg">
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.puerto_vallarta') }}"> @lang('home.puerto-vallarta') </a>
                </li>


                  <li class="dropdown"> <a href="#"> @lang('menu.cirugia-gas') </a>
                    <ul>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_apendicitis') }}">@lang('menu.cirugia-gas-sub.apendicitis')</a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_calculos') }}">@lang('menu.cirugia-gas-sub.colelitiasis')</a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_diverticulitis') }}">@lang('menu.cirugia-gas-sub.diverticulitis')</a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_hernias') }}">@lang('menu.cirugia-gas-sub.hernias')</a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gastrointestinal_hernia_hiatal') }}">@lang('menu.cirugia-gas-sub.hernias_hiatal')</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="#"> @lang('menu.cirugia-bar') </a>
                    <ul>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.bariatrica_manga_gastrica') }}"> @lang('menu.cirugia-bar-sub.manga-gastrica') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.bariatrica_bypass') }}"> @lang('menu.cirugia-bar-sub.bypass') </a></li>

                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.switch_duodenal') }}"> @lang('menu.cirugia-bar-sub.switch-duodenal') </a></li>

                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.revision_bariatrica') }}"> @lang('menu.cirugia-bar-sub.revision_bariatrica') </a></li>

                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.bariatrica_paquetes') }}"> @lang('menu.cirugia-bar-sub.cirugia-paq') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.bariatrica_imc') }}"> @lang('menu.cirugia-bar-sub.url-imc') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.bariatrica_obesidad') }}"> @lang('menu.cirugia-bar-sub.obesidad') </a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#"> @lang('menu.hospitales') </a>
                    <ul>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.hospital_cmq_premiere') }}"> @lang('menu.hospitales-sub.cmq') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.hospital_cmq_riviera_nayarit') }}"> @lang('menu.hospitales-sub.cmq-nayarit') </a></li>
                      <li><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.hospital_consultorio_cirujano_bariatrico') }}"> @lang('menu.hospitales-sub.consultorio') </a></li>
                    </ul>
                  </li>
                  <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.testimonios') }}"> @lang('menu.testimonio') </a>
                  </li>
                  <!--
                    <li> <a href="{{ LaravelLocalization::getNonLocalizedURL('blog') }}"> @lang('menu.blog') </a></li>
                  -->
                  <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gallery') }}"> @lang('menu.galeria') </a>
                  
                  </li>
                  <li class="hidden-md hidden-lg">
                    <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto text-uppercase"> @lang('home.contacto') </a>
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
        <div class="col-md-12 logomovil visible-xs visible-sm">
          <img src="{{ asset('images/logo/white.png') }}" />
        </div>
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
                <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto text-uppercase"> <span class="icon-contacto"></span> @lang('home.contacto')</a>
              </li>
              <li>
                <a href="#"> <span class="icon-phone"></span> @lang('home.phone') </a>
              </li>
              <li>
                <a href="#"> <span class="icon-movil"></span> @lang('home.movil') </a>
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

              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , '/') }}"> @lang('home.home') </a> </li>
              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.cirujanos_bariatricos') }}"> @lang('home.nosotros') </a></li>
              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.testimonios') }}"> @lang('menu.testimonio') </a>
                  </li>
              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.hospital_cmq_premiere') }}"> @lang('home.hospitales') </a> </li>
              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.gallery') }}"> @lang('home.galeria') </a> </li>
              <li> <a href="{{ LaravelLocalization::getNonLocalizedURL('blog') }}"> @lang('home.blog') </a> </li>
              <li> <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.contacto') }}" class="contacto">@lang('home.contacto') </a> </li>
            
              
          </div>

          

        </div>
      </div>
      <div class="social col-md-12">
        <ul>
          <li> <a href="https://www.facebook.com/Dr.SergiodelHoyo/" target="_blank"> <span class="fa fa-facebook-f"></span> </a> </li>
          <li> <a href="https://www.instagram.com/drsergiodelhoyo/" target="_blank"><span class="fa fa-instagram"></span> </a> </li>
          <li> <a href="https://www.youtube.com/channel/UCnUh4U5zaAiFS9CfeovxVYw" target="_blank"><span class="fa fa-youtube-play"></span> </a> </li>
        </ul>

    </div>
    <div class="aviso col-md-12">
        <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated( LaravelLocalization::getCurrentLocale() , 'routes.privacidad') }}"> @lang('home.aviso-privacidad') </a>
    </div>
    </div>
  </footer>
</div>

<!--End pagewrapper--> 
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>
<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mapmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="maps"></div>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery.js') }}"></script> 
<script src="{{ asset('js/all-jquery.js') }}"></script> 
<script src="{{ asset('js/afterglow.min.js') }}"></script>
<script src="{{ asset('js/juxtapose.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_kOv_YSoNW2e5l7FUyeup3Bs5um7cnMk"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>