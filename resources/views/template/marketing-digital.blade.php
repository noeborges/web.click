@extends('template.layout')

<title>@section('titulo') Marketing Online en Redes Sociales llega a tus futuros cliente, aumenta tus ventas y clientes </title>

@section('opengraph')

    <!-- Twitter -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Marketing Online en Redes Sociales llega a tus prospectos y aumenta tus ventas">

    <meta name="twitter:description" content="LLevamos a tu empresa o servicio a las plataformas digitales más populares para que hagas match con tus prospectos">

    <meta name="twitter:site" content="@ClickTulum">

    <meta name="twitter:creator" content="@ClickTulum">

    <meta name="twitter:image:src" content="https://clicktulum.com/marketing.png">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->

    <meta name="og:title" content="Marketing Online en Redes Sociales llega a tus prospectos y aumenta tus ventas">

    <meta name="og:description" content="LLevamos a tu empresa o servicio a las plataformas digitales más populares para que hagas match con tus prospectos">

    <meta name="og:image" content="https://clicktulum.com/marketing.png">

    <meta name="og:url" content="https://clicktulum.com">

    <meta name="og:site_name" content="LLevamos a tu empresa o servicio a las plataformas digitales más populares para que hagas match con tus prospectos">

    <meta name="og:type" content="article">

@stop

@section('content')

<section class="section section-intro context-dark" style="background-color: #F43B90!important;">

    <div class="intro-bg" style="background: url(https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80) no-repeat; opacity: 0.2!important;background-size:cover;background-position: top center;"></div>

    <div class="container">

      <div class="row justify-content-center">

        <div class="col-xl-8 text-center">

          <h1 class="font-weight-bold wow fadeInLeft">Marketing Digital</h1>

          <p class="intro-description wow fadeInRight ">¿Buscas clientes potenciales que estén interesados en tu producto o servicio?</p>
          

        </div>

      </div>

    </div>

  </section>



  <!-- Our team-->

  <section class="section section-md">

    <div class="container">

      <div class="row row-50 justify-content-center">

        <div class="col-md col-12 text-center">

            <img src="/site/images/open-grap-mkt.jpg" alt="Marketing Digital y Publicidad Tulum"><br><br>

          <div class="section-name wow fadeInRight" data-wow-delay=".2s">💚 Estás a un sólo paso de generar más clientes y ventas.</div>

          <h3 class="wow fadeInLeft font-weight-bold" data-wow-delay=".3s">¿Estás iniciando tu propio negocio o necesitas promoción? <span style="color: #F43B90!important;"> <br>¿No estás en redes sociales?</span></h3>



        </div>

      </div>

      <div class="row row-50 justify-content-center">

        <div class="col-xl-6 col-sm-12 col-12 wow fadeInLeft" data-wow-delay=".3s">

            <div class="pricing-box" style="background-color: #F43B90!important;">

              <div class="pricing-box-tittle">Administración de Redes</div>

              <hr/>

              <div class="pricing-box-inner"><span class="pricing-box-symbol"></span><span class="pricing-box-price">MKT Digital</span></div>

  

              <p align="left">

                  👌 Apertura y configuración de Redes adecuadas a tu Negocio o Servicio.<br>

                  👌 Diseño de foto portada y Perfil<br>

                  👌 3 publicaciones por semana.<br>

                  👌 Diseño de material digital para posicionamiento orgánico y pagado en Facebook<br>

                  👌 Diseño del contenido y creación de los textos publicitarios<br>

                  👌 Creación de cortos en video<br>

                  👌 Publicación de pauta para generación de leads (prospectos)

                  

              </p><a class="button button-190 button-circle btn-rounded-outline" href="https://api.whatsapp.com/send?phone=5219843161701&text=Hola%21%20Quiero%20saber%20m%c3%a1s%20del%20marketing%20digital&source=&data=" target="_blank"><span class="icon text-middle fa fa-whatsapp "></span> WhatsApp</a>

            </div>

        </div>

        <div class="col-xl-6 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".3s">

          <div class="team-classic-wrap">
          <p>Las redes sociales te permitiran tener un acercamiento a tus futuros clientes!
</p>
          <h3><span style="color: #F43B90!important;"> <br>Solicita una cotización</span></h3>
          
          <br>
            <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact"  method="post" id="formulario">

                <div class="form-wrap">

                  <label class="form-label" for="contact-name">Tu nombre<span class="req-symbol">*</span></label>

                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">

                </div>

                <div class="form-wrap">

                  <label class="form-label" for="contact-phone">Telefono<span class="req-symbol">*</span></label>

                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">

                </div>

                <div class="form-wrap">

                  <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>

                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">

                </div>

                <div class="form-wrap">

                  <label class="form-label label-textarea" for="contact-message">¿Como Podemos Ayudarte?<span class="req-symbol">*</span></label>

                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>

                </div>


                <!--Google captcha

                <div class="form-wrap text-left form-validation-left">

                  <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>

                </div>-->

                <div class="form-button group-sm text-center text-lg-left">

                  <button class="button"  type="submit" id="submit" onclick="enviar(event)" style="background-color: #F43B90!important; color:#FFF!important">Cotizar</button>

                </div>

              </form>

          </div>

        </div>



    </div>

  </section>

 

@stop

