
            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false" >
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

            <div class="row row-thumbnails">
                @foreach($archivos as $archivo)
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" id="links">
                        @if ( $archivo->getImageExtension() == true)
                            <a href="../{{$archivo->url}}" class="thumbnail" data-gallery>
                                <img src="{!! $archivo->getThumbnail() !!}">
                            </a>
                        @else
                            <a href="../{{$archivo->url}}" class="thumbnail" target="_blank">
                                <img src="{!! $archivo->getThumbnail() !!}">
                            </a>
                        @endif
                        {{-- <img src="../{{$archivo->url}}">--}}
                    </div>

            @endforeach
            </div>
