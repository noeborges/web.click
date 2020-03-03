<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/site/images/favicon.ico" type="image/x-icon">
    
    <link async rel="stylesheet" href="/site/css/bootstrap.css">
    <link async rel="stylesheet" href="/site/css/fonts.css">
    <link async rel="stylesheet" href="/site/css/style.css">
    <meta name="google-site-verification" content="1EclP-XuvqyhAkk4FvttZJAWI7o68Niryz5wo_1yU8k" />
  

    @yield('opengraph')

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="/site/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div><!--<a class="section section-banner d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank" style="background-image: url(/site/images/background-02-1920x60.jpg); background-image: -webkit-image-set( url(/site/images/background-02-1920x60.jpg) 1x, url(/site/images/background-02-3840x120.jpg) 2x )"><img src="/site/images/foreground-02-1600x60.png" srcset="/site/images/foreground-02-1600x60.png 1x, /site/images/foreground-02-3200x120.png 2x" alt="" width="1600" height="310"></a>
    --><div class="page">


@yield('content')


<div id="cajacookies">
    <p>En nuestro sitio web utilizamos cookies propias y de terceros para mejorar tu experiencia de usuario y recoger datos estadísticos sobre el uso de nuestra web por parte de los usuarios. <br>Si navegas por nuestra web, estarás aceptando el uso de las cookies.<!--<a href="politica.html">política de privacidad</a>-->.
    <br>
    <button onclick="aceptarCookies()" class="btn btn-link"><i class="fa fa-check"></i> Aceptar</button></p>
    </div>

      <footer class="section footer-classic section-sm wow bounceInUp">
        <center>
            <a href="/"><img class="brand-logo-dark wow fadeInDown" src="/site/images/black.svg" alt="clickdev tulum" width="300" data-wow-delay=".4s"/></a>

         </center>
         
 
        <div class="container">
            <div class="row row-50 justify-content-center">
              <div class="col-md col-12 text-center">
            
                <h4 class="wow fadeInLeft font-weight-bold" data-wow-delay=".3s">No te quedes atras<span style="color: #0091EA!important;"> Iniciemos Hoy!</span></h4>
                <h5 class="wow fadeInLeft" data-wow-delay=".3s">Te ayudamos a hacer realidad la transformación digital de tu empresa. <br> Tulum, Riviera Maya  </span></h5>
                <br>
              </div>
            </div>

      </footer>

      
    </div>

    <section class="section section-intro context-dark">
      <div class="intro-bg" style="background: url(/site/images/ok.jpg) no-repeat;background-size:cover;background-position: 18% 50%;">
      <hr>
      <div class="container">
      <center>
        <br>
      <h4 class="wow fadeIn font-weight-bold"  data-wow-delay=".5s" data-wow-iteration="100">Tu negocio en<span style="color: #0091EA!important;"> Digital! ☁️</span></h4>
    <a class="button button-190 button-circle btn-rounded-outline" href="http://bit.ly/2OAxwNy" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span> WhatsApp</a>

    </center>
    
    </div>
    
      </div>
      <br>

    </section>



    <link async href="https://fonts.googleapis.com/css?family=Open+Sans:300,700&display=swap" rel="stylesheet">
    <div class="snackbars" id="form-output-global"></div>
    <script src="/site/js/core.min.js"></script>
    <script src="/site/js/script.js"></script>


     
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