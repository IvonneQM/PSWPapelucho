<table class="table table-striped">
    <tbody>
    <tr id="t-header-content-principal">
        <th>Id</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($galerias as $galeria)

        <tr data-id="{{ $galeria->id }}">
            <td>{!! $galeria->id !!}</td>
            <td>{!! $galeria->name !!}</td>
            <td>
                <div class="t-actions">
                    <a class="editar_apo" href="#" data-toggle="modal" data-target="#modal-editar-galeria" role="button" ><i class="fa fa-pencil"></i></a>
                    <a href="#" type="submit" class="btn-delete-galeria"><i class="fa fa-trash-o"></i></a>
                </div>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
{!! $galerias -> render() !!}

