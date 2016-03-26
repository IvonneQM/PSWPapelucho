@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/administradores.js')!!}
    @stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    @include('cms.admin.administradores.form')
    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-12">
               {{-- col-md-4 col-xs-4 col-xs-4" --}}
                <div class="panel-heading"><h1 class="title">Administradores</h1></div>

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
                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-administrador" href="#" role="button"> <i class="fa fa-user-plus"> Crear Administrador</i></a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr id="t-header-content-principal">
                            <th>Rut</th>
                            <th>Nombre Completo</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($administradores as $administrador)
                            <tr data-id="{{ $administrador->id }}">
                                <td>{!! $administrador->rut !!}</td>
                                <td>{!! $administrador->full_name !!}</td>
                                <td>
                                    <div class="t-actions">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <a href="#" type="submit" class="btn-delete-administrador"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $administradores -> render() !!}
                </div>

            </div>
        </div>
    </div>


     {!! Form::open(['route' => ['eliminarAdministrador', ':ADMINISTRADOR_ID'],'method' => 'DELETE', 'id' => 'form-delete-administrador', 'action' => 'eliminarAdministrador']) !!}
     {!! Form::close() !!}

 @stop