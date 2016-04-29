{!! csrf_field() !!}

<div class="form-group">
    {!!Form::label('rut','Rut: ')!!}
    {!!Form::text('rut',null, ['id'=>'rut','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('full_name','Nombre: ')!!}
    {!!Form::text('full_name',null, ['id'=>'full_name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('jornada','Jornada: ')!!}
    <select name="jornadas" class="form-control" id="sel1">
        @foreach($jornadas as $jornada)
            <option value="{{$jornada->getKey()}}">{{$jornada->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!!Form::label('nivel','Nivel: ')!!}
    <select name="niveles" class="form-control" id="sel1">
        @foreach($niveles as $nivel)
            <option value="{{$nivel->getKey()}}">{{$nivel->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!!Form::label('jardin','Jardin: ')!!}
    <select name="jardines" class="form-control" id="sel1">
        @foreach($jardines as $jardin)
            <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>
        @endforeach
    </select>
</div>

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}