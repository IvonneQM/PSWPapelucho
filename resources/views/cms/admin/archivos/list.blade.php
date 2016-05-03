@extends('cms.layout')

@section('meta')
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::style('css/jquery.easy-autocomplete.css') !!}
    {!! Html::script('js/dropzone/dropzone.js') !!}
    {!! Html::script('js/dropzone/archivos.js') !!}

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

    <div class="container" >
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading"><h1 class="title">Contenido</h1></div>
                <div class="col-lg-12 div-btn">
                    <div class="panel-primary">
                        <div class="panel-heading" id="panel-content-heading">
                            Lista de archivos
                        </div>

                        <div id="row-thumbnails" data-url="{!! route('archivos-files') !!}">

                            @include('cms.admin.archivos.partials.thumbnails')
                        </div>

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
    </div>



@endsection

@section('meta-footer')
    {!! Html::script('js/easy-autocomplete/jquery.easy-autocomplete.js') !!}
    {!! Html::script('js/easy-autocomplete/autocomplete.js') !!}
@endsection


