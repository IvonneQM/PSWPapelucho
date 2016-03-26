@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/apoderados.js')!!}
    @stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    @include('cms.admin.apoderados.form')
    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-7">
               {{-- col-md-4 col-xs-4 col-xs-4" --}}
                <div class="panel-heading"><h1 class="title">Apoderados</h1></div>

                <div class="panel-body">

                    {{--{!! Form::open(['route' => cms.admin.apoderados.lista', 'method' => 'GET', 'class' =>'nav-form nav-left', 'role' => 'search']) !!}

                        <div class="form-group">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) !!}}
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                    {!! Form::close()  !!}
                    --}}
                </div>

                <div class="col-lg-12 div-btn">
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-apoderado" href="#" role="button"> <i class="fa fa-user-plus"> Crear Apoderado</i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr id="t-header-content-principal">
                            <th>Rut</th>
                            <th>Nombre Completo</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($apoderados as $apoderado)
                            <tr data-id="{{ $apoderado->id }}">
                                <td>{!! $apoderado->rut !!}</td>
                                <td>{!! $apoderado->full_name !!}</td>
                                <td>
                                    <div class="t-actions">
                                        <a href="#"><i class="fa fa-child"></i></a>
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#" type="submit" class="btn-delete-apoderado"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $apoderados -> render() !!}
                </div>

            </div>
            <div class="col-lg-5">

                @include('cms.admin.parvulos.lista')

            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-0">


        <div class="col-md-12 col-md-offset-9">



    </div>

     {!! Form::open(['route' => ['eliminarApoderado', ':APODERADO_ID'],'method' => 'DELETE', 'id' => 'form-delete-apoderado', 'action' => 'eliminarApoderado']) !!}
     {!! Form::close() !!}

 @stop