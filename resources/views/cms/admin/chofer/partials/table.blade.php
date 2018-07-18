<table class="table table-striped" id="alluser">
    <tbody>
    <tr id="t-header-content-principal">
        <th>Rut</th>
        <th>Nombre Completo</th>
        <th>Acciones</th>
    </tr>
    @foreach($choferes as $chofer)
        <tr data-id="{{ $chofer->id }}">
            <td>{!! $chofer->rut !!}</td>
            <td>{!! $chofer->full_name !!}</td>
            <td>
                <div class="t-actions">
                    <a class="editar_chofer" href="#" data-toggle="modal" data-target="#modal-editar-chofer"
                       role="button"><span class="span-actions span-editar">Editar</span></a>
                    <a href="#" type="submit" class="btn-delete-chofer"><span class="span-actions span-eliminar">Eliminar</span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $choferes -> render() !!}