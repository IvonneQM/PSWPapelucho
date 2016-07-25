@extends('cms.layout')

@section('meta')
    {!!Html::style('css/blueimp-gallery.min.css')!!}
    {!!Html::style('css/bootstrap-image-gallery.min.css')!!}
    {!! Html::script('js/jquery.blueimp-gallery.min.js') !!}
    {!! Html::script('js/bootstrap-gallery/bootstrap-image-gallery.min.js')!!}
@stop

@section('menu-mobile')
    @include('cms.apoderados.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.apoderados.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')


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
    <!--  END The Bootstrap Image Gallery lightbox -->

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">

                <div class="panel-heading"><h1 class="title">{!! $parvulo->full_name !!}</h1></div>
                <div class="col-lg-12">
                    <div class="panel-primary">
                        <div class="panel-heading" id="panel-content-heading">Información Personal</div>
                        <table class="table table-striped">
                            <tr>
                                <td>Rut:</td>
                                <td>{!! $parvulo->rut !!}</td>
                            </tr>
                            <tr>
                                <td>Jardin:</td>
                                <td>{!! $parvulo->jardines->name !!}</td>
                            </tr>
                            <tr>
                                <td>Nivel:</td>
                                <td>{!! $parvulo->niveles->name !!}</td>
                            </tr>
                            <tr>
                                <td>Jornada:</td>
                                <td>{!! $parvulo->jornadas->name !!}</td>
                            </tr>
                        </table>
                    </div>


                    <div class="panel-primary">
                        <div class="panel-heading">Últimas Fotografías de {!! $parvulo->jardines->name !!}</div>
                        <div class="panel-body">
                            <div class="row row-thumbnails">
                                @if(!$fotografias->isEmpty())
                                    <div class="container">
                                        <div class="row carousel-row">
                                            <div class="span12">
                                                <div class="well well-carousel">
                                                    <div id="myCarousel" class="carousel slide">
                                                        <div class="carousel-inner">
                                                            @foreach($fotografias->chunk(2) as $row)
                                                                <div class="item @if($row->first() === $fotografias->first()) {{ 'active' }} @endif">
                                                                    @foreach($row as $fotografia)
                                                                        <div class="col-sm-6 col-xs-6">
                                                                            <a href="{{$fotografia->url}}" class="thumbnail thumbnail-slide" data-gallery>
                                                                                <img src="{!! $fotografia->getThumbnail() !!}" alt="Image" class="img-responsive"></a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endforeach
                                                            <a class="left carousel-control" href="#myCarousel"
                                                               data-slide="prev">‹</a>

                                                            <a class="right carousel-control" href="#myCarousel"
                                                               data-slide="next">›</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="panel-primary">
                        <div class="panel-heading">Informes al Hogar</div>
                        <div class="panel-body">
                            <div class="well">
                                <div class="row row-thumbnails">
                                    @foreach($parvulo->archivos as $informe)
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 links">
                                            @if ( $informe->getImageExtension() == true)
                                                <a href="{{$informe->url}}" class="thumbnail" data-gallery>
                                                    <img src="{!! $informe->getThumbnail() !!}">
                                                </a>
                                            @else
                                                <a href="{{$informe->url}}" class="thumbnail" target="_blank">
                                                    <img src="{!! $informe->getThumbnail() !!}">
                                                </a>
                                            @endif
                                            {{-- <img src="../{{$archivo->url}}">--}}
                                            <a class="file-title"
                                               href="{{$informe->url}}"> {{$informe->fileName}} </a>

                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-primary">
                        <div class="panel-heading">Boletines Semanales</div>
                        <div class="panel-body">
                            <div class="well">
                                <div class="row row-thumbnails">
                                    @foreach($parvulo->niveles->archivos as $boletin)
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 links">
                                            @if ( $boletin->getImageExtension() == true)
                                                <a href="{{$boletin->url}}" class="thumbnail" data-gallery>
                                                    <img src="{!! $boletin->getThumbnail() !!}">
                                                </a>
                                            @else
                                                <a href="{{$boletin->url}}" class="thumbnail" target="_blank">
                                                    <img src="{!! $boletin->getThumbnail() !!}">
                                                </a>
                                            @endif
                                            {{-- <img src="../{{$archivo->url}}">--}}
                                            <a class="file-title"
                                               href="{{$boletin->url}}"> {{$boletin->fileName}} </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('aside2')
    <div class="panel-primary">
        <div class="panel-heading">Documentos Generales</div>
        <div class="general-files-container">
            <div class="row row-thumbnails">
                @foreach($archivos as $archivo)
                    <div class="links">
                        @if ( $archivo->getImageExtension() == true)
                            <a href="{{$archivo->url}}" class="thumbnail" data-gallery>
                                <img src="{!! $archivo->getThumbnail() !!}">
                            </a>
                        @else
                            <a href="{{$archivo->url}}" class="thumbnail" target="_blank">
                                <img src="{!! $archivo->getThumbnail() !!}">
                            </a>
                        @endif
                        {{-- <img src="../{{$archivo->url}}">--}}
                        <a class="file-title" href="{{$archivo->url}}"> {{$archivo->fileName}} </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
@section('meta-footer')
    <script>
        $('.carousel').carousel({
            interval: 6000,
            pause   : "false"
        });
    </script>
@stop

