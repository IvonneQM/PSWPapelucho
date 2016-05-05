<div class="panel-body">
<table class="table table-striped">
    <tr id="t-header-content-principal">
        <th>Rut</th>
        <th>Nombre Completo</th>
        <th>Acciones</th>
    </tr>
    <tbody>
    @foreach($apoderados as $apoderado)
        <tr data-id="{{ $apoderado->id }}">
            <td>{!! $apoderado->rut !!}</td>
            <td>{!! $apoderado->full_name !!}</td>
            <td>
                <div class="t-actions">
                    <a class="parvulos-del-apoderado" href="parvulos?user={{$apoderado->id}}"><i class="fa fa-child"></i></a>
                    <a class="editar_apo" href="#" data-toggle="modal" data-target="#modal-editar-apoderado" role="button" ><i class="fa fa-pencil"></i></a>
                    <a href="#" type="submit" class="btn-delete-apoderado"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
{!! $apoderados -> render() !!}

