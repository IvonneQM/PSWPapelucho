{{-- Modal --}}

<div class="modal fade" id="modal-editar-noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="nombre_noticia"></h4>
            </div>
            <div class="modal-body">
                <a hidden="hidden" id="id_href_noticia" href="{{route('administrador.noticias.edit')}}"></a>
                <a hidden="hidden"  id="id_update_noticia" href="{{route('administrador.noticias.update')}}"></a>

                <form id="id_form_noticia" method="PUT" action="{{route('administrador.noticias.update')}}">
                    {!! csrf_field() !!}
                    {!!Form::hidden('id',null,['id'=>'idNoticia'])!!}
                    <div class="form-group">
                        {!!Form::label('title','Título: ')!!}
                        {!!Form::text('title',null, ['class'=>'form-control', 'id'=>'titleNoticia', 'placeholder' => 'Ingresa el título de la noticia'])!!}

                    </div>
                    <div class="form-group">
                        {!!Form::label('content','Contenido: ')!!}
                        {!!Form::textarea('content',null, ['id'=>'contentNoticia','class'=>'form-control', 'placeholder' => 'Ingresa el contenido de la noticia'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('publish','Publicar: ')!!}
                        {!! Form::checkbox('pub', null, ['id'=>'publishNoticia', 'class' => 'field']) !!}
                    </div>

                    {!!Form::submit('Aceptar',['class'=>'btn btn-primary','id' => 'btnActualizarNoticia'])!!}
                </form>

            </div>
        </div>
    </div>
</div>