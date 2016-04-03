@extends('cms.layout')

@section('meta')
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::script('js/dropzone/dropzone.js') !!}
    {!! Html::script('js/dropzone/imagenes.js') !!}
@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    Carga de archivos
                </div>
                    <div class="panel-body">
                        {!! Form::open([
                        'url' => 'uploads/imagenes/blumell',
                        'files' => 'true',
                        'class' => 'dropzone',
                        'id'    => 'dropzone-imagenes',
                        'method'=> 'POST',
                        'route' => 'administrador.files.store']) !!}
                        {!! csrf_field() !!}
                        @include('cms.admin.archivos.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





