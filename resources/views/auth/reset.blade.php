@extends('layout')

@section('page-title')
    Recuperación de contraseña
@stop

@section('article')


    <h1 class="title" id="title-recover-pass">Recuperación de contraseña</h1>
    <p>
    <form method="POST" action="/password/reset">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            {!! Form::label('email','Correo Electrónico: ') !!}
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese correo electrónico', 'required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Ingrese nueva contraseña: ') !!}
            {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Nueva contraseña','required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Confirme contraseña: ') !!}
            {!! Form::password('password_confirmation',['class'=>'form-control', 'placeholder'=>'Confirme contaseña','required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!!Form::submit('Aceptar',['class'=>'btn btn-primary', 'id'=>'recuperar-boton'])!!}
        </div>
    </form>
    </p>
@stop
