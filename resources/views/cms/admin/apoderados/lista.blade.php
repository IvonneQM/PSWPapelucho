@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/apoderados.js')!!}
    {!!Html::script('js/modals/parvulos.js')!!}
    {!!Html::script('js/relaciones/relacion.js')!!}
    @stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')

    @include('cms.admin.apoderados.create')
    @include('cms.admin.parvulos.form')

    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-12">
               {{-- col-md-4 col-xs-4 col-xs-4" --}}
                @include('partials.errors')
                <div class="panel-heading"><h1 class="title">Apoderados</h1></div>


                <div class="col-lg-12 div-btn">

                    {!! Form::open(['route' => 'administrador.apoderados.index', 'method' => 'GET', 'class' =>'nav-form nav-left', 'role' => 'search']) !!}

                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                    </div>
                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>

                    {!! Form::close()  !!}


                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-apoderado" href="#" role="button"> <i class="fa fa-user-plus"> Crear Apoderado</i></a>
                </div>

                <div class="panel-body">
                    @include('cms.admin.apoderados.partials.table')
                </div>
            </div>
        </div>
    </div>


     {!! Form::open(['route' => ['administrador.apoderados.destroy', ':APODERADO_ID'],'method' => 'DELETE', 'id' => 'form-delete-apoderado', 'action' => 'eliminarApoderado']) !!}
     {!! Form::close() !!}


    {{-- Modal Editar --}}
    <div class="modal fade" id="modal-editar-apoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                    <div class="modal-body">
                        <div class="update-apoderado"></div>
                    </div>

            </div>
        </div>
    </div>


@stop