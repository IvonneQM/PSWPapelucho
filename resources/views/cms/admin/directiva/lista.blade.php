@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/directiva.js')!!}
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
    @include('cms.admin.directiva.create')
    @include('cms.admin.directiva.edit')
    <div class="w3-main">
            <div class="col-lg-11">
                <h2 class="title">Directivas</h2></div>
                <div class="col-lg-11 div-btn">
                    {!! Form::open(['url' => 'administrador/listAllDirectiva', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left','id' => 'search-form-admin']) !!}
                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                    </div>
                    <button type="submit" class="btn-buscar" id="search-form-Directiva"><i class="fa fa-search"></i></button>
                    {!! Form::close()  !!}
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-directiva" href="#"
                       role="button"> <i class="fa fa-user-plus"></i><span class="button-title">Crear Directiva</span>
                    </a>
                </div>
                <div class="panel-body col-lg-11">
                    <div id="list-all-directiva">
                        {{--Tabla lista administradores partials/table SI--}}

                    </div>

                </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.directiva.destroy', ':DIRECTIVA_ID'],'method' => 'DELETE', 'id' => 'form-delete-directiva', 'action' => 'eliminarDirectiva']) !!}
    {!! Form::close() !!}
@stop
