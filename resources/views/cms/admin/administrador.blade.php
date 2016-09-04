@extends('cms.layout')
@section('menu-mobile')
    @include('cms.admin.menu-lateral')
@stop
@section('meta')
    {!!Html::script('js/auditoria.js')!!}
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.admin.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')
    <div class="container">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading container-title"><h1 class="title">Panel de Control</h1></div>
                <div class="col-lg-12 div-btn">
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-1">
                            <i class="fa fa-newspaper-o"></i>
                            <span class="count-number"> {{ count($noticias) }}</span>
                            <span class="count-subtitle">Noticias Publicadas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-2">
                            <i class="fa fa-child"></i>
                            <span class="count-number"> {{ count($parvulos) }}</span>
                            <span class="count-subtitle">Párvulos Registrados</span>
                        </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-3">
                            <i class="fa fa-male"></i>
                            <span class="count-number">{{ count($apoderados) }}</span>
                            <span class="count-subtitle">Apoderados Registrados</span>
                        </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-4">
                            <i class="fa fa-camera-retro"></i>
                            <span class="count-number"> {{ count($galerias) }} </span>
                            <span class="count-subtitle">Fotografias Publicadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-manual">
        <div class="row">
            <div class="col-lg-3 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-6 col-xs-offset-1 manual">
                <p>Manual de Usuario <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 pdf">
                <a href="../" class="thumbnail" target="_blank">
                    <img src="thumbnails/pdf.png">
                </a>
            </div>
        </div>
    </div>
@stop
@section('aside2')
    <div class="panel-primary">
        <div class="panel-heading">Control de Ingreso</div>
    </div>
    <div class="panel-body">
        <div id="list-auditoria">
            {{--Tabla lista auditoria right-side--}}
        </div>
    </div>
@endsection