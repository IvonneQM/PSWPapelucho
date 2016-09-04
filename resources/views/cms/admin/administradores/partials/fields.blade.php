{!! csrf_field() !!}
{{--Estos campos se utilizan debido a que chrome no reconoce el autocomplete:off y
autocompleta solo el primer campo de cada tipo--}}
<input style="display:none">
<input type="password" style="display:none">
<div class="form-group">
    {!!Form::label('rut','Rut: ')!!}
    {!!Form::text('rut',null, ['id'=>'rut','class'=>'form-control rut', 'placeholder' => 'Ingresa el RUT del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('full_name','Nombre: ')!!}
    {!!Form::text('full_name',null, ['id'=>'full_name','class'=>'form-control', 'placeholder' => 'Ingresa el nombre del usuario'])!!}
</div>
<div class="form-group">
    {!!Form::label('email','Correo: ')!!}
    {!!Form::Email('email',null, ['id'=>'email', 'class'=>'form-control', 'placeholder' => 'Ingresa el correo del usuario', 'autocomplete' => 'off'])!!}
</div>
<div class="form-group">
    {!!Form::label('password','Contraseña: ')!!}
    {!!Form::password('password', ['id'=>'password','class'=>'form-control', 'placeholder' => 'Ingresa la contraseña del usuario', 'autocomplete' => 'off'])!!}
</div>
{!! Form::hidden('role', 'admin', array('id' => 'role')) !!}