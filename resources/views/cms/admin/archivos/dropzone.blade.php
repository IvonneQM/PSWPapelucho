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
                <div class="panel-heading"><h1 class="title">Contenido</h1></div>
                {!!Form::open ([])  !!}
                <div class="form-group">
                    {{--@foreach($categories as $category) --}}
                    {{--<input type="radio" name="{{$category->name}}" id="{{$category->id}}" value="{{$category->id}}"> {{$category->name}} --}}
                    <label class="radio-inline"><input type="radio" name="elegir" id="imagenes" value="imagenes">Imágen</label>
                    <label class="radio-inline"><input type="radio" name="elegir" id="boletin" value="boletin">Informe
                        al Hogar</label>
                    <label class="radio-inline"><input type="radio" name="elegir" id="informe" value="informe">Boletin
                        Semanal</label>
                    <label class="radio-inline"><input type="radio" name="elegir" id="info_gral" value="info_gral">Información
                        General</label>

                    {{--@endforeach--}}
                </div>
                <div class="col-lg-12 div-btn">
                    <table class="table table-striped">
                        <tbody>
                        <tr id="t-header-content-principal">
                            <th class="archivo"> Lista de Archivo</th>
                        </tr>
                        @foreach($archivos as $archivo)
                            <tr>
                                <td class="archivo">{!! $archivo->fileName !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $archivos -> render() !!}
                </div>

                {!! Form::open(['route' => 'administrador.administradores.index', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left>', 'role' => 'search']) !!}
                <div class="col-lg-6 div-btn">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Seleccionar Galería:</label>
                            <select class="form-control" id="sel1">
                                {{--@foreach($categories as $category)--}}
                                <option>Galería 1</option>
                                <option>Galería 2</option>
                                <option>Galería 3</option>
                                <option>Galería 4</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Seleccionar Párvulo:</label>
                            <select class="form-control" id="sel1">
                                {{--@foreach($categories as $category)--}}
                                <option>Mónica</option>
                                <option>Pascual</option>
                                <option>Oriana Chiguagua</option>
                                <option>Tony Espina</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Seleccionar Nivel:</label>
                            <select class="form-control" id="sel1">
                                {{--@foreach($categories as $category)--}}
                                <option>Nivel Medio Menor</option>
                                <option>Nivel Medio Mayor</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="sel1">Seleccionar Jardín:</label>
                            <select class="form-control" id="sel1">
                                {{--@foreach($categories as $category)--}}
                                <option>Jardín Papelucho</option>
                                <option>Jardín Blumell</option>
                                {{--@endforeach--}}
                            </select>
                        </div>
                    </div>
                </div>
                {{--<button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>--}}
                <div class="col-md-4 div-btn">
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-galeria" href="#"
                       role="button"><i class="fa fa-picture-o"> Crear Galería</i></a>
                </div>
                {!! Form::close()  !!}

            </div>
        </div>
    </div>


    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel panel-primary panel-dropzone">
                    <div class="panel-heading">
                    Carga de contenido
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





