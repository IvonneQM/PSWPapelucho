@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/parvulos.js')!!}
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
    @include('cms.admin.parvulos.create')
    @include('cms.admin.parvulos.edit')
    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                @include('partials.errors')
                <div class="panel-heading container-title"><h1 class="title">Parvulos de {{$apoderado->full_name}}</h1>
                </div>
                <div class="col-lg-12 div-btn">
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-parvulo" href="#" role="button">
                        <i class="fa fa-user-plus"><span class="button-title">Crear Párvulo</span></i></a>
                </div>
                <div class="panel-body">
                    <div id="list-parvulos">
                        @include('cms.admin.parvulos.partials.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.parvulos.destroy', ':PARVULO_ID'],'method' => 'DELETE', 'id' => 'form-delete-parvulo', 'action' => 'eliminarParvulo']) !!}
    {!! Form::close() !!}
@stop