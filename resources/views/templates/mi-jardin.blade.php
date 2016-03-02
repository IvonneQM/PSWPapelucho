@extends('templates.layout')
@section('article')


     <h1 class= "title" id="title-mi-jardin">Mi jardín</h1>
     <h2>Reseña histórica del jardín</h2>
     <p class="content">
         La Sala Cuna y Escuela de Párvulos “Papelucho”, se gestó el año 1988 basado en el interés de dos profesionales Educadoras de Párvulos que formaron sociedad y se instalaron en forma independiente con una Sala Cuna y Escuela de Párvulos, con la especial motivación de otorgar una educación integral a lactantes y párvulos, y proporcionar además un servicio a madres trabajadoras.     </p>
     <p class="content">
         Esta Institución cuenta con más de dos décadas de experiencia en la educación de párvulos la que es reconocida por el Ministerio de Educación como Colaboradora de la Función Educacional del Estado y empadronada por la Junta Nacional de Jardines Infantiles. A partir del año 2009 se expande y cuenta con 2 establecimientos educacionales, alcanzando en la actualidad una matrícula aproximada de 175 párvulos, los que están distribuidos en ambas sedes, dos jornadas y en los niveles: Sala Cuna, Medio Menor, Medio Mayor y Transición Menor.
     </p>


     <ul class="two-borders-box">
         <li>
             <h2><span class="cursive-title">Misión</span></h2>
             <p class="content">
                 La misión de Sala Cuna y Escuela de Párvulos “Papelucho”, es ser una institución particular pagada de la ciudad de Antofagasta, que imparte educación parvularia de calidad a niños y niñas desde los 3 meses a los 4 años 11 meses de edad, en un ambiente cálido, familiar, participativo y de respeto, con una base sólida de valores universales, que los prepara para enfrentar con éxito los desafíos que el futuro les depare bajo nuestro lema “Educar para ser feliz”.

             </p>
             <p class="content">
                 Teniendo fe y creyendo en el ser humano como una persona en constante crecimiento espiritual, afectivo, cognitivo y social. Nuestro compromiso es estimular a los niños y niñas a crecer íntegros y felices, enseñándoles a ellos(as) el valor trascendente que tiene la afectividad sobre el ser humano, siendo esta la base donde se cimentarán sus relaciones interpersonales, aprendizajes, intereses, atención y motivación intrínseca hacia el querer aprender y querer ser mejor de lo que somos. Visión

             </p>
         </li>
         <li>
             <h2><span class="cursive-title">Visión</span></h2>
             <p class="content">
                 Ser la Sala Cuna y Escuela de Párvulos de Antofagasta que desarrolle principios pedagógicos y humanistas en niños y niñas menores de 5 años.

             </p>
         </li>
     </ul>

@stop

@section('aside')
    <div id="cuerdas">{!!Html::image('images/cuerdas.png')!!}</div>
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