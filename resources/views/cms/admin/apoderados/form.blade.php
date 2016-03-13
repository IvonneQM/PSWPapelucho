
    {!!Form::open(['route'=>'creacion-apoderado.store', 'method' => 'POST'])!!}
    <div class="form-group">
        {!!Form::label('rut','Rut: ')!!}
        {!!Form::text('rut',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
    </div>
    <div class="form-group">
         {!!Form::label('full_name','Nombre: ')!!}
         {!!Form::text('full_name',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('email','Correo: ')!!}
        {!!Form::text('email',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa el correo del usuario'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('password','Contraseña: ')!!}
        {!!Form::text('password',null, ['id'=>'user','class'=>'form-control', 'placeholder' => 'Ingresa la contraseña del usuario'])!!}
    </div>
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
