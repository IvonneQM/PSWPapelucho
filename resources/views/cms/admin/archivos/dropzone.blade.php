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
        <div class="row-fluid">
            <div class="col-lg-12">
                {{-- col-md-4 col-xs-4 col-xs-4" --}}
                <div class="panel-heading"><h1 class="title">Archivos</h1></div>
                  <p>Lista de archivos</p>
                {!!Form::open ([])  !!}
                <div class="form-group">
                    <h2>Radios</h2>
                   {{--@foreach($categories as $category) --}}

                            {{--<input type="radio" name="{{$category->name}}" id="{{$category->id}}" value="{{$category->id}}"> {{$category->name}} --}}
                            <label class="radio-inline"><input type="radio" name="elegir" id="imagenes" value="imagenes"> imagen</label>
                            <label class="radio-inline"><input type="radio" name="elegir" id="boletin" value="boletin"> boletin</label>
                            <label class="radio-inline"><input type="radio" name="elegir" id="informe" value="informe"> informe</label>

                    {{--@endforeach--}}


                </div>
                <div class="col-lg-12 div-btn">

                    {!! Form::open(['route' => 'administrador.administradores.index', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left', 'role' => 'search']) !!}

                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Select list:</label>
                            <select class="form-control" id="sel1">
                                {{--@foreach($categories as $category)--}}
                                    <option>Jardín Papelucho</option>
                                <option>Jardín Blumell</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                    {{--<button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>--}}

                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    Carga de archivos
                </div>
                    <div class="panel-body">
                        {!! Form::open([
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





