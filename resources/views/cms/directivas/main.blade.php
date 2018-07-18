@extends('cms.layout')

@section('menu-mobile')
    @include('cms.directivas.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.directivas.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')
<h1>Vista Directiva</h1>
<table class="table table-striped" id="alluser">
        <tbody>
        <tr id="t-header-content-principal">
            <th>Patente</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Dueño</th>
            <th>Maneja</th>

        </tr>
        @foreach($vehiculos as $vehiculo)
            <tr data-id="{{ $vehiculo->id }}">
                <td>{!! $vehiculo->patente !!}</td>
                <td>{!! $vehiculo->marca !!}</td>
                <td>{!! $vehiculo->modelo !!}</td>
                <td>{!! $vehiculo->user->full_name !!}</td>
                <td>{!! $vehiculo->user->full_name !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {!! $vehiculos -> render() !!} --}}
@stop