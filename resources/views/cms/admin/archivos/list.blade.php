@extends('cms.layout')

@section('meta')
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::style('css/lightbox.css') !!}

    {!! Html::script('js/dropzone/dropzone.js') !!}
    {!! Html::script('js/dropzone/archivos.js') !!}
    {!! Html::script('js/lightbox/lightbox-plus-jquery.min.js') !!}
    {!! Html::script('js/lightbox/lightbox-plus-jquery.min.map') !!}


@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading"><h1 class="title">Contenido</h1></div>
                <div class="col-lg-12 div-btn">
                    <div class="panel-primary">
                        <div class="panel-heading" id="panel-content-heading">
                            Lista de archivos
                        </div>
                        <div class="row row-thumbnails">

                            @foreach($archivos as $archivo)
                                <div class="col-md-2">
                                    <a href="../{{$archivo->url}}" class="thumbnail" data-lightbox="archivo">
                                        <img src="../{{$archivo->url}}">
                                    </a>
                                </div>
                            @endforeach


                        </div>

                        {!! $archivos->render() !!}

                        <div>
                            <div>
                                <div class="panel-primary">
                                    <div class="panel-heading">
                                            Carga de contenido
                                        </div>
                                    {!! Form::open([
                                      'files' => 'true',
                                      'class' => 'dropzone',
                                      'id'    => 'dropzone-imagenes',
                                      'method'=> 'POST',
                                      'route' => 'administrador.archivos.store']) !!}


                                    <div class="panel-body">
                                        <div class="container" style="width: 100%">
                                            @include('cms.admin.archivos.partials.form')
                                        </div>
                                        {!! csrf_field() !!}
                                        @include('cms.admin.archivos.create')
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {!! Html::script('js/lightbox/lightbox-plus-jquery.min.js') !!}

@endsection





