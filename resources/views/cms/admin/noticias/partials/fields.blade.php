{!! csrf_field() !!}

<div class="form-group">
    {!!Form::label('title','Título: ')!!}
    {!!Form::text('title',null, ['id'=>'title','class'=>'form-control', 'placeholder' => 'Ingresa el título de la noticia'])!!}
</div>
<div class="form-group">
    {!!Form::label('content','Contenido: ')!!}
    {!!Form::textarea('content',null, ['id'=>'content','class'=>'form-control', 'placeholder' => 'Ingresa el contenido de la noticia'])!!}
</div>
<div class="form-group">
    {!!Form::label('publish','Publicar: ')!!}
    {!!Form::text('publish',null, ['id'=>'publish','class'=>'form-control', 'placeholder' => 'Ingresa si se publica de la noticia'])!!}
</div>

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}