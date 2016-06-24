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
                <div class="panel-heading"><h1 class="title">{!! $par->full_name !!}</h1></div>
                <div class="col-lg-12 div-btn">
                    <table class="table table-striped">
                        <tr>
                            <td>Rut:</td>
                            <td>{!! $par->rut !!}</td>
                        </tr>
                        <tr>
                            <td>Jardin:</td>
                            <td>{!! $par->jardines->name !!}</td>
                        </tr>
                        <tr>
                            <td>Nivel:</td>
                            <td>{!! $par->niveles->name !!}</td>
                        </tr>
                        <tr>
                            <td>Jornada:</td>
                            <td>{!! $par->jornadas->name !!}</td>
                        </tr>
                    </table>


                    <H2> ESTOS SON LOS DOCUMETOS DEL NIÑO (INFORME AL HOGAR</H2>
                    @foreach($par->archivos as $ar)
                        <div class="col-xs-3 text-center">
                            <a class="archivosParvulos" href="{{$ar->url}}" download>  {{$ar->fileName}} </a>
                        </div>

                    @endforeach

                    <H2> ESTOS SON LOS DOCUMETOS POR NIVEL (BOLETIN SEMANAL)</H2>

                    @foreach($par->niveles->archivos as $arch)
                        <div class="col-xs-3 text-center">
                            <a class="archivosParvulos" href="{{$arch->url}}" download>  {{$arch->fileName}} </a>
                        </div>

                        @endforeach
                        </br>
                        <H2> ESTOS SON LOS DOCUMENTOS POR JARDIN SI ES QUE HUBIERA</H2>
                        @foreach($par->jardines->archivos as $archi)
                            <div class="col-xs-3 text-center">
                                <a class="archivosParvulos" href="{{$archi->url}}" download>  {{$archi->fileName}} </a>
                            </div>
                        @endforeach

                        <H2> ESTOS SON LOS DOCUMENTOS GENERALES</H2>
                        @foreach($archivosss as $archivoooooo)
                            <div class="col-xs-3 text-center">
                                <a class="archivosParvulos" href="{{$archivoooooo->url}}" download>  {{$archivoooooo->fileName}} </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@stop

