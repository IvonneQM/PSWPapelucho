<div class="panel-body">
    <table class="table table-striped">
        <tbody>
        <tr id="t-header-content-principal">
            <th>Rut</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>

        @foreach($parvulos as $parvulo)
            <tr data-id="{{ $parvulo->id }}">
                <td>{!! $parvulo->rut !!}</td>
                <td>{!! $parvulo->full_name !!}</td>
                <td>

                    <div class="t-actions">
                        <a class="editar_parvulo" href="#" data-toggle="modal" data-target="#modal-editar-parvulo"
                           role="button"><i class="fa fa-pencil"></i></a>
                        <a href="#" type="submit" class="btn-delete-parvulo"><i class="fa fa-trash-o"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>