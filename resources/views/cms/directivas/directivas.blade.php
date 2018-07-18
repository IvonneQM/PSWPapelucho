@extends('cms.layout')
@section('menu-mobile')
    @include('cms.directivas.menu-lateral')
@stop
@section('aside1')
    <nav id="sidebar-desktop">
        <ul>
            @include('cms.directivas.menu-lateral')
        </ul>
    </nav>
@stop
