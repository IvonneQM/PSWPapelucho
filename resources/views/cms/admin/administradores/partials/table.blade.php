<table class="table table-striped" id="alluser">
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
                    <a class="editar_admin" href="#" data-toggle="modal" data-target="#modal-editar-administrador"
                       role="button"><span class="span-actions span-editar">Editar</span></a>
                    <a href="#" type="submit" class="btn-delete-administrador"><span class="span-actions span-eliminar">Eliminar</span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $administradores -> render() !!}