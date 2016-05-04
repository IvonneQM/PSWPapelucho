@extends('cms.layout')

@section('meta')
    {!!Html::script('js/modals/apoderados.js')!!}

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

    @include('cms.admin.apoderados.create')
    @include('cms.admin.apoderados.edit')

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                @include('partials.errors')
                <div class="panel-heading"><h1 class="title">Apoderados</h1></div>

                <div class="col-lg-12 div-btn">

                    {!! Form::open(['route' => 'administrador.apoderados.index', 'method' => 'GET', 'class' =>'nav-form nav-left pull-left', 'role' => 'search']) !!}

                    <div class="form-group form-group-buscar">
                        {!! Form::text('full_name', null, ['class' => 'form-control ', 'placeholder' => 'Nombre de Usuario']) !!}
                    </div>
                    <button type="submit" class="btn-buscar"><i class="fa fa-search"></i></button>

                    {!! Form::close()  !!}


                    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-apoderado" href="#" role="button"> <i class="fa fa-user-plus"> <span class="button-title">Crear Apoderado</span></i></a>
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



@stop

@section('meta-footer')
    {!!Html::script('js/jquery.Rut.js')!!}
    @endsection