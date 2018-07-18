<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'SisColectivo')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon.png"/>
    {!!Html::style('css/bootstrap.min.css')!!}
    {{-- {!!Html::style('css/normalize.min.css')!!} --}}
    {!!Html::style('css/style-main-cms.css')!!}
    {!!Html::style('css/sweetalert.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::script('js/jquery-2.2.0.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/sweetalert.min.js')!!}
    {!!Html::script('js/main.js')!!}

    {{-- {!!Html::script('js/menu.js')!!} --}}
    @yield('meta')
    @include('Alerts::alerts')
</head>
<body>
<header>
    <div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
        <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <a class="item-menu w3-right" href="{{ route('logout') }}">Cerrar Sesión</a>
        <span class="w3-left">Logo</span>
    </div>

      <!-- Sidenav/menu -->
    <nav class="w3-sidenav w3-collapse w3-animate-left" style="z-index:3;width:250px;" id="mySidenav"><br>
        <div class="w3-container w3-row">
          <div class="w3-col s8">
            <span class="user">Bienvenido, <br><strong> {{(Auth::user()->full_name)}}</strong></span><br>
          </div>
        </div>
        <hr>
        <aside id="aside1">
            <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
             @yield('aside1')
        </aside>
      </nav>
      
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
</header>
<main>
    <section>
        <article class="w3-main" style="margin-left:250px;margin-top:43px;">
            @yield('general-content-1')
        </article>
    </section>
    <aside id="aside2" class="w3-row-padding">
        @yield('aside2')
    </aside>
</main>
{{-- <script src="js/main.js"></script> --}}


<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>