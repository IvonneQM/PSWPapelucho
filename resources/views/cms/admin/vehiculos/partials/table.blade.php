<table class="table table-striped">
    <tbody>
    <tr id="t-header-content-principal">
            {{-- <th>Id</th> --}}

        <th>Patente</th>
        <th>Marca</th>
        <th>Modelo</th>
		<th>Acciones</th>
    </tr>
    @foreach($vehiculos as $vehiculo)
        <tr data-id="{{ $vehiculo->id }}" id="row{{$vehiculo->id}}">
            {{-- <td>{!! $vehiculo->id !!}</td> --}}
            <td>{!! $vehiculo->patente !!}</td>
            <td>{!! $vehiculo->marca !!}</td>
			<td>{!! $vehiculo->modelo !!}</td>
            <td>
                <div class="t-actions">
                    <a class="asociar_chofer" href="#" role="button"><span class="span-actions span-vehiculo">+ Chofer</span></a>
                    <a class="editar_vehiculo" href="#" data-toggle="modal" data-target="#modal-editar-vehiculo" role="button"><span class="span-actions span-editar">Editar</span></a>
                    <a href="#" type="submit" class="btn-delete-vehiculo"><span class="span-actions span-eliminar">Eliminar</span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
