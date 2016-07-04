

{!!Form::open(['id'=>'showGaleria'],['class'=>'form-horizontal'])!!}

{!!Form::label('galeria','Galeria: ')!!}
<select name="galeria_id" class="form-control">
    @if($galerias != null)

        @foreach($galerias as $galeria)
            @if($galeria->publish == 'Si')
                <option value="{{$galeria->getKey()}}">{{$galeria->name}}</option>
            @endif



        @endforeach
    @endif

</select>
{!!Form::close()!!}