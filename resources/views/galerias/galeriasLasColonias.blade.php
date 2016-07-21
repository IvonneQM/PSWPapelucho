<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
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

<div id="row-thumbnails" data-url="{!! route('archivos-files') !!}">
    {!! Form::open( $makeGaleryColoniasForm, ['method'=>'get','class' => 'form'])!!}
    {!! Field::select('galeria_id',$galerias,['name' => 'galerias', 'class' =>'form' ])!!}
    {!! Form::close()!!}
    <div class="row row-thumbnails" id="row">
    </div>
</div>

{!!Html::style('css/blueimp-gallery.min.css')!!}
{!!Html::style('css/bootstrap-image-gallery.min.css')!!}

{!! Html::script('js/jquery.blueimp-gallery.min.js') !!}
{!! Html::script('js/bootstrap-gallery/bootstrap-image-gallery.min.js')!!}
{!! Html::style('css/select2.min.css') !!}
{!! Html::script('js/select2.min.js') !!}
{!! Html::script('js/busquedaSelect.js') !!}

