<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="/images/favicon.png"/>
    <title>@yield('title', 'SisColectivo')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!!Html::script('js/jquery-2.2.0.min.js')!!}

    {!!Html::style('css/bootstrap.min.css')!!}
    
    {{-- {!!Html::style('css/normalize.min.css')!!} --}}
    {{-- {!!Html::style('css/style.css')!!} --}}
    {!!Html::style('css/style-home.css')!!}
    {!!Html::style('css/sweetalert.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    @yield('meta')
</head>
<body>
<header class="header">
    <div class="menu">
        <div class="logo">
             <a href="{{ route('home') }}">{!!Html::image('images/logo-auto.png', 'Isologo', array('class' => 'img-isologo'))!!}</a>
             <a href="{{ route('home') }}">{!!Html::image('images/logo.png', 'Logotipo', array('class' => 'img-logotipo'))!!}</a>
        </div>
        <div class="login">
            	@include('auth.login')
        </div>
    </div>
    
    <div class="hero">
        <img class="hero_img">
        <h1 class="hero_title">Línea 33</h1>
    </div>
</header>
<section class="section_welcome">
    @yield('welcome')
</section>
<section class="section_tours">
	@yield('tours')
</section>
<div class="separation"></div>
<section class="section_rates">
    @yield('rates')
</section>

<footer>
    {{-- <div id="bottom-footer-box">
        <div class="footer-box col-lg-6 col-lg-offset-3">
            <div class="col-lg-7">
                <h3>Garita control</h3>
                <p>
                <span class="span-ico-footer">{!!Html::image('images/ico-mapa.png', 'ico-mapa', array('class' => 'span-ico-footer'))!!}
                    Av. Óscar Bonilla 9200</span><br>
                    <span class="span-ico-footer">{!!Html::image('images/ico-fono.png', 'ico-fono', array('class' => 'span-ico-footer'))!!}
                        55 222 2222</span><br>
                    <span class="span-ico-footer">{!!Html::image('images/ico-mail.png', 'ico-mail', array('class' => 'span-ico-footer'))!!}
                        linea63@gmail.com</span>
                </p>
            </div> --}}
            {{-- MAPA 1--}}
            {{-- <div class="col-lg-5 col-md-12 gmaps">
                <div id="map" class="google-maps">
                </div>
            </div> --}}
            {{-- FIN MAPA 1--}}
        {{-- </div>
    </div>
    @yield('meta-footer') --}}
</footer>
{!!Html::script('js/bootstrap.min.js', array('async' => 'async'))!!}
{!!Html::script('js/jquery.cycle2.min.js')!!}
{!!Html::script('js/maps.js')!!}
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUySAYtjrmCJruK4agAZxEIGAFoueApE&callback=initialize"></script> --}}
{{-- API KEY PRODUCCION AIzaSyD_EYZ5jHzNZ_Jag8E-b83HgGG6z5zknBk--}}
{!!Html::script('js/sweetalert.min.js', array('async' => 'async'))!!}
{!!Html::script('js/menu.js', array('async' => 'async'))!!}
{!!Html::script('js/login.js', array('async' => 'async'))!!}
</body>
</html>