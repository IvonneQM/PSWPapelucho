@extends('templates.layout')
@section('meta')
{!!Html::script('js/collapse.js')!!}
@stop
@section('page-title')
Papelucho Las Colonias
@stop

@section('article')


<h2 id="title-las-colonias">Papelucho Las Colonias</h2>

    <div class="accordion" id="accordion">
        <div>
        <div class="accordion-item-title">
          <a> Síntesis metodológica</a><i class="fa fa-chevron-up"></i>
        </div>
        <div class="accordion-item-content">
            <p>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
            </p>
        </div>
            </div>
        <div>
        <div class="accordion-item-title">
              <a>Sala cuna lactante menor</a><i class="fa fa-chevron-up"></i>
         </div>
         <div class="accordion-item-content">
           <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
            </p>
         </div>
            </div>
        <div>
        <div class="accordion-item-title">
            <a>Sala cuna lactante mayor</a><i class="fa fa-chevron-up"></i>
        </div>
        <div class="accordion-item-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
            </p>
        </div>
            </div>
        <div>
        <div class="accordion-item-title">
            <a>Medio menor</a><i class="fa fa-chevron-up"></i>
        </div>
        <div class="accordion-item-content">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
            </p>
        </div>
            </div>
        <div>
        <div class="accordion-item-title">
            <a>Medio mayor</a><i class="fa fa-chevron-up"></i>
        </div>
        <div class="accordion-item-content">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, explicabo illum ipsa iure magnam minus molestiae voluptates! Animi, assumenda beatae dolor expedita magnam molestiae molestias quisquam rem similique suscipit unde?
            </p>
        </div>
        </div>
        <div>
        <div class="accordion-item-title">
            <a>Transición menor</a><i class="fa fa-chevron-up"></i>
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
    <h3 id="news-section-title">Contáctenos</h3>

    {!! Form::open() !!}
    <div class="form-group col-md-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null , array('placeholder' => 'Nombre', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('phone', 'Teléfono:') !!}
        {!! Form::text('phone', null, array('placeholder' => 'Teléfono', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4">
    {!! Form::label('message', 'Mensaje:') !!}
    {!! Form::textarea('message', null, array('placeholder' => 'Mensaje', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group col-md-4"></div>
    {!! Form::submit('Enviar', ['class' => 'form-control']) !!}
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