@extends('cms.layout')

@section('meta')
    {!!Html::script('js/menu.js')!!}
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

    BIENVENIDO A TU PANEL DE CONTROL

@stop
