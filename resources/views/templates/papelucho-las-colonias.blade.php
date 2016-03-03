@extends('templates.layout')
@section('meta')
    {!!Html::script('js/collapse.js')!!}
@stop
@section('page-title')
    Papelucho Las Colonias
@stop

@section('article')

    <h1 class= "title" id="title-las-colonias">Papelucho Las Colonias</h1>

    <div class="accordion" id="accordion">
        <div>
            <div class="accordion-item-title"><a>Síntesis metodológica</a><i class="fa fa-chevron-down"></i></div>
            <div class="accordion-item-content">
                <p>El trabajo pedagógico, tanto en la Escuela de Párvulos como en la Sala Cuna, se desarrolla de acuerdo a las nuevas bases curriculares de la Educación Parvularia, complementadas con la utilización de los Mapas de Progresos sugeridos por MINEDUC.</p>
                <p>Con el fin de favorecer una educación integral de los niños(as) se realizan actividades como:</p>
                <ol>
                    <li> Juego de Rincones puertas abiertas </li>
                    <li>Visitas pedagógicas en la comunidad</li>
                    <li>Iniciación a un segundo idioma (Inglés) Nivel Medio Superior y Transición</li>
                    <li>Informática Educativa Nivel Transición</li>
                    <li>Música en colores Nivel Transición</li>
                </ol>
                <h3>Horario de Funcionamiento</h3>
                <p>La Sala Cuna funciona durante todo el año (según calendarización)</p>
                <p>La Escuela de Párvulos se rige por calendario escolar, considerando 40 semanas de clases, distribuidas desde Marzo a Diciembre, en la cual hay dos periodos de vacaciones, Julio y Septiembre (una semana cada mes).</p>
                <h4>Horario de Funcionamiento Sala Cuna</h4>
                <p>
                    08:00 a 13:00 hrs. Jornada Mañana.<br>
                    14:30 a 18:45 hrs. Jornada Tarde.<br>
                    08:00 a 18:45 hrs. Jornada Completa.
                </p>
                <h4>Horario de Funcionamiento Escuela de Párvulos</h4>
                <p>
                    08:30 a 12:30 Jornada Mañana.<br>
                    14:30 a 18:30 Jornada Tarde.<br>
                    08:30 a 18:30 Jornada Completa.
                </p>
                <p>Un día a la semana, la salida es a las 18:00 hrs. (Reunión técnica)</p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Sala cuna lactante menor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <p>
                    Descripción

                    Este nivel atiende a lactantes desde 84 días a 12 meses, los cuales son atendidos por una Educadora y dos Asistentes de Párvulos quienes velan por el bienestar de los pequeños y propician su desarrollo integral a través de variadas situaciones de aprendizaje.

                    Objetivos

                    Generar un ambiente cálido, adecuado y de entrega pedagógica, para lograr en los lactantes un desarrollo óptimo en todos los ámbitos de aprendizajes, siendo a la vez un aporte a las madres que trabajan.             </p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Sala cuna lactante mayor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
                </p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Medio menor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
                </p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Medio mayor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
                </p>
            </div>
        </div>
        <div>
            <div class="accordion-item-title">
                <a>Transición menor</a><i class="fa fa-chevron-down"></i>
            </div>
            <div class="accordion-item-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
                </p>
            </div>
        </div>
    </div>





    <!--<p class="content">
        Estimados Padres y Apoderados:
    </p>
    <p class="content">
        Les damos la más cordial bienvenida a cada uno de ustedes, invitándoles a conocer el proyecto educativo de la Sala Cuna y Escuela de Párvulos “PAPELUCHO”, e instándoles a participar en la labor pedagógica que desarrollamos con mucho cariño y vocación con sus hijos(as).
    </p>
    <p class="content">
        Agradecemos en forma especial la confianza de aquellos apoderados que nos han acompañado estos últimos años, como también aquellos Padres que actualmente se han integrado a esta gran familia educativa.
    </p>
    <p class="content">
        Con especial afecto, les saludan.
    </p>
    <ul class="dir-box">
        <li>
            <span class="dir-name">Claudia Concha Gamboa</span>
            Educadora de Párvulos<br>
            Directora Sede Las Colonias
        </li>
        <li>
            <span class="dir-name">Carla Aguayo Picón</span>
            Educadora de Párvulos<br>
            Directora Sede Blumell
        </li>
    </ul>
    -->
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


            <!-- <ul class="news-box">
         <li >
             <p class="news-first-line">
                 <span class="news-title">Titulo 1</span>
                 <span class="news-date">02-03-16</span>
             </p>
             <p class="news-second-line">
                 Aqui va el contenido de las noticias y bla bla bla
             </p>
         </li>
         <li >
             <p class="news-first-line">
                 <span class="news-title">Titulo 2</span>
                 <span class="news-date">05-04-16</span>
             </p>
             <p class="news-second-line">
                 Aqui va el contenido de las noticias y bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
             </p>
         </li>
     </ul>
     -->
@stop