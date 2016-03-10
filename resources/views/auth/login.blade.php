<div id="zona-apoderados">
    <ul >
        <li id="li-zona-apoderados"><a href="#" id="show-login">Zona Apoderados</a></li>
    </ul>
</div>
<div id="login-form">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!! Form::text('rut', null , array('placeholder' => 'Rut', 'class' => 'text-field-apoderados')) !!}
    {!! Form::password('password',array('placeholder' => 'Contraseña', 'class' => 'text-field-apoderados')) !!}
    {!! Form::submit('Entrar', ['class' => 'button'])!!}
    {!! Form::close() !!}
</div>