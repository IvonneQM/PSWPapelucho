<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Jardin infantil Papelucho')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/normalize.css')!!}
    {!!Html::style('css/style-cms.css')!!}
    {!!Html::style('css/sweetalert.css')!!}

    {!!Html::style('//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister')!!}
    {!!Html::style('//fonts.googleapis.com/css?family=Fredericka+the+Great')!!}
    {!!Html::style('//allfont.es/allfont.css?fonts=linotypezapfino-one')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::script('js/jquery-2.2.0.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/sweetalert.js')!!}


    @yield('meta')
    @include('Alerts::alerts')
</head>
<body>
<header>
    <div id="header-bar">

        <a href="#" >{!!Html::image('images/isologo.png', 'Isologo', array('id' => 'img-isologo'))!!}</a>
        <a href="#" >{!!Html::image('images/logotipo.png', 'Logotipo', array('id' => 'img-logotipo'))!!}</a>
        <a href="#">{!!Html::image('images/menu-icon.png', 'Icono Menu', array('id' => 'img-menu'))!!}</a>
        <ul>
            <li> {{(Auth::user()->full_name)}} | </li>
            <li> <a href="{{ route('logout') }}">Cerrar Sesión <i id='icon-font' class="fa fa-sign-out"></i></a></li>
        </ul>
    </div>
</header>
<main>

    <aside id="aside1">
        @yield('aside1')
    </aside><section>
        <article>

            @yield('general-content-1')
        </article>
    </section><aside id="aside2">

        @yield('aside2')
    </aside>
</main>

<footer>
    <p id="copyright">
        &copy;2016 <a href="https://www.jardinpapelucho.cl">Jardín Papelucho</a>, Todos los derechos reservados.
        <span id="computec-logo"><a href="http://www.computecsos.com">{!!Html::image('images/logo-blanco.png', 'isologo-computecsos', array('id' => 'img-isologo-computecsos')) !!}</a></span>
    </p>
</footer>
<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>