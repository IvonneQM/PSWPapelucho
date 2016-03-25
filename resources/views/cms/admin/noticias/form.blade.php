    {{-- Modal --}}

    <div class="modal fade" id="modalNoticias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crear Noticia</h4>
                </div>
                <div class="modal-body">

                    {!!Form::open(['id'=>'formRegisterNoticia'],['class'=>'form-horizontal'],['route'=>'registroNoticia', 'method' => 'POST', 'role' => 'form', 'action' => 'registroNoticia'])!!}
                    {!! csrf_field() !!}

                     <div class="form-group">
                        {!!Form::label('title','Título: ')!!}
                        {!!Form::text('title',null, ['id'=>'title','class'=>'form-control', 'placeholder' => 'Ingresa el título de la noticia'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('content','Contenido: ')!!}
                        {!!Form::text('content',null, ['id'=>'content','class'=>'form-control', 'placeholder' => 'Ingresa el contenido de la noticia'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('publish','Publish: ')!!}
                        {!!Form::text('publish',null, ['id'=>'publish','class'=>'form-control', 'placeholder' => 'Ingresa si se publica de la noticia'])!!}
                    </div>

                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>