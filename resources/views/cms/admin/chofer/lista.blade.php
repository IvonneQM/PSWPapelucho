@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/chofer.js')!!}
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
    @include('cms.admin.chofer.create')
    @include('cms.admin.chofer.edit')
        <div class="w3-main">
            <div class="col-lg-11">
                <h2 class="title">Choferes</h2></div>
                <div class="col-lg-11 div-btn">
                    {!! Form::open(['url' => 'administrador/listChofer', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left','id' => 'search-form-chofer']) !!}
                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de chofer']) !!}
                    </div>
                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>
                    {!! Form::close()  !!}
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-chofer" href="#"
                       role="button"> <i class="fa fa-user-plus"></i> <span class="button-title">Crear chofer</span>
                    </a>
                </div>
                <div class="panel-body col-lg-11">
                    <div id="list-all-chofer">
                        {{--Tabla lista administradores partials/table SI--}}

                    </div>

                </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.chofer.destroy', ':CHOFER_ID'],'method' => 'DELETE', 'id' => 'form-delete-chofer', 'action' => 'eliminarChofer']) !!}
    {!! Form::close() !!}
@stop
