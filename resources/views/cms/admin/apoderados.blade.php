@extends('cms.layout')

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')
    <div class="col-md-12 col-md-offset-0">

        <div class="panel-heading"><h1 class="title">Apoderados</h1></div>
        <div class="col-md-12 div-btn">
            <a class="btn btn-primary pull-right btn-crear-apod" href="#" role="button"> <i class="fa fa-user-plus"> Crear Apoderado</i></a>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr id="t-header-apoderados">
                    <th>#</th>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th id="t-actions">Acciones</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>17434170-2</td>
                    <td>Yvonne Quinteros Molina</td>
                    <td>ivonneqm@gmail.com</td>
                    <td>
                        <a href="#"><i class="fa fa-child"></i></a>
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#"><i class="fa fa-trash-o"></i></a>




                    </td>
                </tr>
            </table>
        </div>

    </div>

@stop