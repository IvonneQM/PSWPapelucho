<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Jardin infantil Papelucho')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/normalize.css')!!}
    {!!Html::style('css/style-cms.css')!!}

    {!!Html::style('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Fredericka+the+Great')!!}
    {!!Html::style('//allfont.es/allfont.css?fonts=linotypezapfino-one')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::script('js/jquery-2.2.0.js')!!}
    @yield('meta')
</head>
<body>
<header>
    <nav id="sidebar">

        <a href="#" >{!!Html::image('images/isologo.png', 'Isologo', array('id' => 'img-isologo'))!!}</a>
        <a href="#" >{!!Html::image('images/logotipo.png', 'Logotipo', array('id' => 'img-logotipo'))!!}</a>
        <a href="#">{!!Html::image('images/menu-icon.png', 'Icono Menu', array('id' => 'img-menu'))!!}</a>
      <ul>
          <li> Inger Garrido</li>
          <li>| {!!HTML::linkAction('HomeController@index', 'Cerrar Sesión',array(), array('class' => 'url-menu'))!!}<i id='icon-font' class="fa fa-sign-out"></i></li>
      </ul>
    </nav>

</header>
<main>

<aside id="aside1">
    <h2>Parvulos</h2>
    <p>Catalina Quinteros</p>
    <p>Cristian Garrido</p>
    @yield('aside')
</aside><section>
<article>
    <h2>Informe al hogar</h2>
        @yield('article')
</article>
</section><aside id="aside2">
    <h2>Boletines semanales</h2>
        @yield('aside')
    </aside>
</main>

<footer>

    <p id="copyright">
        &copy;2016 <a href="https://www.jardinpapelucho.cl">Jardín Papelucho</a>, Todos los derechos reservados.
        <span id="computec-logo"><a href="http://www.computecsos.com">{!!Html::image('images/logo-blanco.png', 'isologo-computecsos', array('id' => 'img-isologo-computecsos')) !!}</a></span>
    </p>

</footer>

</body>
</html>