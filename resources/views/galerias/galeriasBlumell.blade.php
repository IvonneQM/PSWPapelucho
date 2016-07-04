
{{--<div class="form-group">
    <label for="sel4">Seleccionar galería:</label>
    <select name="niveles" class="form-control" id="sel4">
        @foreach($galerias as $galeria)
            <option value="{{$galeria->getKey()}}">{{$galeria->name}} </option>
            @foreach($galeria->archivos as $archivo)
                <img id="imgs" src="{!! $archivo->fileName!!}">
            @endforeach
        @endforeach
    </select>
</div>
--}}


{!!Form::label('galeria','Galeria: ')!!}
        @foreach($galerias as $galeria)
            <h1> {{$galeria -> name}}</h1>
            @foreach($galeria->archivos as $archivo)
                <h5> {{$archivo -> fileName}}</h5>
            @endforeach
        @endforeach
{!!Form::close()!!}
