@extends('layout')

@section('page-title')
    Error 404
@stop

@section('article')

    <h1 class="title">Error 403</h1>
    <h2 class="principal-title cursive-title">Acceso Denegado</h2>

    <p>No tiene los suficientes permisos de acceso para visualizar la página web.</p>

    <p>De lo contrario intente volver a la página anterior.</p>

@endsection

@section(('aside'))
    <h3 class="side-section-title">...</h3>
@stop
