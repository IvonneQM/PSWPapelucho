@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/administradores.js')!!}
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
    @include('cms.admin.administradores.create')
    @include('cms.admin.administradores.edit')
    <div class="w3-main">
        <h2 class="title">Administradores</h2>
        <div class="col-lg-11 div-btn">
            {!! Form::open(['url' => 'administrador/listAll', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left','id' => 'search-form-admin']) !!}
                 <div class="form-group form-group-buscar">
                    {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                </div>
                <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>
            {!! Form::close()  !!}
                <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-administrador" href="#"
                    role="button"> <i class="fa fa-user-plus"></i><span class="button-title">Crear Administrador</span>
                </a>
        </div>
        <div class="panel-body col-lg-11">
            <div id="list-all">
                {{--Tabla lista administradores partials/table SI--}}
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.administradores.destroy', ':ADMINISTRADOR_ID'],'method' => 'DELETE', 'id' => 'form-delete-administrador', 'action' => 'eliminarAdministrador']) !!}
    {!! Form::close() !!}
@stop
