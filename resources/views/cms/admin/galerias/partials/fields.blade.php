{!! csrf_field() !!}
<div class="form-group">
    {!!Form::label('name','Nombre: ')!!}
    {!!Form::text('name',null, ['id'=>'name_galeria','class'=>'form-control', 'placeholder' => 'Ingresa el Nombre de Galeria'])!!}
</div>

<div class="form-group">
    {!!Form::label('publish','Publicada: ')!!}
    {!! Form::checkbox('agree', 1, null, ['id'=>'publish_galeria', 'class' => 'form-control']) !!}
</div>