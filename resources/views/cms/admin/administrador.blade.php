@extends('cms.layout')
@section('meta')
    {!!Html::script('js/auditoria.js')!!}
@stop
@section('aside1')
    <nav id="sidebar-desktop">
            @include('cms.admin.menu-lateral')
    </nav>
@stop
@section('general-content-1')
<!-- !PAGE CONTENT! -->
    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <h3>Panel de Control</h3>
    </header>
      
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-quarter">
            <div class="w3-container w3-red w3-padding-16">
                <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3 class="count-number"> {{ count($vehiculos) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4 class="count-subtitle">Vehiculos Registrados</h4>
            </div>
        </div>
        
        <div class="w3-quarter">
            <div class="w3-container w3-blue w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3 class="count-number">{{ count($duenos) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4 class="count-subtitle">Dueños Registrados</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-teal w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3 class="count-number">{{ count($choferes) }}</h3>
                    </div>
                <div class="w3-clear"></div>
                <h4 class="count-subtitle">Choferes Registrados</h4>
            </div>
        </div>
        <div class="w3-quarter">
            <div class="w3-container w3-orange w3-text-white w3-padding-16">
                <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                <div class="w3-right">
                    <h3 class="count-number">{{ count($directivas) }}</h3>
                </div>
                <div class="w3-clear"></div>
                <h4 class="count-subtitle">Directivas Registrados</h4>
            </div>
        </div>
    </div>
</div>
@stop
@section('aside2')
<div class="panel-primary">
    <h3 class="title">Control de Ingreso</h3>
</div>
<div class="panel-body">
    <div id="list-auditoria">
        {{--Tabla lista auditoria right-side--}}
    </div>
</div>
@endsection