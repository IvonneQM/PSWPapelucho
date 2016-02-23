<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Jardin infantil Papelucho')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link href='https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    <script src="js/jquery-2.2.0.js"> </script>
    <script src="js/menu.js"></script>
</head>
<body>
<header>
    <div class="logo">
        <a href="#" ><img id="img-isologo" src="images/isologo.png" alt="Isologo"></a>
        <div id="sidebar-btn">
            <a href="#"><img id="img-menu" src="images/menu-icon.png" alt="Icono Menu"></a>
        </div>
    </div>
    <ul>
        <li id="li-zona-apoderados"><a href="#">Zona Apoderados</a></li>
    </ul>
    <img id="img-arco-verde" src="images/fondo-arco-verde.png" alt="Arco Verde">
<nav id="sidebar">
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Mi Jardín</a></li>
        <li class="li-two-lines"><a href="#">Papelucho </br> Las Colonias</a></li>
        <li class="li-two-lines"><a href="#">Papelucho </br> Blumell</a></li>
    </ul>
</nav>
</header>
<article>
    <section>
        @yield('section')
    </section>
</article>

<aside>
    @yield('aside')
</aside>
<img id="img-arco-azul" src="images/fondo-arco-azul.png" alt="Arco Azul">
<footer>
    <div class="footer-box">
    <h3>Blumell</h3>
    <p>
        </br>Blumell 049 Playa Blanca
        </br>55 245 4645
        </br>infoblumell@jardinpapelucho.cl.
    </p>
    </div>
    <div class="footer-box">
    <h3>Las Colonias</h3>
    <p>
        </br>Las Colonias 557
        </br>55 245 4647 -  55 245 4648
        </br>info@jardinpapelucho.cl.
    </p>
    </div>
    <p id="copyright">
        &copy; 2016 Jardín Papelucho, Todos los derechos reservados.
    </p>

</footer>

</body>
</html>