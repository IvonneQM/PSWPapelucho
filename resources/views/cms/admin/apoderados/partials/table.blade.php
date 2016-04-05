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

                        <a type="submit" class="editar-apoderado" href="#"  role="button" ><i class="fa fa-pencil"></i></a>

                    <a href="#" type="submit" class="btn-delete-apoderado"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
{!! $apoderados -> render() !!}

