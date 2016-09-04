{!! csrf_field() !!}
<div class="form-group">
    {!!Form::label('name','Nombre: ')!!}
    {!!Form::text('name',null, ['id'=>'name_galeria','class'=>'form-control', 'placeholder' => 'Ingresa el Nombre de Galeria'])!!}
</div>
<div class="form-group">
    {!!Form::label('name','Jardin: ')!!}
    <select name="jardin_id" class="form-control">
        @foreach($jardines as $jardin)
            <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!!Form::label('publish','Publicar: ')!!}
    {!! Form::checkbox('agree', 1, null, ['id'=>'publish_galeria', 'class' => 'field']) !!}
</div>