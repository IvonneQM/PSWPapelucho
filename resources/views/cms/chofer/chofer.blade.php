@extends('cms.layout')
@section('menu-mobile')
    @include('cms.chofer.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.chofer.menu-lateral')
        </ul>
    </nav>
@stop
