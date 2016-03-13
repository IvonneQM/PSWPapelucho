@extends('cms.layout')

@section('meta')

    @stop

@section('general-content-1')

<div class="container">
    <div class="page-header">
        <div class="row">
            <div class="col-md-5">
                <h1>renderSections()</h1>
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary pull-right addImage" href="#" role="button">Agregar Imagen</a>
            </div>
        </div>
    </div>
        <div id="principalPanel">
            @section('contentPanel')

            @show
        </div>
    </div>

    @stop

