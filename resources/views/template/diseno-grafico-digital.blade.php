@extends('template.layout')

<title>@section('titulo') Diseño Grafico y Digital - Imprenta en Tulum</title>

@section('opengraph')

    <!-- Twitter -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Diseño Grafico y Digital Imprenta en Tulum">

    <meta name="twitter:description" content="Diseñamos la imagen de tu empresa o servicio tus ideas a todo color">

    <meta name="twitter:site" content="@i7devs">

    <meta name="twitter:creator" content="@i7devs">

    <meta name="twitter:image:src" content="https://i7devs.com/open.png">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->

    <meta name="og:title" content="Diseño Grafico y Digital Imprenta en Tulum">

    <meta name="og:description" content="Diseñamos la imagen de tu empresa o servicio tus ideas a todo color">

    <meta name="og:image" content="https://i7devs.com/open.png">

    <meta name="og:url" content="https://i7devs.com/">

    <meta name="og:site_name" content="Diseñamos la imagen de tu empresa o servicio tus ideas a todo color">

    <meta name="og:type" content="article">

@stop



@section('content')

<section class="section section-intro context-dark" style="background-color: #006064!important;">

    <div class="intro-bg" style="background: url(https://images.unsplash.com/photo-1517260911058-0fcfd733702f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80) no-repeat; opacity: 0.2!important;background-size:cover;background-position: top center;"></div>


    <div class="container">

      <div class="row justify-content-center">

        <div class="col-xl-8 text-center">

          <h1 class="font-weight-bold wow fadeInLeft 2196F3">Diseño Digital</h1>

          <p class="intro-description wow fadeInRight">Diseñamos de tus ideas a la realidad! </p>

        </div>

      </div>

    </div>

  </section>



  <!-- Our team-->

  <section class="section section-md">

    <div class="container">

      <div class="row row-50 justify-content-center">

        <div class="col-md col-12 text-center">


          <div class="section-name wow fadeInRight" data-wow-delay=".2s">¿No tienes imagen digital?</div>

          <h3 class="wow fadeInLeft font-weight-bold" data-wow-delay=".3s">Diseño<span style="color: #006064!important;"> un refresh para tu imagen!</span></h3>

          <p class="block-675">Si estas en ceros y desear realizar un logotipo, membretes, tarjetas y más te ayudamos con eso! o si deseas rediseñar algo que ya tengas.</p>

        </div>

      </div>

      <div class="row row-50 justify-content-center">

        <div class="col-xl-6 col-sm-12 col-12 wow fadeInLeft" data-wow-delay=".3s">

            <div class="pricing-box" style="background-color: #006064!important;">

              <div class="pricing-box-tittle">Imagen Digital</div>

              <p>Diseñamos tus ideas</p>

              <hr/>

              <div class="pricing-box-inner"><span class="pricing-box-symbol"></span><span class="pricing-box-price">Diseño Digital</span></div>

              <p>

                  Diseño de logotipo básico (Vector, JPEG, PNG, 2 propuestas) <br>

                  Tarjetas de presentación<br>

                  Diseño digital de Hoja membretada (para editar)<br>

                  Diseño de firma con información de la empresa para correo electrónico.<br>

                  

                    

              </p><a class="button button-190 button-circle btn-rounded-outline" href="http://bit.ly/i7devs" target="_blank"><span class="icon text-middle fa fa-whatsapp"></span> WhatsApp</a>

            </div>

        </div>

       <!-- <div class="col-xl-6 col-sm-12 col-12 wow fadeInUp" data-wow-delay=".3s">

          <div class="team-classic-wrap">

            <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact"  method="post" id="formulario">

                <h4>¿Quieres más detalles o armar tu plan a medida?</h4>

                <br>

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

                  <label class="form-label label-textarea" for="contact-message">Mensaje<span class="req-symbol">*</span></label>

                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>

                </div>



                <div class="form-button group-sm text-center text-lg-left">

                  <button class="button" type="submit" id="submit" onclick="enviar(event)" style="background-color: #fbd222!important;color:#FFF!important">Cotizar</button>

                </div>

              </form>

          </div>

        </div>



    </div>-->

  </section>

 

@stop

