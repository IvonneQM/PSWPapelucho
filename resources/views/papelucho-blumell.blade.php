 @extends('layout')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('page-title')
    Papelucho Blumell
@stop
@section('article')
    <h1 class="title" id="title-las-colonias">Recorrido de sur a norte</h1>
    <div class="panel-body">
        <div class="accordion-container-img">
            {{--{!!Html::image('images/estaticas/IMG_4614.JPG','lactante menor blumell',array('id'=>'lactante-menor'))!!}--}}
            <h1>Mapa de recorrido</h1>
        </div>
        <h4 class="cursive-title">Recorrido</h4>
        <p>Direccion de sur a norte</p>
        <h4 class="cursive-title">Alternativas</h4>
        <p> Alternativas de recorrido</p>
    </div>
@stop
@section('aside')
    <div class="contact-container">
        <h3 class="side-section-title">Contáctenos</h3>
        {!! Form::open(['route' => 'blumell-send', 'method' => 'POST','class'=>'contact-form','id'=>'formContact','role' => 'action','send']) !!}
        {!! csrf_field() !!}
        <div class="form-group">
            {{--{!! Form::label('name', 'Nombre:') !!}--}}
            {!! Form::text('name', null , ['placeholder' => 'Nombre', 'class' => 'form-control','id' => 'textName']) !!}
        </div>
        <div class="form-group">
            {{--{!! Form::label('email', 'Email:') !!}--}}
            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{--}{!! Form::label('phone', 'Teléfono:') !!}--}}
            {!! Form::text('phone', null, ['placeholder' => 'Teléfono', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{-- {!! Form::label('message', 'Mensaje:') !!}--}}
            {!! Form::textarea('msj', null, ['placeholder' => 'Mensaje', 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Enviar', ['class' => 'button', 'id'=>'contact-button'])!!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
@section('meta-footer')
    {!! Html::script('js/contacto.js') !!}
    {!!Html::script('js/acordion.js')!!}
@endsection