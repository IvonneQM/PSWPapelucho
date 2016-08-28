<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <title>@yield('title', 'Jardin infantil Papelucho')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!!Html::script('js/jquery-2.2.0.min.js')!!}
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/normalize.min.css')!!}
    {!!Html::style('css/style.min.css')!!}
    {!!Html::style('css/sweetalert.min.css')!!}


    {!!Html::style('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Fredericka+the+Great')!!}
    {!!Html::style('//allfont.es/allfont.css?fonts=linotypezapfino-one')!!}
    {!!Html::style('css/font-awesome.min.css')!!}

    {!!Html::script('js/jquery.cycle2.min.js')!!}
    {!!Html::script('js/sweetalert.min.js')!!}
    {!!Html::script('js/menu.js')!!}
    {!!Html::script('js/login.js')!!}




    @yield('meta')

    <style type="text/css">
        html, body { height: 100%; margin: 0; padding: 0; }
        #map, #maps { height: 100%; }
    </style>
</head>
<body>
<header>

    <div class="logo">
        <a href="#">{!!Html::image('images/isologo.png', 'Isologo', array('id' => 'img-isologo'))!!}</a>
        <a href="#">{!!Html::image('images/logotipo.png', 'Logotipo', array('id' => 'img-logotipo'))!!}</a>
        <div id="sidebar-btn">
            <a href="#">{!!Html::image('images/menu-icon.png', 'Icono Menu', array('id' => 'img-menu'))!!}</a>
        </div>
    </div>

    {!!Html::image('images/fondo-arco-verde.png', 'Arco Verde', array('id' => 'img-arco-verde'))!!}


    @include('auth.login')


    <nav id="sidebar">
        <ul>
            <li>{!!HTML::linkAction('HomeController@index', 'Inicio',array(), array('class' => 'url-menu'))!!}</li>
            <li>{!!HTML::linkAction('MiJardinController@index', 'Mi jardín',array(), array('class' => 'url-menu'))!!}</li>


            <li class="li-two-lines">{!!HTML::linkAction('LasColoniasController@index', 'Papelucho Las Colonias',array(), array('class' => 'url-menu'))!!}</li>

            <li class="li-two-lines">{!!HTML::linkAction('BlumellController@index', 'Papelucho Blumell',array(), array('class' => 'url-menu'))!!}</li>
        </ul>
    </nav>
    <div class="cycle-slideshow">
        <span class="cycle-prev">&#9001;</span>
        <span class="cycle-next">&#9002;</span>
        <span class="cycle-pager"></span>
        {!!Html::image('images/carrusel/Slider1.JPG','img6', array('class' => 'img-slide'  ))!!}
        {!!Html::image('images/carrusel/Slider3.JPG','img8', array('class' => 'img-slide img-slide-middle-bottom'))!!}
        {!!Html::image('images/carrusel/Papelucho26.JPG','img1', array('class' => 'img-slide img-slide-middle-bottom'))!!}
        {!!Html::image('images/carrusel/Papelucho5.JPG','img2', array('class' => 'img-slide'))!!}
        {!!Html::image('images/carrusel/17.JPG','img3' ,array('class' => 'img-slide'))!!}
        {!!Html::image('images/carrusel/Papelucho8.JPG','img4', array('class' => 'img-slide img-slide-middle-bottom'))!!}
        {!!Html::image('images/carrusel/Papelucho201.JPG','img5', array('class' => 'img-slide img-slide-bottom'))!!}
    </div>
</header>

<section>
    <div id="puzzle">
        {!!Html::image('images/puzzle.png', 'Puzzle')!!}
    </div>
    <article>
        @yield('article')
    </article>
</section>

<aside>
    @yield('aside')
</aside>
{!!Html::image('images/fondo-arco-azul.png', 'Arco Azul', array('id' => 'img-arco-azul'))!!}
<footer>
    <div id="bottom-footer-box">
        <div class="footer-box col-lg-2">
            <div class="col-lg-7">
                <h3>Blumell</h3>
            <p>
                <span class="span-ico-footer">{!!Html::image('images/ico-mapa.png', 'ico-mapa', array('class' => 'span-ico-footer'))!!}
                    Blumell 049 Playa Blanca</span><br>
                <span class="span-ico-footer">{!!Html::image('images/ico-fono.png', 'ico-fono', array('class' => 'span-ico-footer'))!!}
                    55 245 4645</span><br>
                <span class="span-ico-footer">{!!Html::image('images/ico-mail.png', 'ico-mail', array('class' => 'span-ico-footer'))!!}
                    infopapelucho@gmail.com</span>
            </p>
            </div>
            {{-- MAPA 1--}}
            <div class="large-5 medium-6 gmaps">
                <div id="map" class="google-maps">

                </div>
            </div>

        </div>
        <div class="footer-box col-lg-2">
            <div class="col-lg-7">
            <h3>Las Colonias</h3>
            <p>
                <span class="span-ico-footer"> {!!Html::image('images/ico-mapa.png', 'ico-mapa', array('class' => 'span-ico-footer'))!!}
                    Las Colonias 557</span><br>
                <span class="span-ico-footer">{!!Html::image('images/ico-fono.png', 'ico-fono', array('class' => 'span-ico-footer'))!!}
                    55 245 4647 -  55 245 4648</span><br>
                <span class="span-ico-footer">{!!Html::image('images/ico-mail.png', 'ico-mail', array('class' => 'span-ico-footer'))!!}
                    papeluchos@vtr.net</span>
            </p>
</div>
            {{-- MAPA 1--}}
            <div class="large-5 medium-6 gmaps">
                <div id="maps" class="google-maps">

                </div>
            </div>

        </div>
    </div>

    <p id="copyright">
        &copy;2016 <a href="https://www.jardinpapelucho.cl">Jardín Papelucho</a>, Todos los derechos reservados.
        <span id="computec-logo"><a
                    href="http://www.computecsos.com">{!!Html::image('images/logo-blanco.png', 'isologo-computecsos', array('id' => 'img-isologo-computecsos')) !!}</a></span>
    </p>
    @yield('meta-footer')
</footer>
{!!Html::script('js/maps.js')!!}
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdUySAYtjrmCJruK4agAZxEIGAFoueApE&callback=initialize"></script>
{{-- API KEY PRODUCCION AIzaSyD_EYZ5jHzNZ_Jag8E-b83HgGG6z5zknBk--}}
</body>
</html>