@extends('template.layout')

<title>@section('titulo') Creación de Sitios y Páginas WEB Aumenta tus ventas con tu oficina online </title>

@section('opengraph')

    <!-- Twitter -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Creación de Sitios y Páginas WEB Aumenta tus ventas con tu oficina online">

    <meta name="twitter:description" content="Tenemos en Sitio WEB ideal para que inicies la Transformación digital de tu empresa o servicio">

    <meta name="twitter:site" content="@ClickTulum">

    <meta name="twitter:creator" content="@ClickTulum">

    <meta name="twitter:image:src" content="https://clicktulum.com/site/images/open-grap-web.jpg">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->

    <meta name="og:title" content="Creación de Sitios y Páginas WEB Aumenta tus ventas con tu oficina online">

    <meta name="og:description" content="Tenemos en Sitio WEB ideal para que inicies la Transformación digital de tu empresa o servicio">

    <meta name="og:image" content="https://clicktulum.com/site/images/open-grap-web.jpg">

    <meta name="og:url" content="https://clicktulum.com">

    <meta name="og:site_name" content="Creación de Sitios y Páginas WEB Aumenta tus ventas con tu oficina online">

    <meta name="og:type" content="article">

@stop

@section('content')

<section class="section section-intro context-dark" style="background-color: #fe6fb7!important;">

    <div class="intro-bg" style="background: url(https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1200&q=80) no-repeat; opacity: 0.2!important;background-size:cover;background-position: top center;"></div>


    <div class="container">

      <div class="row justify-content-center">

        <div class="col-xl-8 text-center">

          <h1 class="font-weight-bold wow fadeInLeft">Blog</h1>



          <p class="intro-description wow fadeInRight">Te ayudamos a conectarte con el mundo digital</p>

        </div>

      </div>

    </div>

  </section>



  <!-- Our team-->

  <section class="section section-md">

    <div class="container">
    

      <div class="row row-50 justify-content-center">

        <div class="col-md col-12 text-center">
@foreach($post as $post)



      <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$post->titulo}}</h5>
        <p class="card-text">clicktulum.com</p>
        <a href="{{ url('/blog/'.$post->id.'/edit') }}" class="btn btn-primary btn-block font-weight-bold">leer más</a>
      </div>
    </div>
  </div>

</div>


      <br>
 @endforeach
          

        </div>

      </div>

      


  </section>



  

 

@stop

