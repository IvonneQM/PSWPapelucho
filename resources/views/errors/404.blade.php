@extends('layout')

@section('page-title')
    Error 404
@stop

@section('article')

    <h1 class="title">Error 404</h1>
    <h2 class="principal-title cursive-title">Página Web no encontrada</h2>

    <p>No es posible encontrar la página web a la cuál intenta acceder.</p>

    <ul>
        <li class="li-completa">
            <p>Causas más probables:</p>

            <ul>
                <li class="li-vineta">Es posible que la direccion no se haya escrito correctamente.</li>
                <li class="li-vineta">Si hizo click en un vínculo es posible que no este actualizado.</li>
            </ul>
        </li>
    </ul>
    <p>Intente volver a escribir la dirección, o volver a la página anterior.</p>

@endsection

@section(('aside'))
    <h3 class="side-section-title">...</h3>
    @stop