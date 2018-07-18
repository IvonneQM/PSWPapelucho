<table class="table table-striped" id="alluser">
    <tbody>
    <tr id="t-header-content-principal">
        <th>Rut</th>
        <th>Nombre Completo</th>
        <th>Acciones</th>
    </tr>
    @foreach($duenos as $dueno)
        <tr data-id="{{ $dueno->id }}">
            <td>{!! $dueno->rut !!}</td>
            <td>{!! $dueno->full_name !!}</td>
            <td>
                <div class="t-actions">
					<a class="vehiculos-dueno" href="vehiculos?user={{$dueno->id}}"><span class="span-actions span-vehiculo">+ Vehiculo</span></a>
                    <a class="editar_dueno" href="#" data-toggle="modal" data-target="#modal-editar-duenos"
                       role="button"><span class="span-actions span-editar">Editar</span></a>
                    <a href="#" type="submit" class="btn-delete-duenos"><span class="span-actions span-eliminar">Eliminar</span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $duenos -> render() !!}