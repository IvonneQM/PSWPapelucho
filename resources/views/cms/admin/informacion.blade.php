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
                            <div class="panel-heading panel-content-heading" role="tab" id="headingThree">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="panel-title custom-panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseThree"
                                               aria-expanded="true" aria-controls="collapseThree">
                                                CMS Siscolectivo V1.0.0
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
                                    <p class="content">Estado inicial de CMS SisColectivo</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection