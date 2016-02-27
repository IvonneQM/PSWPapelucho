@extends('templates.layout')
@section('page-title')
    Inicio
@stop

@section('slider')
<div class="cycle-slideshow">

    <span class="cycle-prev">&#9001;</span>
    <span class="cycle-next">&#9002;</span>
    <span class="cycle-pager"></span>


    <img class="img-slide" src="images/img1.jpg">
    <img class="img-slide" src="images/img2.jpg">
    <img class="img-slide" src="images/img3.jpg">
    <img class="img-slide" src="images/img4.jpg">
</div>
@stop

@section('article')


    <h2 id="title">Bienvenidos</h2>
    <p class="content">
        Estimados Padres y Apoderados:
    </p>
    <p class="content">
        Les damos la más cordial bienvenida a cada uno de ustedes, invitándoles a conocer el proyecto educativo de la Sala Cuna y Escuela de Párvulos “PAPELUCHO”, e instándoles a participar en la labor pedagógica que desarrollamos con mucho cariño y vocación con sus hijos(as).
    </p>
    <p class="content">
        Agradecemos en forma especial la confianza de aquellos apoderados que nos han acompañado estos últimos años, como también aquellos Padres que actualmente se han integrado a esta gran familia educativa.
    </p>
    <p class="content">
        Con especial afecto, les saludan.
    </p>
    <ul class="dir-box">
        <li>
            <span class="dir-name">Claudia Concha Gamboa</span>
            Educadora de Párvulos</br>
            Directora Sede Las Colonias
        </li>
        <li>
            <span class="dir-name">Carla Aguayo Picón</span>
            Educadora de Párvulos</br>
            Directora Sede Blumell
        </li>
    </ul>

@stop

@section('aside')
    <div id="cuerdas">
        <img src="images/cuerdas.png">
    </div>
    <h3 id="news-section-title">Noticias</h3>
    <ul class="news-box">
        <li >
    <p class="news-first-line">
        <span class="news-title">Titulo 1</span>
        <span class="news-date">02-03-16</span>
    </p>
    <p class="news-second-line">
        Aqui va el contenido de las noticias y bla bla bla
    </p>
        </li>
        <li >
            <p class="news-first-line">
                <span class="news-title">Titulo 2</span>
                <span class="news-date">05-04-16</span>
            </p>
            <p class="news-second-line">
                Aqui va el contenido de las noticias y bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
            </p>
        </li>
    </ul>
@stop