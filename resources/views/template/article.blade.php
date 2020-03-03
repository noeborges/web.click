@extends('template.layout')
@foreach ($data as $dato)
<title>@section('titulo'){{$dato->titulo}} </title>

@section('opengraph')

    <!-- Twitter -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="{{$dato->titulo}}">

    <meta name="twitter:description" content="{{$dato->texto}}">

    <meta name="twitter:site" content="@ClickTulum">

    <meta name="twitter:creator" content="@ClickTulum">

    <meta name="twitter:image:src" content="https://clicktulum.com/{{$dato->imagen}}">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->

    <meta name="og:title" content="{{$dato->titulo}}">

    <meta name="og:description" content="{{$dato->texto}}">

    <meta name="og:image" content="https://clicktulum.com/{{$dato->imagen}}">

    <meta name="og:url" content="https://clicktulum.com">

    <meta name="og:site_name" content="{{$dato->texto}}">

    <meta name="og:type" content="article">

@stop

@section('content')

<section class="section section-intro context-dark" style="background-color: #01CCF7!important;">

    <div class="intro-bg" style="background: url({{$dato->imagen}}) no-repeat; opacity: 0.2!important;background-size:cover;background-position: top center;"></div>



    <div class="container">

      <div class="row justify-content-center">

        <div class="col-xl-8 text-center">
        


        <article>

        <h1 class="font-weight-bold wow fadeInLeft">{{$dato->titulo}}</h1>

      </article>


        </div>

      </div>

    </div>

  </section>



  <!-- Our team-->

  <section class="section section-md">

    <div class="container">

      <div class="row row-50 justify-content-center">

        <div class="col-md col-12 text-center">
      
 

        <article>

      <p>{!!$dato->texto!!}</p>



      </article>

        @endforeach
    
          

        </div>

      </div>

      


  </section>



  

 

@stop


