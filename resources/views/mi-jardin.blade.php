@extends('layout')
@section('article')


    <h1 class="title" id="title-mi-jardin">Mi jardín</h1>
    <h2 class="principal-title cursive-title">Reseña histórica</h2>
    <p>
        La Sala Cuna y Escuela de Párvulos “Papelucho”, se gestó el año 1988 basado en el interés de dos profesionales
        Educadoras de Párvulos que formaron sociedad y se instalaron en forma independiente, con la especial motivación
        de otorgar una educación integral a lactantes y párvulos, y proporcionando un servicio a madres
        trabajadoras. </p>
    <p>
        Esta Institución cuenta con más de dos décadas de experiencia en la educación de párvulos la que es reconocida
        por el Ministerio de Educación como Colaboradora de la Función Educacional del Estado y con la Autorización
        Normativa otorgada por la Junta Nacional de Jardines Infantiles (Sede Las Colonias). A partir del año 2009 se
        expande y cuenta con 2 establecimientos educacionales, que atienden en dos jornadas y en los niveles: Sala Cuna,
        Medio Menor y Medio Mayor.
    </p>
    <div class="image-container col-lg-6 col-md-6 col-xs-6 ">
        <div class="accordion-container-img">
            {!!Html::image('images/estaticas/4untitled.png','jardin blumell', array('id'=>'jardin-blumell'))!!}
        </div>
    </div>
    <div class=" image-container col-lg-6 col-md-6 col-xs-6 ">
        <div class="accordion-container-img">
            {!!Html::image('images/estaticas/lascolonias.png','jardin las colonias',array('id'=>'fachada-colonias'))!!}
        </div>
    </div>
    <div>
        <ul id="miJardinTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"
                                                      class="tab-title">Nuestra
                    Institución</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" class="tab-title">Síntesis
                    Metodológica</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane panel-option active" id="tab1">
                <ul class="two-borders-box">
                    <li>
                        <h2><span class="cursive-title">Misión</span></h2>
                        <p>
                            La misión de la Sala Cuna y Escuela de Párvulos “Papelucho”, es ser una Institución
                            particular pagada de la ciudad de Antofagasta, que imparte educación parvularia de calidad a
                            niños y niñas desde los 3 meses a los 3 años 11 meses de edad, en un ambiente lúdico,
                            significativo, integrador, cálido, familiar, participativo y de respeto, con una base sólida
                            de valores universales, que los prepara para enfrentar con éxito los desafíos que el futuro
                            les depare bajo nuestro lema “Educar para ser Feliz”
                        </p>
                        <p>
                            Teniendo fe y creyendo en el ser humano como una persona en constante crecimiento
                            espiritual, afectivo, cognitivo y social. Nuestro compromiso es estimular a los niños y
                            niñas a crecer íntegros y felices.
                        </p>
                    </li>
                    <li class="float">
                        <h2><span class="cursive-title">Visión</span></h2>
                        <p>
                            Ser la Sala Cuna y Escuela de Párvulos de Antofagasta, que desarrolle en sus niños(as)
                            aprendizajes significativos e integradores a través de experiencias lúdicas, en un ambiente
                            afectivo, que incorpore a la familia en el proceso educativo.

                        </p>
                    </li>

                    <li class="li-completa">
                        <h2><span class="cursive-title">Que ofrecemos</span></h2>
                        <p>
                        <ul>
                            <li class="li-vineta">Educación Integral, en un ambiente de afecto, confianza, atención y
                                cuidado.
                            </li>
                            <li class="li-vineta">Personal idóneo formado por educadoras de párvulos, asistentes de
                                párvulos, profesora de
                                inglés, nutricionista, manipuladora de alimentos, auxiliares de servicio, personal
                                administrativo. Con años de experiencias para guiar a sus hijos en el complejo mundo
                                infantil.
                            </li>
                            <li class="li-vineta">Una infraestructura segura y atractiva construida especialmente para
                                sus hijos bajo
                                normas de JUNJI y MINEDUC.
                            </li>
                            <li class="li-vineta">Convenio con REST 911 para atención médica de urgencia al interior del
                                establecimiento.
                            </li>
                            <li class="li-vineta">Integración y participación de los padres en el programa educativo.
                            </li>
                            <li class="li-vineta">Programa recreativo en los meses de verano para párvulos de 2 a 4
                                años.
                            </li>
                            <li class="li-vineta">Atención Sala Cuna durante todo el año. (según calendarización)</li>
                        </ul>
                        </p>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane panel-option" id="tab2">
                <ul class="two-borders-box">
                    <li class="li-completa">
                        <h2><span class="cursive-title">Síntesis Metodológica</span></h2>
                        <p>El trabajo pedagógico, tanto en la Escuela de Párvulos como en la Sala Cuna,
                            se desarrolla de acuerdo a las nuevas bases curriculares de la Educación Parvularia,
                            complementadas
                            con la utilización de los Mapas de Progresos sugeridos por MINEDUC. </p>

                        <p>Con el fin de favorecer una educación integral de los niños(as) se realizan
                            actividades como:</p>

                        <p>
                        <ul>
                            <li class="li-vineta"> Juego de Rincones puertas abiertas</li>
                            <li class="li-vineta">Visitas pedagógicas en la comunidad</li>
                            <li class="li-vineta">Iniciación a un segundo idioma (Inglés) Nivel Medio Superior</li>
                            <li class="li-vineta">Música en colores. Nivel Medio Superior</li>
                            <li class="li-vineta">Talleres pedagógicos. Niveles Medios (Jornada Tarde)</li>
                        </ul>

                        </p>
                    </li>
                    <li class="li-completa">
                        <h2><span class="cursive-title">Horario de Funcionamiento</span></h2>
                        <p>La Sala Cuna funciona durante todo el año (según calendarización).</p>
                        <p>La Escuela de Párvulos se rige por calendario escolar, considerando 40 semanas de
                            clases,
                            distribuidas desde Marzo a Diciembre, en la cual hay dos periodos de vacaciones, Julio y
                            Septiembre
                            (una semana cada mes).</p>
                        <div>
                            <ul class="two-borders-box">
                                <li class="inside-two-borders-box">
                                    <h4><span class="cursive-title">Sala Cuna</span></h4>
                                    <p class="horario">
                                        08:00 a 13:00 hrs. Jornada Mañana.<br>
                                        14:00 a 18:00 hrs. Jornada Tarde.<br>
                                        08:00 a 18:00 hrs. Jornada Completa.
                                    </p>
                                </li>
                                <li class="inside-two-borders-box">
                                    <h4><span class="cursive-title">Escuela de Párvulos</span></h4>
                                    <p class="horario">
                                        08:00 a 12:30 Jornada Mañana.<br>
                                        14:00 a 18:00 Jornada Tarde.<br>
                                        08:00 a 18:00 Jornada Completa.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@stop

@section('aside')
    <div id="cuerdas">{!!Html::image('images/cuerdas.png')!!}</div>
    <h3 class="side-section-title">Objetivos Papelucho</h3>

    <ol class="objetives-box">
        <li><span class="objetives-item">Impartir una enseñanza de calidad basada en la idoneidad de los profesionales, fundamentándose en los Principios de la Educación Parvularia desde los Niveles Sala Cuna hasta Medio Superior, desarrollando una labor pedagógica en constante innovación, promoviendo aprendizajes significativos a través de experiencias lúdicas y acorde con lo que acontece en el mundo actual.</span>
        </li>
        <li><span class="objetives-item">Favorecer el desarrollo afectivo del Párvulo, como punto de partida para su crecimiento como persona integrada, en un ambiente que le facilita el descubrimiento e internalización de valores, conocimientos, habilidades y aptitudes. </span>
        </li>
        <li><span class="objetives-item">Favorecer la integración y participación activa de la familia como agentes comprometidos en la labor educativa. </span>
        </li>
        <li><span class="objetives-item">Desarrollar progresivamente una valoración positiva de sí mismo y de los demás, mediante la inclusión y aceptación de niños y niñas con Necesidades Educativas Especiales, Etnias y diversas culturas, basada en el reconocimiento de sus derechos y aceptación de su género.</span>
        </li>
    </ol>
@stop

@section('meta-footer')
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/miJardinTabs.js')!!}
@endsection
