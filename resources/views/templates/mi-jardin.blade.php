@extends('templates.layout')
@section('page-title')
    Mi Jardin
@stop

@section('article')


     <h2 id="title">Mi jardín</h2>
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
    <h3 id="news-section-title">Objetivos Papelucho</h3>

    <ol class="objetives-box">
        <li><span class="objetives-item">Impartir una enseñanza de calidad basada en la idoneidad de los profesionales, fundamentada en los
                Principios y Bases Curriculares de la Educación Parvularia desde el Nivel Sala Cuna hasta el Nivel
                Transición Menor, propiciando una labor pedagógica en constante innovación y acorde con lo que acontece en el mundo actual.</span> </li>
        <li><span class="objetives-item">Favorecer el desarrollo afectivo del Párvulo, como punto de partida para su crecimiento como persona
                integrada en un ambiente que facilita el descubrimiento e internalización de valores y conocimientos. </span> </li>
        <li><span class="objetives-item">Desarrollar progresivamente una valoración positiva de sí mismo y de los demás, mediante la integración
                y aceptación de niños y niñas con Necesidades Educativas Especiales, Etnias y diversas culturas, basada
                en el reconocimiento de sus derechos y aceptación de su género. </span> </li>
        <li><span class="objetives-item">Favorecer la integración y participación activa de la familia como agentes colaboradores de la labor educativa.</span> </li>


    </ol>

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