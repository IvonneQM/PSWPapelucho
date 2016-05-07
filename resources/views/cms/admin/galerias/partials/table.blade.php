<table class="table table-striped">
    <tbody>
    <tr id="t-header-content-principal">
        <th>Nombre</th>
        <th>Publicada</th>
        <th>Acciones</th>
    </tr>
    @foreach($galerias as $galeria)

        <tr data-id="{{ $galeria->id }}">
            <td>{!! $galeria->name !!}</td>
            <td>{!! $galeria->publish !!}</td>
            <td>
                <div class="t-actions">
                    <a class="editar_galeria" href="#" data-toggle="modal" data-target="#modal-editar-galeria"
                       role="button"><i class="fa fa-pencil"></i></a>
                    <a href="#" type="submit" class="btn-delete-galeria"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
{!! $galerias -> render() !!}

