@extends('template.layout-lan')
<title>@section('titulo') Tu primera Página WEB</title>
@section('opengraph')
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aumenta tus ventas con tu oficina online">
    <meta name="twitter:description" content="Tenemos en Sitio WEB ideal para que inicies la Transformación digital de tu empresa o servicio">
    <meta name="twitter:site" content="@ClickTulum">
    <meta name="twitter:creator" content="@ClickTulum">
    <meta name="twitter:image:src" content="https://clicktulum.com/site/images/open-1.png">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Aumenta tus ventas con tu oficina online">
    <meta name="og:description" content="Tenemos en Sitio WEB ideal para que inicies la Transformación digital de tu empresa o servicio">
    <meta name="og:image" content="https://clicktulum.com/site/images/open-1.png">
    <meta name="og:url" content="https://clicktulum.com">
    <meta name="og:site_name" content="Aumenta tus ventas con tu oficina online">
    <meta name="og:type" content="article">
@stop
@section('content')

<section class="section section-intro context-dark">
    <div class="intro-bg" style="background: url(https://images.unsplash.com/photo-1535486043722-23ceedac1f02?ixlib=rb-1.2.1&auto=format&fit=crop&w=1788&q=80) no-repeat;background-size:cover;background-position: 18% 66%;"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
        
       
        <center> <img src="/site/images/white.svg" alt="promocion clickdev" width="250px" class="py-2 img-fluid"> </center>
        
           <!--<h3 class="wow fadeInLeft sombra">Digitaliza a tu empresa con tu primera Página Web 😉</h3><br>
          <!--<img src="/site/images/lan.svg" alt="clicktulum" width="300" class="py-5">
    --> 
         <!-- <h4 class="wow fadeInLeft sombra">Aumenta tus ventas mientras tomas el Sol en Tulum.</h4> --> 
          <h3 class="intro-description1 wow fadeInRight sombra"><b>Tu Primer Vendedor <br> Online</b></h3>
          <h6 class="wow fadeInLeft"><b>Digitalizate y aumenta tus ventas mientras tomas el sol en Tulum con tu Sitio web </b>😉</h6>
     



   <div class="row justify-content-center" >
    <div class="col-xl-12 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".3s">
      <div class="team-classic-wrap">
        <form class="rd-mailform text-left py-4" data-form-output="form-output-global" data-form-type="contact"  method="post" id="formulario" style=" background-color: rgba(0, 0, 0,.4);!important; padding:2rem!important;">

            <center><h4><b> Registrate para Obtener 10% de descuento en tu primer sitio web</b></h4></center>
            <br>
            <div class="form-wrap" >
              <label class="form-label" for="contact-name">Tu nombre<span class="req-symbol">*</span></label>
              <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required" style="width:100%">
            </div>
            <div class="form-wrap">
              <label class="form-label" for="contact-phone">Telefono / WhatsApp<span class="req-symbol">*</span></label>
              <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber"  style="width:100%">
            </div>
            <!--
            <div class="form-wrap">
              <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
              <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email"  style="width:100%">
            </div>
            <div class="form-wrap">
              <label class="form-label label-textarea" for="contact-message">Mensaje<span class="req-symbol">*</span></label>
              <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required" style="width:100%"></textarea>
            </div>-->
            <!--Google captcha
            <div class="form-wrap text-left form-validation-left">
              <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
            </div>-->
            <div class="form-button group-sm text-center text-lg-justify">
              <button class="button py-3 bk" type="submit" id="submit" onclick="enviar(event)" style="background-color: #29B6F6!important;color:#FFF!important;  border: 0px solid!important;">Quiero Empezar!</button>
            </div>
          </form>
      </div>
    </div>
  </div>



     
        </div>
      </div>
    </div>
  </section>





  <!-- Our team-->
  <section class="section section-md">
    <div class="container">
      <div class="row row-50 justify-content-center">
        <div class="col-md col-12 text-center">
          <div class="section-name wow fadeInRight" data-wow-delay=".2s">Tu pagina es como tener un vendedor online 24hrs / 365 días</div>
          <h3 class="wow fadeInLeft font-weight-bold" data-wow-delay=".3s">www.tusideas<span style="color: #0091EA!important;">.com</span></h3>
          <p class="block-675"></p>
        </div>
      </div>
      

      <br>

      <section>
        <div class="container-fluid">
          <div class="row row-30 justify-content-center">
            <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
              <div class="pricing-box" style="background-color: #0091EA!important;">
                <div class="pricing-box-tittle font-weight-bold">¿No tienes Sitio WEB?</div>
                <p>Perfecto para iniciar o startups</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol"></span><span class="pricing-box-price">Landing</span></div>
                <p>
                  Dominio 1 año.<br>
                  Sitio informativo o promocional.<br>
                  Responsive<br>
                  1 Correo <br>
                  Enlaces a redes sociales (fb, insta, tw) <br>
                  Certificado SSL<br></p>
                  <a class="button button-190 button-circle btn-rounded-outline" href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span> WhatsApp</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
              <div class="pricing-box"  style="background-color: #0091EA!important;">
                <div class="pricing-box-tittle font-weight-bold">¿Ya te buscan?</div>
                <p>Perfecto para que conozcan tus productos o servicios</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol"></span><span class="pricing-box-price">Básico</span></div>
                <p>Dominio 1 año.<br>
                    Home + 5 secciones disponibles.<br>
                    Responsive.<br>
                    integración de chat (WhatsApp, whatsApp).<br>
                    2 Correos.<br>
                    Enlaces a redes sociales (fb, insta, tw) .<br>
                    Galería.<br>
                    Formulario (envío de información por correo).<br>
                    Mapa.<br>
                    Certificado SSL<br>
                    
                    </p> <a class="button button-190 button-circle btn-rounded-outline" href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span> WhatsApp</a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 wow fadeInDown" data-wow-delay=".3s">
              <div class="pricing-box"  style="background-color:  #0091EA!important;">
                <div class="pricing-box-tittle font-weight-bold">Gran Desición</div>
                <p>Tu Sitio Plus</p>
                <hr/>
                <div class="pricing-box-inner"><span class="pricing-box-symbol"></span><span class="pricing-box-price">Click</span></div>
                <p>
                  
                    Dominio 2 años.<br>
                    Sitio administrable (Wordpress, Joomla).<br>
                    Home + 10 secciones disponibles<br>
                    Responsive.<br>
                    Blog  si lo requiere.<br>
                    Integración de chat (WhatsApp, whatsApp).<br>
                    4 Correos.<br>
                    Enlaces en de redes sociales (fb, insta, tw) .<br>
                    Galería.<br>
                    Hasta 2 Formularios Personalizados.<br>
                    Incorporación de Google Maps.<br>
                    Compartir en Redes Sociales (FB, TW, IG)<br>
                    Certificado SSL<br>
                    
               
                  </p> <a class="button button-190 button-circle btn-rounded-outline" href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span>WhatsApp</a>
              </div>
            </div>
          </div>
        </div>
      </section>
  





  </section>
  <style>
      .ui-to-top{
        background: #0091EA!important;
      }
      .sombra{
        text-shadow: 0.075em 0.08em 0.1em rgba(0, 0, 0, .1);
      }
      .footer-classic{
        background-color: #fff!important;
        background-image:none;
      }
      .section-intro {
        padding: 50px 0 145px 0;
    }

    .section-intro .intro-bg {
      /*
      opacity: 1!important;*/
  }

  

  
  </style>
  

  
 
@stop
