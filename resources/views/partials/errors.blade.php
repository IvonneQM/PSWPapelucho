@if(! $errors -> isEmpty())
    <div class="alert alert-danger">
        <p>Por favor corrije los siguientes errores: </p>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif