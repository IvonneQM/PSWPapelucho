@extends('cms.layout')

@section('meta')
    {{HTML::style('css/dropzone.css')}}
    {{HTML::script('js/dropzone.min.js')}}
@stop

@section('aside1')

    @include('cms.admin.menu-lateral')

@stop
@section('general-content-1')

    <form action="http://benkiatr.info/api/upload" method="POST" enctype="multipart/form-data"></form>

@stop
