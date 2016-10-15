@extends('cms.layout')
@section('menu-mobile')
    @include('cms.admin.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.admin.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')

    <div class="container" style="width: 100%">
        <div class="row-fluid">
            <div class="col-lg-12">
                @include('partials.errors')
                <div class="panel-heading container-title"><h1 class="title">Versiones (Actualizaciones)</h1></div>
                <div class="col-lg-12 div-btn">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-content-heading" role="tab" id="headingOne">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="panel-title custom-panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion"
                                               href="#collapseThree" aria-expanded="false"
                                               aria-controls="collapseThree">
                                                CMS Papelucho V1.0.2
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="update-date">29-Sep-2016</span>
                                    </div>
                                </div>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p class="content">Mejora de funcionalidad:</p>
                                    <ul>
                                        <li class="li-vineta">Implementación de conteo de caracteres en campos TextArea
                                            por medio de AJAX.
                                        </li>
                                        <li class="li-vineta">Redimensión automática de imágenes al momento de
                                            guardarlas, el reajuste se genera actualizando su ancho máximo a 1280px y
                                            calculando la altura de manera automática con el fin de mantener las
                                            proporciones de la imágen.
                                        </li>
                                        <li class="li-vineta">Cambio de tamaño máximo por archivo subido al servidor a
                                            5MB.
                                        </li>
                                        <li class="li-vineta">Generación de vínculo para la visualización del documento
                                            Manual de Usuario
                                        </li>
                                    </ul>
                                    <p class="content">Corrección de problemática:</p>
                                    <ul>
                                        <li class="li-vineta">Rotación automática de imágenes que presentan problemas de
                                            orientación.
                                        </li>
                                        <li class="li-vineta">Solución a problema presentado al momento de generar los
                                            vínculos de paginación vía AJAX.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('cms.layout')
@section('meta')
    {!!Html::script('js/modals/noticias.js')!!}
@stop
@section('menu-mobile')
    @include('cms.admin.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.admin.menu-lateral')
        </ul>
    </nav>
@stop
@section('general-content-1')
    @include('cms.admin.noticias.form')
    @include('cms.admin.noticias.edit')
    <div class="col-md-12 col-md-offset-0">
        <div class="panel-heading container-title"><h1 class="title">Noticias</h1></div>
        <div class="col-md-12 div-btn">
            <a class="btn btn-primary pull-right btn-crear-nuevo" id="register-noticia" href="#" role="button"> <i
                        class="fa fa-newspaper-o"> <span class="button-title">Crear Noticia</span></i></a>
        </div>
        <div class="panel-body">
            <div id="list-noticia">
                {{--Tabla lista noticias partials/table--}}
            </div>
        </div>
    </div>
    {!! Form::open(['route' => ['administrador.noticias.destroy', ':NOTICIA_ID'],'method' => 'DELETE', 'id' => 'form-delete-noticia', 'action' => 'eliminarNoticia']) !!}
    {!! Form::close() !!}
@stop