@extends('layout')
@section('page-title')
    Inicio
@stop
@section('welcome')
<div class="welcome">
    <div class="welcome_description">
        <h2 class="welcome_description_title text_center">Bienvenidos</h2>
        <p>El sindicato de trabajadores independientes de taxi-colectivo les da la mas cordial bienvenida a todos nuestros usuarios. Agradecemos en forma especial la confianza de aquellos usuarios que nos han acompañado estos últimos años, brindando su confianza, como también aquellos nos prefieren a diario.</p>
        <div class="welcome_author text_center">
            <p>Juan Cortez</p>
            <p>Presidente</p>
        </div>
	</div>
</div>
@endsection

@section('tours')
<h2 class="tours_main_title text_center">Recorridos</h2>
	<div class="tours">
    	<div class="tours_south_route">
            <h2 class="tours_title">Recorrido de sur a norte</h2>
            <div id="map"></div>
        </div>
    	<div class="tours_northern_route">
            <h2 class="tours_title">Recorrido de norte a sur</h2>
            {{-- <div id="maps"></div> --}}
        </div>
    </div>
@endsection

@section('rates')
<center><h2 class="rates_main_title text_center">Tarifas</h2>
<div class="rates">
    <div class="rates_day">
        <h2 class="rates_title">Horario Diurno</h2>
        <h3>Precio de recorrido</h3>
    </div>
    <div class="rates_night">
        <h2 class="rates_title">Horario Vespertino</h2>
        <h3>Precio de recorrido</h3>
	</div>
</div>
@endsection
{{-- @section('aside')
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
@stop --}}


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8s1ahurS5NL1zcs9WDParKYQnvqkE8XM"></script>
{!!Html::script('js/maps.js')!!}
