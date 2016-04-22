@extends('cms.layout')

@section('meta')
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::script('js/dropzone/dropzone.js') !!}
    {!! Html::script('js/dropzone/archivos.js') !!}
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
                    <table class="table table-striped">
                        <tbody>
                        <tr id="t-header-content-principal">
                            <th class="archivo"> Lista de Archivos</th>
                        </tr>
                        @foreach($archivos as $archivo)
                            <tr>
                                <td class="archivo">{!! $archivo->fileName !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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



@endsection





