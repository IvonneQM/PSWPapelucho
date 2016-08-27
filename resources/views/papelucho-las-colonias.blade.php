@extends('layout')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('page-title')
    Papelucho Las Colonias
@stop

@section('article')

    <h1 class="title" id="title-las-colonias">Papelucho Las Colonias</h1>
    <div class="panel-group accordion" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading accordion-item-title">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                       href="#lMenor">
                        Sala Cuna - Lactante Menor
                        <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
                </h4>
            </div>
            <div id="lMenor" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="accordion-container-img">
                        {!!Html::image('images/estaticas/IMG_4614.JPG','lactante menor blumell',array('id'=>'lactante-menor'))!!}
                    </div>
                    <h4 class="cursive-title">Descripción</h4>

                    <p>Este nivel atiende a lactantes desde 84 días a 12 meses, , los cuales están a cargo de Educadora y Asistente de
                        Párvulos, quienes velan por el bienestar de los pequeños y propician su desarrollo
                        integral a través de variadas situaciones de aprendizaje. </p>
                    <h4 class="cursive-title">Objetivos</h4>

                    <p> Generar un ambiente cálido, adecuado y de entrega pedagógica, para lograr en los
                        lactantes un
                        desarrollo óptimo en todos los ámbitos de aprendizajes, siendo a la vez un aporte a las madres que
                        trabajan.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading accordion-item-title">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                       href="#lMayor">
                        Sala Cuna - Lactante Mayor
                        <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
                </h4>
            </div>
            <div id="lMayor" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="accordion-container-img">
                        {!!Html::image('images/estaticas/Papelucho26.JPG','lactante menor blumell')!!}
                    </div>
                    <h4 class="cursive-title">Descripción</h4>
                    <p >El grupo está formado por lactantes de 12 a 24 meses de edad, los cuales están a cargo de Educadora y Asistente de
                        Párvulos. Este grupo se caracteriza por adquirir progresivamente mayor seguridad y
                        autonomía en lo que realizan, mostrándose más sociables y con confianza en sí mismos. </p>
                    <h4 class="cursive-title">Objetivos</h4>
                    <p>Potenciar y desarrollar en el niño(a) progresiva y gradualmente todos los ámbitos del
                        aprendizaje.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading accordion-item-title">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                       href="#mMenor">
                        Medio Menor
                        <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
                </h4>
            </div>
            <div id="mMenor" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="accordion-container-img">
                        {!!Html::image('images/estaticas/Papelucho18.JPG','medio menor blumell')!!}
                    </div>
                    <h4 class="cursive-title">Descripción</h4>
                    <p>Este Nivel atiende a párvulos entre los 2 años y 2 años 11 meses, , los cuales están a cargo de Educadora y Asistente de
                        Párvulos. </p>
                    <h4 class="cursive-title">Objetivos</h4>
                    <p>Propiciar un desarrollo integral a través de diversos aprendizajes significativos que
                        se plantean en
                        forma equilibrada según intereses y necesidades de los párvulos, dando especial énfasis a los
                        ámbitos de comunicación y formación personal y social.</p>
                </div>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-heading accordion-item-title">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                       href="#mMayor">
                        Medio Mayor
                        <i class="indicator glyphicon glyphicon-chevron-up  pull-right"></i></a>
                </h4>
            </div>
            <div id="mMayor" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="accordion-container-img">
                        {!!Html::image('images/estaticas/Papelucho10.JPG','medio superior blumell')!!}
                    </div>
                    <h4 class="cursive-title">Descripción</h4>
                    <p >Atiende a niños(as), cuyas edades fluctúan entre los 3 y 3 años 11 meses. Está a
                        cargo de una
                        Educadora y una Asistente de Párvulos. </p>
                    <h4 class="cursive-title">Objetivos</h4>
                    <p>Adquirir gradualmente una autonomía que le permita un desarrollo integral en los
                        ámbitos de:
                        Formación Personal y Social, Relación con el medio natural y cultural y Comunicación, propiciando un
                        clima de confianza seguridad y afectividad.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="galery-container">
        <h1 class="cursive-title">Galerías</h1>

        @include(('galerias.galeriasLasColonias'))
    </div>

@stop

@section('aside')
    <div id="cuerdas">
        {!!Html::image('images/cuerdas.png')!!}
    </div>
    <div class="contact-container">
        <h3 class="side-section-title">Contáctenos</h3>

        {!! Form::open(['route' => 'las-colonias-send', 'method' => 'POST','class'=>'contact-form','id'=>'formContact','role' => 'action','send']) !!}
        {!! csrf_field() !!}
        <div class="form-group">
            {{--{!! Form::label('name', 'Nombre:') !!}--}}
            {!! Form::text('name', null , ['placeholder' => 'Nombre', 'class' => 'form-control','id' => 'textName']) !!}
        </div>

        <div class="form-group ">
            {{--{!! Form::label('email', 'Email:') !!}--}}
            {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group ">
            {{--}{!! Form::label('phone', 'Teléfono:') !!}--}}
            {!! Form::text('phone', null, ['placeholder' => 'Teléfono', 'class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {{-- {!! Form::label('message', 'Mensaje:') !!}--}}
            {!! Form::textarea('msj', null, ['placeholder' => 'Mensaje', 'class' => 'form-control']) !!}

        </div>
        <div class="form-group ">
            {!! Form::submit('Enviar', ['class' => 'button', 'id'=>'contact-button'])!!}
        </div>
        {!! Form::close() !!}
    </div>
@stop

@section('meta-footer')
    {!! Html::script('js/contacto.js') !!}
    {!!Html::script('js/acordion.js')!!}
@endsection