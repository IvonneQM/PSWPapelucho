
    <table class="table table-striped">
        <tbody id="tb-noticias">
        <tr id="t-header-content-principal">
            <th>Titulo</th>
            <th>Contenido de Noticia</th>
            <th>Publicado</th>
            <th>Acciones</th>
        </tr>
        @foreach($noticias as $noticia)
            <tr data-id="{{ $noticia->id }}">
                <td>{!! $noticia->title !!}</td>
                <td>{!! $noticia->content !!}</td>
                <td>{!! $noticia->publish !!}</td>
                <td>
                    <div class="t-actions">
                        <a class="editar_noticia" href="#" data-toggle="modal" data-target="#modal-editar-noticia" role="button" ><i class="fa fa-pencil"></i></a>
                        <a href="#" type="submit" class="btn-delete-noticia"><i class="fa fa-trash-o"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $noticias -> render() !!}
