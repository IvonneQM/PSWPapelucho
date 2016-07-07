@extends('layout')
@section('meta')
    {!!Html::script('js/collapse.js')!!}
@stop
@section('page-title')
    Mi Jardin
@stop

@section('article')
    <h1 class="title" id="title-blumell">Papelucho Blumell</h1>
    <div class="accordion" id="accordion">
        <div>
            <div class="accordion-item-title"><a>Síntesis metodológica</a><i class="fa fa-chevron-down"></i></div>
            <div class="accordion-item-content">
                <p class="content">El trabajo pedagógico, tanto en la Escuela de Párvulos como en la Sala Cuna, se
                    desarrolla de acuerdo
                    a las nuevas bases curriculares de la Educación Parvularia, complementadas con la utilización de los
                    Mapas de Progresos sugeridos por MINEDUC. El trabajo pedagógico, tanto en la Escuela de Párvulos
                    como en la Sala Cuna, se desarrolla de acuerdo a las nuevas bases curriculares de la Educación
                    Parvularia, complementadas con la utilización de los Mapas de Progresos sugeridos por MINEDUC. </p>
                <p class="content">
                <p class="content">Con el fin de favorecer una educación integral de los niños(as) se realizan
                    actividades como:</p>

                <p class="content">
                    Juego de Rincones puertas abiertas</br>
                    Visitas pedagógicas en la comunidad</br>
                    Iniciación a un segundo idioma (Inglés) Nivel Medio Superior</br>
                    Talleres pedagógicos. Niveles Medios (Jornada Tarde)</br>
                </p>

                <h3><span class="cursive-title">Horario de Funcionamiento</span></h3>
                <p class="content">La Sala Cuna funciona durante todo el año (según calendarización)</p>
                <p class="content">La Escuela de Párvulos se rige por calendario escolar, considerando 40 semanas de
                    clases,
                    distribuidas desde Marzo a Diciembre, en la cual hay dos periodos de vacaciones, Julio y Septiembre
                    (una semana cada mes).</p>


                <ul class="two-borders-box">
                    <li>
                        <h4><span class="cursive-title">Sala Cuna</span></h4>
                        <p class="content">
                            08:00 a 13:00 hrs. Jornada Mañana.<br>
                            14:30 a 18:45 hrs. Jornada Tarde.<br>
                            08:00 a 18:45 hrs. Jornada Completa.
                        </p>
                    </li>
                    <li>
                        <h4><span class="cursive-title">Escuela de Párvulos</span></h4>
                        <p class="content">
                            08:30 a 12:30 Jornada Mañana.<br>
                            14:30 a 18:30 Jornada Tarde.<br>
                            08:30 a 18:30 Jornada Completa.
                        </p>
                    </li>
                </ul>
                <p class="content">Un día a la semana, la salida es a las 18:00 hrs. (Reunión técnica)</p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Sala cuna lactante menor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <h4>Descripción</h4>

                <p>Este nivel atiende a lactantes desde 84 días a 12 meses, los cuales son atendidos por una Educadora y
                    dos Asistentes de Párvulos quienes velan por el bienestar de los pequeños y propician su desarrollo
                    integral a través de variadas situaciones de aprendizaje. </p>
                <h4>Objetivos</h4>

                <p>Generar un ambiente cálido, adecuado y de entrega pedagógica, para lograr en los lactantes un
                    desarrollo óptimo en todos los ámbitos de aprendizajes, siendo a la vez un aporte a las madres que
                    trabajan.</p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Sala cuna lactante mayor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <h4>Descripción</h4>
                <p>Este nivel se compone por lactantes de 12 a 24 meses de edad y es atendido por una Educadora y dos
                    Asistentes de Párvulos. Este grupo se caracteriza por adquirir progresivamente mayor seguridad y
                    autonomía en lo que realizan, mostrándose más sociables y con confianza en sí mismos. </p>
                <h4>Objetivos</h4>
                <p>Potenciar y desarrollar en el niño(a) progresiva y gradualmente todos los ámbitos del
                    aprendizaje.</p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Medio menor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <h4>Descripción</h4>
                <p>Este Nivel se compone de dos grupos que funcionan en ambas jornadas y atiende a párvulos entre los 2
                    y 2 años 11 meses, los cuales son atendidos por una Educadora y dos Asistentes de Párvulos en cada
                    Nivel. </p>
                <h4>Objetivos</h4>
                <p>Propicia un desarrollo integral a través de diversos aprendizajes significativos que se plantean en
                    forma equilibrada según intereses y necesidades de los párvulos, dando especial énfasis a los
                    ámbitos de comunicación y formación personal y social.</p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Medio mayor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <h4>Descripción</h4>
                <p>El nivel atiende a niños(as), cuyas edades fluctúan entre los 3 y 3 años 11 meses. Está a cargo de
                    una Educadora y una Asistente de Párvulos. </p>
                <h4>Objetivos</h4>
                <p>Adquirir gradualmente una autonomía que le permita un desarrollo integral en los ámbitos de:
                    formación personal y social, comunicación, relación con el medio natural, social y cultural,
                    propiciando un clima de confianza seguridad y afectividad.</p>
            </div>
        </div>

    </div>
    <div class="galery-container li-completa two-borders-box">
        <h1 class="cursive-title">Galerías</h1>

        @include(('galerias.galeriasBlumell'))
    </div>
@stop
@section('aside')
    <div id="cuerdas">
        {!!Html::image('images/cuerdas.png')!!}
    </div>
    <h3 class="side-section-title">Contáctenos</h3>

    {!! Form::open(array('url' => url('foo/bar'), 'class'=>'contact-form')) !!}
    <div class="form-group col-md-4">
        {{--{!! Form::label('name', 'Nombre:') !!}--}}
        {!! Form::text('name', null , array('placeholder' => 'Nombre', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {{--{!! Form::label('email', 'Email:') !!}--}}
        {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {{--}{!! Form::label('phone', 'Teléfono:') !!}--}}
        {!! Form::text('phone', null, array('placeholder' => 'Teléfono', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {{-- {!! Form::label('message', 'Mensaje:') !!}--}}
        {!! Form::textarea('message', null, array('placeholder' => 'Mensaje', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::submit('Enviar', ['class' => 'button', 'id'=>'contact-button'])!!}
    </div>

    {!! Form::close() !!}
@stop
@section('meta-footer')

    {!! Html::script('js/contacto.js') !!}
@endsection