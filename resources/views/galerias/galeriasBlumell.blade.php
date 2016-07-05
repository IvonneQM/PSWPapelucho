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

<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" id="#archivos">
</div>
 {{--@foreach($galerias as $galeria)
   <h1> {{$galeria -> name}}</h1>
    @foreach($galeria->archivos as $archivo)
        <h5> {{$archivo -> fileName}}</h5>
    @endforeach
@endforeach--}}


{!!Form::close()!!}

@section('meta-footer')

    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    {!! Html::script('js/bootstrap-gallery/bootstrap-image-gallery.min.js')!!}
    {!! Html::script('js/select2.min.js') !!}


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
                options += '<a href="../'+ row.text +'" class="thumbnail" data-gallery>' +
                        '<img src="' + row.text +'">' +
                        '</a>'

            });
            $("#archivos").append(options);
            console.log(options);
            //$(this).html(options);
        }
        $('#galeria_id').change(function () {
            var galeria_id = $(this).val();

            if (galeria_id == '') {
                $('#archivos').empty();
            }
            else {
                $.getJSON('archivos/galeria/' + galeria_id, null, function (values) {
                    $('#galeria_id').populateSelect(values);
                });
            }
        })
    });
</script>
@endsection