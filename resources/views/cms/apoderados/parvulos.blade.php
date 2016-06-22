@extends('cms.layout')

@section('meta')

@stop

@section('menu-mobile')
    @include('cms.apoderados.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.apoderados.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading"><h1 class="title">{!! $par->full_name !!}</h1></div>
                <div class="col-lg-12 div-btn">
                    <table class="table table-striped">
                        <tr>
                            <td>Rut:</td>
                            <td>{!! $par->rut !!}</td>
                        </tr>
                        <tr>
                            <td>Jardin:</td>
                            <td>{!! $par->jardines->name !!}</td>
                        </tr>
                        <tr>
                            <td>Nivel:</td>
                            <td>{!! $par->niveles->name !!}</td>
                        </tr>
                        <tr>
                            <td>Jornada:</td>
                            <td>{!! $par->jornadas->name !!}</td>
                        </tr>
                    </table>









                </div>
            </div>
        </div>
    </div>
@stop

