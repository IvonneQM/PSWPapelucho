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
@section('general-content-1')
<h1>Vista Dueños</h1>

    {{-- {!! $vehiculos -> render() !!} --}}
@stop