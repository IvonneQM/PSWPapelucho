@extends('cms.layout')

@section('meta')

    {!!Html::script('lightbox')!!}
@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')

    @include('cms.admin.galerias.create')
    @include('cms.admin.galerias.edit')

    <div class="container" style="width: 100%">
        <div class="row-fluid" >
            <div class="col-lg-12">

                @include('partials.errors')

                <div class="panel-heading"><h1 class="title">Galerías</h1></div>
                <div class="col-lg-12 div-btn">

                    {!! Form::open(['route' => 'administrador.galerias.index', 'method' => 'GET', 'class' =>'nav-form nav-left', 'role' => 'search']) !!}

                    <div class="form-group form-group-buscar">
                        {!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de la Galeria']) !!}

                    </div>

                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>
                    {!! Form::close()  !!}

                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-galeria" href="#" role="button"> <i class="fa fa-user-plus"> Crear Galeria</i></a>
                </div>
                <div class="panel-body">

                    @include('cms.admin.galerias.partials.table')

                </div>
            </div>
        </div>
    </div>


    {!! Form::open(['route' => ['administrador.apoderados.destroy', ':APODERADO_ID'],'method' => 'DELETE', 'id' => 'form-delete-apoderado', 'action' => 'eliminarApoderado']) !!}
    {!! Form::close() !!}


    {{-- Modal Editar --}}



@stop