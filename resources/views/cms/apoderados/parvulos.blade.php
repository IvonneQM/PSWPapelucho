@extends('cms.layout')

@section('meta')

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

                        <div class="container">
                            <div class="row carousel-row">
                                <div class="span12">
                                    <div class="well">
                                        <div id="myCarousel" class="carousel slide">

                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="row ">
                                                        <div class="col-sm-3"><a href="#x"
                                                                                 class="thumbnail thumbnail-slide"><img
                                                                        src="http://placehold.it/500x500" alt="Image"
                                                                        class="img-responsive"></a>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <div class="row">
                                                        <div class="col-sm-3"><a href="#x"
                                                                                 class="thumbnail thumbnail-slide"><img
                                                                        src="http://placehold.it/250x250" alt="Image"
                                                                        class="img-responsive"></a>
                                                        </div>
                                                        <div class="col-sm-3"><a href="#x"
                                                                                 class="thumbnail thumbnail-slide"><img
                                                                        src="http://placehold.it/250x250" alt="Image"
                                                                        class="img-responsive"></a>
                                                        </div>
                                                        <div class="col-sm-3"><a href="#x"
                                                                                 class="thumbnail thumbnail-slide"><img
                                                                        src="http://placehold.it/250x250" alt="Image"
                                                                        class="img-responsive"></a>
                                                        </div>
                                                        <div class="col-sm-3"><a href="#x"
                                                                                 class="thumbnail thumbnail-slide"><img
                                                                        src="http://placehold.it/250x250" alt="Image"
                                                                        class="img-responsive"></a>
                                                        </div>
                                                    </div>
                                                </div>
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
                    </div>

                    {{--
                    <div class="panel-primary">
                        <div class="panel-heading">Últimas Fotografías de {!! $parvulo->jardines->name !!}</div>
                        <div class="panel-body">
                            <div class="row row-thumbnails">
                                @foreach($fotografias as $fotografia)
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 links">
                                        @if ( $fotografia->getImageExtension() == true)
                                            <a href="{{$fotografia->url}}" class="thumbnail" data-gallery>
                                                <img src="{!! $fotografia->getThumbnail() !!}">
                                            </a>

                                        @else
                                            <a href="{{$fotografia->url}}" class="thumbnail" target="_blank">
                                                <img src="{!! $fotografia->getThumbnail() !!}">
                                            </a>
                                        @endif
                                        {{-- <img src="../{{$archivo->url}}">--}}
                    {{--<a class="file-title"
                       href="{{$fotografia->url}}"> {{$fotografia->fileName}} </a>
                </div>

                @endforeach
                </div>
                </div>
                </div>--}}
                    <div class="panel-primary">
                        <div class="panel-heading">Informes al Hogar</div>
                        <div class="panel-body">
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

                    <div class="panel-primary">
                        <div class="panel-heading">Boletines Semanales</div>
                        <div class="panel-body">
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