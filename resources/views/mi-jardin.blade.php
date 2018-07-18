@extends('layout')
@section('page-title')
    Tarifa
@stop
@section('article')
    <h1 class="title" id="title-mi-jardin">Tarifa</h1>
    <h2 class="principal-title cursive-title">Tarifas por horario</h2>
    <div>
        <ul id="miJardinTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"
                                                      class="tab-title">Horario
                    diurno</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" class="tab-title">Horario
                    vespertino</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane panel-option active" id="tab1">
                <ul class="two-borders-box">
                    <li class="li-completa">
                        <ul>
                            <li class="li-vineta">Juan Bolivar - Centro - juan Bolivar -> $750
                            </li>
                            <li class="li-vineta">Juan Pablo - Centro - Juan Pablo -> $800
                            </li>
                            <li class="li-vineta">Juan Bolivar - (Matta/Copiapo) -> $800
                            </li>
                            <li class="li-vineta">Juan Bolivar - Coquimbo - Av. Brasil - Av. Angamos -> $1450
                            </li>
                            <li class="li-vineta">Iquique - Av. Brasil - Av. Angamos -> $850
                            </li>
                            <li class="li-vineta">Centro - Sur - Centro -> $700
                            </li>
                            <li class="li-vineta">Juan Pablo - Clinica (Matta/Copiapo) -> $900
                            </li>
                            <li class="li-vineta">Juan Pablo - Sur - Juan Pablo -> $1500
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane panel-option" id="tab2">
                <ul class="two-borders-box">
                    <li class="li-completa">
                        <ul>
                            <li class="li-vineta">Perez Canto - Centro -> $2000</li>
                            <li class="li-vineta">Centro - Sur -> $2000</li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
@stop
@section('aside')
    <h3 class="side-section-title">Objetivos de sindicato</h3>
    <ol class="objetives-box">
        <li><span class="objetives-item">Brindar un servicio seguro para todos los usuarios de transporte publico</span>
        </li>
        <li><span class="objetives-item">Dar comodidad a la hora de iniciar el transporte de la ciudadania</span>
        </li>
    </ol>
@stop
@section('meta-footer')
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/miJardinTabs.js')!!}
@endsection