@extends('cms.layout')
@section('menu-mobile')
    @include('cms.dueno.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.dueno.menu-lateral')
        </ul>
    </nav>
@stop
