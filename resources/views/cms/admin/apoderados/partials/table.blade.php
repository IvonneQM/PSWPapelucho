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
                    <a class="parvulos-del-apoderado" href="#"  role="button" data-toggle="modal" data-target="bs-example-modal-lg"><i class="fa fa-child"></i></a>
                    <div class="update-apoderado">
                        <a type="submit" class="editar-apoderado" href="#"  role="button" ><i class="fa fa-pencil"></i></a>
                    </div>
                    <a href="#" type="submit" class="btn-delete-apoderado"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $apoderados -> render() !!}

<div class="modal fade" id="modal-editar-apoderado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Apoderado :</h4>
            </div>
            <div class="modal-body form-edit-apoderado">


            </div>
        </div>
    </div>
</div>