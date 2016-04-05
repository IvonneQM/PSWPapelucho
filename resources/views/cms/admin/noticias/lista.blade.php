@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/noticias.js')!!}
@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    @include('cms.admin.noticias.form')
    <div class="col-md-12 col-md-offset-0">

        <div class="panel-heading"><h1 class="title">Noticias</h1></div>

        <div class="col-md-12 div-btn">
            <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-noticia" href="#" role="button"> <i class="fa fa-newspaper-o"> Crear Noticia</i></a>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tbody id="tb-noticias">
                <tr id="t-header-content-principal">
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Contenido de Noticia</th>
                    <th>Publicado</th>
                    <th>Acciones</th>
                </tr>
                @foreach($noticias as $noticia)
                <tr data-id="{{ $noticia->id }}">
                    <td>{!! $noticia->id !!}</td>
                    <td>{!! $noticia->title !!}</td>
                    <td>{!! $noticia->content !!}</td>
                    <td>{!! $noticia->publish !!}</td>
                    <td>
                        <div class="t-actions">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#" type="submit" class="btn-delete-noticia"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
          {!! $noticias -> render() !!}
        </div>

    </div>

     {!! Form::open(['route' => ['administrador.noticias.destroy', ':NOTICIA_ID'],'method' => 'DELETE', 'id' => 'form-delete-noticia', 'action' => 'eliminarNoticia']) !!}
     {!! Form::close() !!}

 @stop