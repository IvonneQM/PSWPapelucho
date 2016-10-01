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
                                            por
                                            medio de
                                            AJAX.
                                        </li>
                                        <li class="li-vineta">Redimensión automática de imágenes al momento de
                                            guardarlas, el
                                            reajuste
                                            se genera
                                            actualizando su ncho máximo a 1280px y calculando la altura de manera
                                            automática con
                                            el
                                            fin
                                            de mantener las proporciones de la imágen.
                                        </li>
                                        <li class="li-vineta">Cambio de tamaño máximo por archivo subido al servidor a
                                            5MB.
                                        </li>
                                        <li class="li-vineta">Generación de vínculo para la visualización del documento
                                            Manual
                                            de
                                            Usuario
                                        </li>
                                    </ul>
                                    <p class="content">Corrección de problemática:</p>
                                    <ul>
                                        <li class="li-vineta">Rotación automática de imágenes que presentan problemas de
                                            orientación.
                                        </li>
                                        <li class="li-vineta">Solución a problema presentado al momento de generar los
                                            vínculos
                                            de
                                            paginación vía
                                            AJAX.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-content-heading" role="tab" id="headingTwo">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="panel-title custom-panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion"
                                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                CMS Papelucho V1.0.1
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="update-date">19-Sep-2016</span>
                                    </div>
                                </div>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p class="content">Mejora de funcionalidad:</p>
                                    <ul>
                                        <li class="li-vineta">Incorporación de funcionalidad de Actualización de items
                                            por medio
                                            de
                                            AJAX.
                                        </li>
                                    </ul>
                                    <p class="content">Corrección de problemática:</p>
                                    <ul>
                                        <li class="li-vineta">Permisividad al momento de guardar archivos repetidos
                                            (imágenes
                                            y/o
                                            documentos). Control por
                                            medio de numeración añadida como sufijo al nombre del archivo en cuestión.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-content-heading" role="tab" id="headingThree">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="panel-title custom-panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne"
                                               aria-expanded="true" aria-controls="collapseOne">
                                                CMS Papelucho V1.0.0
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="update-date">26-Ago-2016</span>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p class="content">Estado inicial de CMS Papelucho</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection