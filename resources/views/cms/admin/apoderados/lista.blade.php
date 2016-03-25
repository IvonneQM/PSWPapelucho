@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/apoderados.js')!!}
    @stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    @include('cms.admin.apoderados.form')
    <div class="col-md-8 col-md-offset-0">

        <div class="panel-heading"><h1 class="title">Apoderados</h1></div>

        <div class="col-md-12 div-btn">
            <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-apoderado" href="#" role="button"> <i class="fa fa-user-plus"> Crear Apoderado</i></a>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tbody>
                <tr id="t-header-content-principal">
                    <th>Id</th>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Acciones</th>
                </tr>
                @foreach($apoderados as $apoderado)
                <tr data-id="{{ $apoderado->id }}">
                    <td>{!! $apoderado->id !!}</td>
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

     {!! Form::open(['route' => ['eliminarApoderado', ':APODERADO_ID'],'method' => 'DELETE', 'id' => 'form-delete-apoderado', 'action' => 'eliminarApoderado']) !!}
     {!! Form::close() !!}

 @stop