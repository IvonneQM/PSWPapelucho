@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/apoderados.js')!!}
    {!!Html::script('js/modals/parvulos.js')!!}
    @stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')

    @include('cms.admin.apoderados.form')
    @include('cms.admin.parvulos.form')

    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-12">
               {{-- col-md-4 col-xs-4 col-xs-4" --}}
                <div class="panel-heading"><h1 class="title">Apoderados</h1></div>

                <div class="col-lg-12 div-btn">

                    {!! Form::open(['route' => 'apoderados', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left', 'role' => 'search']) !!}

                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                    </div>
                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>

                    {!! Form::close()  !!}


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
                                        <a class="parvulos-del-apoderado" href="#"  role="button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-child"></i></a>
                                        <a href="{{ route('editarApoderado', $user->id) }}">><i class="fa fa-pencil"></i></a>
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
        </div>
    </div>


     {!! Form::open(['route' => ['eliminarApoderado', ':APODERADO_ID'],'method' => 'DELETE', 'id' => 'form-delete-apoderado', 'action' => 'eliminarApoderado']) !!}
     {!! Form::close() !!}

 @stop