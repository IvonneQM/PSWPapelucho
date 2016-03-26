<div class="col-lg-12 div-btn">
    <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-parvulo" href="#" role="button"> <i class="fa fa-user-plus"> Crear Párvulo</i></a>
</div>
<div class="panel-body">
    <table class="table table-striped">
        <tbody>
        <tr id="t-header-content-principal">
            <th>Rut</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        {{--
        @foreach($parvulos as $parvulo)
            <tr data-id="{{ $parvulo->id }}">
               <td>{!! $parvulo->rut !!}</td>
                <td>{!! $parvulo->full_name !!}</td>
                <td>
                    <div class="t-actions">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                        <a href="#" type="submit" class="btn-delete-parvulo"><i class="fa fa-trash-o"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach--}}
        </tbody>
    </table>
    {{--{!! $parvulos -> render() !!}--}}
</div>