@extends('layout')
@section('article')


     <h1 class= "title" id="title-mi-jardin">Mi jardín</h1>
     <h2 class="principal-title cursive-title">Reseña histórica del jardín</h2>
     <p>
         La Sala Cuna y Escuela de Párvulos “Papelucho”, se gestó el año 1988 basado en el interés de dos profesionales Educadoras de Párvulos que formaron sociedad y se instalaron en forma independiente, con la especial motivación de otorgar una educación integral a lactantes y párvulos, y proporcionar además un servicio a madres trabajadoras.     </p>
     <p>
         Esta Institución cuenta con más de dos décadas de experiencia en la educación de párvulos la que es reconocida por el Ministerio de Educación como Colaboradora de la Función Educacional del Estado y con la Autorización Normativa otorgada por la Junta Nacional de Jardines Infantiles. A partir del año 2009 se expande y cuenta con 2 establecimientos educacionales, para lactantes y párvulos  los que están distribuidos en ambas sedes, en dos jornadas y en los niveles: Sala Cuna, Medio Menor y Medio Mayor.
     </p>


     <ul class="two-borders-box">
         <li>
             <h2><span class="cursive-title">Misión</span></h2>
             <p>
                 La misión de Sala Cuna y Escuela de Párvulos “Papelucho”, es ser una institución particular pagada de la ciudad de Antofagasta, que imparte educación parvularia de calidad a niños y niñas desde los 3 meses a los 4 años 11 meses de edad, en un ambiente cálido, familiar, participativo y de respeto, con una base sólida de valores universales, que los prepara para enfrentar con éxito los desafíos que el futuro les depare bajo nuestro lema “Educar para ser feliz”.

             </p>
             <p>
                 La misión de la Sala Cuna y Escuela de Párvulos “Papelucho”, es ser una Institución particular pagada de la ciudad de Antofagasta, que imparte educación parvularia de calidad a niños y niñas desde los 3 meses a los 3 años 11 meses de edad, en un ambiente lúdico, significativo, integrador, cálido, familiar, participativo y de respeto, con una base sólida de valores universales, que los prepara para enfrentar con éxito los desafíos que el futuro les depare bajo nuestro lema “Educar para ser Feliz”
             </p>
             <p>
                 Teniendo fe y creyendo en el ser humano como una persona en constante crecimiento espiritual, afectivo, cognitivo y social. Nuestro compromiso es estimular a los niños y niñas  a crecer íntegros y felices.
             </p>
         </li>
         <li>
             <h2><span class="cursive-title">Visión</span></h2>
             <p>
                 Ser la Sala Cuna y Escuela de Párvulos de Antofagasta, que desarrolle en sus niños(as) aprendizajes significativos e integradores a través de experiencias lúdicas, en un ambiente afectivo, que incorpore a la familia en el proceso educativo.

             </p>
         </li>

         <li class="li-completa">
             <h2><span class="cursive-title">Que ofrecemos</span></h2>
             <p>
             <ul>
                 <li>Educación Integral, en un ambiente de afecto, confianza, atención y cuidado.</li>
                 <li>Personal idóneo formado por educadoras de párvulos, asistentes de párvulos, profesora de inglés, nutricionista, manipuladora de alimentos, auxiliares de servicio, personal administrativo. Con años de experiencias para guiar a sus hijos en el complejo mundo infantil.</li>
                 <li>Una infraestructura segura y atractiva construida especialmente para sus hijos bajo normas de JUNJI y MINEDUC.</li>
                 <li>Convenio con REST 911 para atención médica de urgencia al interior del establecimiento.</li>
                 <li>Integración y participación de los padres en el programa educativo.</li>
                 <li>Programa recreativo en los meses de verano para párvulos de 2 a 4 años.</li>
                 <li>Atención Sala Cuna durante todo el año. (según calendarización)</li>

             </ul>
             </p>
         </li>
     </ul>

@stop

@section('aside')
    <div id="cuerdas">{!!Html::image('images/cuerdas.png')!!}</div>
    <h3 class="side-section-title">Objetivos Papelucho</h3>

    <ol class="objetives-box">
        <li><span class="objetives-item">Impartir una enseñanza de calidad basada en la idoneidad de los profesionales, fundamentándose en los Principios de la Educación Parvularia desde los Niveles Sala Cuna hasta Medio Superior, desarrollando una labor pedagógica en constante innovación, promoviendo aprendizajes significativos a través de experiencias lúdicas y acorde con lo que acontece en el mundo actual.</span> </li>
        <li><span class="objetives-item">Favorecer el desarrollo afectivo del Párvulo, como punto de partida para su crecimiento como persona integrada, en un ambiente que le facilita el descubrimiento e internalización de valores, conocimientos, habilidades y aptitudes. </span> </li>
        <li><span class="objetives-item">Favorecer la integración y participación activa de la familia como agentes comprometidos en la labor educativa. </span> </li>
        <li><span class="objetives-item">Desarrollar progresivamente una valoración positiva de sí mismo y de los demás, mediante la inclusión y aceptación de niños y niñas con Necesidades Educativas Especiales, Etnias y diversas culturas, basada en el reconocimiento de sus derechos y aceptación de su género.</span> </li>
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