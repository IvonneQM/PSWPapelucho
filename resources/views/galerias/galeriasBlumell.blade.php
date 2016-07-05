<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>


{!! Form::open( $makeGaleryForm, ['method'=>'get','id' => 'searchform', 'class' => 'form'])!!}
{!! Field::select('galeria_id',$galerias,['name' => 'galerias' ])!!}
<div class="row row-thumbnails">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" id="links">

    </div>
</div>

 {{--@foreach($galerias as $galeria)
   <h1> {{$galeria -> name}}</h1>
    @foreach($galeria->archivos as $archivo)
        <h5> {{$archivo -> fileName}}</h5>
    @endforeach
@endforeach--}}


{!!Form::close()!!}

<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
{!!Html::style('css/bootstrap-image-gallery.min.css')!!}

<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
{!! Html::script('js/bootstrap-gallery/bootstrap-image-gallery.min.js')!!}
{!! Html::style('css/select2.min.css') !!}
{!! Html::script('js/select2.min.js') !!}



<script type="text/javascript">
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

            $('#links').append(options);
            //console.log(options);
            //$(this).html(options);
        }
        $('#galeria_id').change(function () {
            var galeria_id = $(this).val();

            if (galeria_id == '') {
                $('#links').empty();
            }
            else {
                $.getJSON('archivos/galeria/' + galeria_id, null, function (values) {
                    $('#links').populateSelect(values);
                });
            }
        })
    });
</script>


