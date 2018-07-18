{{-- @include('auth.password') --}}
<div id="zona-apoderados">
    <ul>
        @if(Auth::check())
            @if(Auth::user()->role == 'admin')
                <li id="li-zona-apoderados"><a href="{{url('administrador')}}">Administración</a></li>
            @elseif(Auth::user()->role == 'directiva')
                <li id="li-zona-apoderados"><a href="{{url('chofer')}}">Zona Directiva</a></li>
            @elseif(Auth::user()->role == 'chofer')
            <li id="li-zona-apoderados"><a href="{{url('chofer')}}">Zona Chofer</a></li>
            @else
            <li id="li-zona-apoderados"><a href="{{url('dueno')}}">Zona Dueño</a></li>
            @endif
        {{-- @else
            <li id="li-zona-apoderados"><a href="#" id="show-login">Zona Admin</a></li> --}}
        @endif
    </ul>
</div>
<div id="login-form">
    @include('partials.errors')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {!! Form::text('rut', null , array('placeholder' => 'Rut', 'class' => 'rut text-field-apoderados')) !!}
        {!! Form::password('password',array('placeholder' => 'Contraseña', 'class' => 'text-field-apoderados')) !!}
        {{-- <a href="#" role="button" id="forgot-pass">¿Olvidaste tu contraseña?</a> --}}
        {!! Form::submit('Entrar', ['class' => 'button'])!!}
    </form>
</div>
{!!Html::script('js/jquery.rut.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/modals/mailContrasenia.js')!!}