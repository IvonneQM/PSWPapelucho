<div id="zona-apoderados">
    <ul >
        @if(Auth::check())

            @if(Auth::user()->role == 'admin')

            <li id="li-zona-apoderados"><a href="{{url('administrador')}}">Administración</a></li>
            @else(Auth::user()->role == 'apoderado')
            <li id="li-zona-apoderados"><a href="{{url('apoderado')}}">Zona Apoderados</a></li>
            @endif
        @else
            <li id="li-zona-apoderados"><a href="#" id="show-login">Zona Apoderados</a></li>
        @endif
    </ul>
</div>
<div id="login-form">
    @include('partials.errors')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!! Form::text('rut', null , array('placeholder' => 'Rut', 'class' => 'rut text-field-apoderados')) !!}
    {!! Form::password('password',array('placeholder' => 'Contraseña', 'class' => 'text-field-apoderados')) !!}

    <a href="{{ url('password/email') }}" id="forgot-pass">¿Olvidaste tu contraseña?</a>

    {!! Form::submit('Entrar', ['class' => 'button'])!!}
    {!! Form::close() !!}
</div>

{!!Html::script('js/jquery.Rut.js')!!}


