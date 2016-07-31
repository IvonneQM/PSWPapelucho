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

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading"><h1 class="title">Administradores</h1></div>
                <div class="col-lg-12 div-btn">
                    {!! Form::open(['route' => 'administrador.administradores.index', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left', 'role' => 'search']) !!}

                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                    </div>
                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>
                    {!! Form::close()  !!}

                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-administrador" href="#"
                       role="button"> <i class="fa fa-user-plus"> <span class="button-title">Crear Administrador</span></i>
                    </a>
                </div>
                @include('cms.admin.administradores.partials.table')
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.administradores.destroy', ':ADMINISTRADOR_ID'],'method' => 'DELETE', 'id' => 'form-delete-administrador', 'action' => 'eliminarAdministrador']) !!}
    {!! Form::close() !!}
@stop
