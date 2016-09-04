@extends('layout')
@section('page-title')
    Inicio
@stop
@section('article')
    <h1 class="title" id="title">Bienvenidos</h1>
    <p>Estimados Padres y Apoderados:</p>
    <p>
        Les damos la más cordial bienvenida a cada uno de ustedes, invitándoles a conocer el proyecto educativo de la
        Sala Cuna y Escuela de Párvulos “PAPELUCHO”, e instándoles a participar en la labor pedagógica que desarrollamos
        con mucho cariño y vocación con sus hijos(as). </p>
    <p>
        Agradecemos en forma especial la confianza de aquellos apoderados que nos han acompañado estos últimos años,
        como también aquellos Padres que actualmente se han integrado a esta gran familia educativa. </p>
    <p>Con especial afecto, les saludan.</p>
    <ul class="two-borders-box">
        <li>
            <span class="cursive-title">Claudia Concha Gamboa</span>
            <p class="directora">Educadora de Párvulos</br>Directora Sede Las Colonias</p>
        </li>
        <li class="float">
            <span class="cursive-title">Carla Aguayo Picón</span>
            <p class="directora">Educadora de Párvulos</br>Directora Sede Blümell</p>
        </li>
    </ul>
@stop
@section('aside')
    <h3 id="news-section-title" class="side-section-title">Noticias</h3>
    <ul class="news-box">
        @foreach($noticias as $noticia)
            <li>
                <p class="news-first-line">
                    <span class="news-title">{!! $noticia->title !!}</span>
                    <span class="news-date">{!! $noticia->created_at !!}</span>
                </p>
                <p class="news-second-line">
                    {!! $noticia->content !!}
                </p>
            </li>
        @endforeach
    </ul>
@stop