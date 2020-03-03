<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/site/images/favicon.ico" type="image/x-icon">
    <meta name="google-site-verification" content="1EclP-XuvqyhAkk4FvttZJAWI7o68Niryz5wo_1yU8k" />
    @yield('opengraph')
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    <link rel="stylesheet" href="/site/css/bootstrap.css">
    <link rel="stylesheet" href="/site/css/style.css">
    
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/site/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap" >
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark" style="background-color:#61616100000000000000;!important">
              <div class="rd-navbar-aside" style="background-color:#61616100000000000000;!important">
                <ul class="list-inline navbar-contact-list">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa fa-whatsapp"  ></span></div>
                      <div class="unit-body"><a href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank" > Enviar WhatsApp</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:hola@clicktulum.com">hola@clicktulum.com</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#">Tulum, QRoo.</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="social-links">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="https://twitter.com/ClickTulum" target="_blank"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/clickdevtulum/" target="_blank"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/clicktulum/" target="_blank"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer" style="background-color:#2c343a;!important">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                <!--
                  <div class="rd-navbar-brand">-->
                    <!--Brand-->
                    <a class="brand" href="/"><img class="brand-logo-dark" src="/site/images/logo_dev-06.svg" alt="clickdev tulum" width="180" height="40"/></a>

                    <!-- </div>-->
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active font-weight-bold"><a class="rd-nav-link" href="/">Inicio</a>
                      </li>
                      <li class="rd-nav-item font-weight-bold"><a class="rd-nav-link" href="/diseno-web">Diseño WEB</a>
                      </li>
                      <li class="rd-nav-item font-weight-bold"><a class="rd-nav-link" href="/marketing-digital">Marketing Digital</a>
                      </li>
                      <li class="rd-nav-item font-weight-bold"><a class="rd-nav-link" href="/diseno-grafico-digital">Diseño Digital</a>
                      </li>
                      <li class="rd-nav-item font-weight-bold"><a class="rd-nav-link" href="/blog">Blog</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

@yield('content')
<a href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" class="whatsapp" target="_blank"> <span class="whatsapp-icon fa fa-whatsapp whatsapp"></span></a>

<div id="cajacookies">
    <p>En nuestro sitio web utilizamos cookies propias y de terceros para mejorar tu experiencia de usuario y recoger datos estadísticos sobre el uso de nuestra web por parte de los usuarios. <br>Si navegas por nuestra web, estarás aceptando el uso de las cookies.<!--<a href="politica.html">política de privacidad</a>-->.
    <br>
    <button onclick="aceptarCookies()" class="btn btn-link"><i class="fa fa-check"></i> Aceptar</button></p>
    </div>

      <footer class="section footer-classic section-sm">
        <div class="container">
          <div class="row row-30">
            <div class="col-lg-4 wow fadeInLeft">
            <!--
              <a class="brand" href="/"><img class="brand-logo-dark" src="/site/images/logo-n.png" alt="" width="80" height="10"/><img class="brand-logo-light" src="/site/images/logo-n.png" alt="" width="80" height="10"/></a>
             -->
             <P class="footer-classic-title font-weight-bold">Conocenos</P>
              <p class="footer-classic-description offset-top-0 offset-right-25"><br>Somos un Team que trabajamos con las más recientes técnologias y tendencias que te ayudaran a la transformación Digital de tu Empresa | Riviera Maya</p>
            </div>
            <div class="col-lg-4 col-sm-8 wow fadeInUp">
              <P class="footer-classic-title font-weight-bold">Contactanos</P>
              <div class="d-block offset-top-0">Tulum, Q Roo.</span></div><a class="d-inline-block accent-link" href="mailto:hola@clicktulum.com">hola@clicktulum.com</a><br><a class="d-inline-block accent-link" href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span> Enviar WhatsApp</a>
            </div>
            <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
              <P class="footer-classic-title font-weight-bold">Nuestros Servicios</P>
              <ul class="footer-classic-nav-list">
                <li><a href="/diseno-web" class="font-weight-bold">Diseño WEB</a></li>
                <li><a href="/diseno-grafico-digital" class="font-weight-bold">Diseño Digital</a></li>
                <li><a href="/marketing-digital" class="font-weight-bold">Marketing Digital</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container wow fadeInUp" data-wow-delay=".4s">
          <div class="footer-classic-aside">
            <ul class="social-links">
              <li><a class="fa fa fa-twitter" href="https://www.facebook.com/clickdevtulum/" target="_blank"></a></li>
              <li><a class="fa fa-facebook" href="https://twitter.com/ClickTulum" target="_blank"></a></li>
              <li><a class="fa fa-instagram" href="https://www.instagram.com/clicktulum/" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <div class="snackbars" id="form-output-global"></div>
    <link rel="stylesheet" href="/site/css/fonts.css">

    <script src="/site/js/core.min.js"></script>
    <script src="/site/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119761876-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-119761876-2');
        </script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '125844788755210');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=125844788755210&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
 </body>
</html>