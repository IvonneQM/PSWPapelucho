{!! csrf_field() !!}
<input type="hidden" id="user_id" name="user_id" value="{{$apoderado->id}}">
<div class="form-group">
    {!!Form::label('rut','Rut: ')!!}
    {!!Form::text('rut',null, ['id'=>'rut','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del párvulo'])!!}
</div>
<div class="form-group">
    {!!Form::label('full_name','Nombre: ')!!}
    {!!Form::text('full_name',null, ['id'=>'full_name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del párvulo'])!!}
</div>
<div class="form-group">
    {!!Form::label('nivel','Nivel: ')!!}
    <select name="nivel_id" class="form-control">
        @foreach($niveles as $nivel)
            <option value="{{$nivel->getKey()}}">{{$nivel->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!!Form::label('jornada','Jornada: ')!!}
    <select name="jornada_id" class="form-control">
        @foreach($jornadas as $jornada)
            <option value="{{$jornada->getKey()}}">{{$jornada->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    {!!Form::label('jardin','Jardin: ')!!}
    <select name="jardin_id" class="form-control">
        @foreach($jardines as $jardin)
            <option value="{{$jardin->getKey()}}">{{$jardin->name}}</option>
        @endforeach
    </select>
</div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}