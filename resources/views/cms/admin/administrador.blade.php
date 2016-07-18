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

    <div class="container">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="panel-heading"><h1 class="title">Panel de Control</h1></div>
                <div class="col-lg-12 div-btn">
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-1">
                            <i class="fa fa-newspaper-o"></i>
                            <span class="count-number"> 700 </span>
                            <span class="count-subtitle">Noticias Publicadas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-2">
                            <i class="fa fa-child"></i>
                            <span class="count-number"> 700 </span>
                            <span class="count-subtitle">Párvulos Registrados</span>
                        </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-3">
                            <i class="fa fa-male"></i>
                            <span class="count-number"> 700 </span>
                            <span class="count-subtitle">Apoderados Registrados</span>
                    </div>
                    </div>
                    <div class="col-lg-3 count-container">
                        <div class="count-inside" id="count-container-4">
                        <i class="fa fa-camera-retro"></i>
                            <span class="count-number"> 700 </span>
                      <span class="count-subtitle">Fotografias Publicadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('aside2')
    @include('cms.admin.right-side')
@endsection