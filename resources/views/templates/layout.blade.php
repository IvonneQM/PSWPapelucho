<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Jardin infantil Papelucho')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/normalize.css')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Fredericka+the+Great')!!}
    {!! Html::style('//allfont.es/allfont.css?fonts=linotypezapfino-one') !!}}

    {!!Html::script('js/jquery-2.2.0.js')!!}
    {!!Html::script('js/jquery.cycle2.min.js')!!}
    {!!Html::script('js/menu.js')!!}


</head>
<body>
<header>
    <div class="logo">
        <a href="#" ><img id="img-isologo" src="images/isologo.png" alt="Isologo"></a>
        <a href="#" ><img id="img-logotipo" src="images/logotipo.png" alt="Logotipo"></a>
        <div id="sidebar-btn">
            <a href="#"><img id="img-menu" src="images/menu-icon.png" alt="Icono Menu"></a>
        </div>
    </div>

    <img id="img-arco-verde" src="images/fondo-arco-verde.png" alt="Arco Verde">
    <div id="zona-apoderados">
        <ul >
            <li id="li-zona-apoderados"><a href="#">Zona Apoderados</a></li>
        </ul>
    </div>
<nav id="sidebar">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Mi Jardín</a></li>
        <li class="li-two-lines"><a href="#">Papelucho </br> Las Colonias</a></li>
        <li class="li-two-lines"><a href="#">Papelucho </br> Blumell</a></li>
    </ul>
</nav>
    @yield('slider')
</header>
<section>
    <div id="puzzle">
        <img src="images/puzzle.png">
    </div>
    <h1 id="page-title">@yield('page-title')</h1>
    <article>
        @yield('article')
    </article>
</section>
<aside>
    @yield('aside')
</aside>
<img id="img-arco-azul" src="images/fondo-arco-azul.png" alt="Arco Azul">
<footer>
    <div class="footer-box">
    <h3>Blumell</h3>
    <p>
        <span class="span-ico-footer"><img src="images/ico-mapa.png" alt="ico-mapa"> Blumell 049 Playa Blanca </span><br>
        <span class="span-ico-footer"><img src="images/ico-fono.png" alt="ico-fono"> 55 245 4645</span><br>
        <span class="span-ico-footer"><img src="images/ico-mail.png" alt="ico-mail"> infoblumell@jardinpapelucho.cl.</span>
    </p>
    </div>
    <div class="footer-box">
    <h3>Las Colonias</h3>
    <p>
        <span class="span-ico-footer"><img src="images/ico-mapa.png" alt="ico-mapa">Las Colonias 557</span><br>
        <span class="span-ico-footer"><img src="images/ico-fono.png" alt="ico-fono">55 245 4647 -  55 245 4648</span><br>
        <span class="span-ico-footer"><img src="images/ico-mail.png" alt="ico-mail">info@jardinpapelucho.cl.
    </p>
    </div>
    <p id="copyright">
        &copy; 2016 <a href="www.jardinpapelucho.cl">Jardín Papelucho</a>, Todos los derechos reservados.
        <a href="http://www.computecsos.com"><img id="img-isologo-computecsos" src="images/logo-blanco.png" alt="isologo-computecsos"></a>
    </p>

</footer>

</body>
</html>