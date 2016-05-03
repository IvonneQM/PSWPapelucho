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
                    <a class="editar_admin" href="#" data-toggle="modal" data-target="#modal-editar-administrador" role="button" ><i class="fa fa-pencil"></i></a>
                    <a href="#" type="submit" class="btn-delete-administrador"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $administradores -> render() !!}