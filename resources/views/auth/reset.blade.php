<!-- resources/views/auth/reset.blade.php -->

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Nueva contraseña
        <input type="password" name="password">
    </div>

    <div>
        Confirma contraseña
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Cambiar contraseña
        </button>
    </div>
</form>

