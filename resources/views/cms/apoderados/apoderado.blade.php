@extends('cms.layout')
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