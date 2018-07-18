@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/vehiculos.js')!!}
    {!!Html::script('js/modals/asociar.js')!!}
    {!!Html::script('js/jquery.rut.min.js')!!}
@stop

@section('menu-mobile')
    @include('cms.admin.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.admin.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')
    @include('cms.admin.vehiculos.create')
    @include('cms.admin.vehiculos.edit')
    @include('cms.admin.vehiculos.asociar')

        <div class="w3-main">
            <div class="col-lg-11">
                @include('partials.errors')
                <h2 class="title">Vehículos de {{$duenos->full_name}}</h2>
                </div>
                <div class="col-lg-11 div-btn">
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-vehiculo" href="#" role="button">
                        <i class="fa fa-user-plus"></i><span class="button-title">Crear Vehículo</span></a>
                </div>
                <div class="panel-body col-lg-11">
                    <div id="list-vehiculos">
                        @include('cms.admin.vehiculos.partials.table')
                    </div>
                </div>
            </div>
    </div>
    {!! Form::open(['route' => ['administrador.vehiculos.destroy', ':VEHICULO_ID'],'method' => 'DELETE', 'id' => 'form-delete-vehiculo', 'action' => 'eliminarVehiculo']) !!}
    {!! Form::close() !!}
@stop
