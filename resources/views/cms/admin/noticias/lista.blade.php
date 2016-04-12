@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/noticias.js')!!}
@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    @include('cms.admin.noticias.form')
    @include('cms.admin.noticias.editNoticia')
    <div class="col-md-12 col-md-offset-0">

        <div class="panel-heading"><h1 class="title">Noticias</h1></div>

        <div class="col-md-12 div-btn">
            <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-noticia" href="#" role="button"> <i class="fa fa-newspaper-o"> Crear Noticia</i></a>
        </div>
        <div class="panel-body">
            @include('cms.admin.noticias.partials.tableNoticias')

        </div>

    </div>

     {!! Form::open(['route' => ['administrador.noticias.destroy', ':NOTICIA_ID'],'method' => 'DELETE', 'id' => 'form-delete-noticia', 'action' => 'eliminarNoticia']) !!}
     {!! Form::close() !!}

 @stop