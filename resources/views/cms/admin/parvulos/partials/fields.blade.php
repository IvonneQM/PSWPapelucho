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
    {!!Form::select('jornada')!!}
</div>
<div class="form-group">
    {!!Form::label('nivel','Nivel: ')!!}
    {!!Form::select('nivel')!!}
</div>
<div class="form-group">
    {!!Form::label('jardin','Jardin: ')!!}
    {!!Form::select('jardin')!!}
</div>

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}