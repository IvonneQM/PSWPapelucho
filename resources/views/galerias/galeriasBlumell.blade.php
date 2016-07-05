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



{!! Form::open( $makeGaleryForm, ['method'=>'get','id' => 'searchform', 'class' => 'form'])!!}
{!! Field::select('galeria_id',$galerias,['name' => 'galerias' ])!!}
@foreach($galerias as $galeria)


    <h1> {{$galeria -> name}}</h1>
    @foreach($galeria->archivos as $archivo)
        <h5> {{$archivo -> fileName}}</h5>
    @endforeach
@endforeach
{!!Form::close()!!}

<script>
    $(document).ready(function () {
        $('select').select2({
            allowClear : true,
            placeholder: {
                id  : "",
                text: "Seleccione una opción"
            }

        });
        $.fn.populateSelect = function (values) {
            var options = '';
            $.each(values, function (key, row) {
                options += '<option value="' + row.value + '">' + row.text + ' </option>';
            });
            $(this).html(options);
        }
        $('#jardin_id').change(function () {
            var jardin_id = $(this).val();

            if (jardin_id == '') {
                $('#galeria_id').empty();
            }
            else {
                $.getJSON('galerias/jardin/' + jardin_id, null, function (values) {
                    $('#galeria_id').populateSelect(values);
                });
            }
        })
    });
</script>