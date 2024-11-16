<x-en.head title="{{ setting('site.title') . ' - ' . 'Estudiar en España' }}" />


<div class="wrapper bg-dark">

    <x-en.header_menu />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="{{ route('frontend.sp.index') }}">Servicios</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Estudiar en España
                </a>


            </p>
            <h2 class="text-center">¿Qué puedo estudiar en España?</h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->

<!-- main start  -->
<main>
    <div class="Besoin">
        <div class="container">
            <!-- .row start  -->
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-7">
                    <div class="itemLeft">
                        <!-- en espagne start  -->
                        <div class="enEspagne">
                            <img src="{{ asset('img/img05.png') }}" alt="img" class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/StudyIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>¿Qué puedo <br> estudiar en España?</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText">

                            <p>En España, los estudiantes marroquíes tienen acceso a una oferta académica variada, que
                                incluye no solo programas universitarios de licenciatura y maestría, sino también
                                programas de formación profesional (grado superior) y programas preparatorios para la
                                universidad (selectividad). Además, estudiar en España también ofrece la oportunidad de
                                aprender el idioma español, una habilidad muy buscada en el mercado laboral
                                internacional.</p>
                            <p>Los estudiantes marroquíes pueden optar por estudiar español en una escuela de idiomas
                                especializada, para adquirir las habilidades lingüísticas necesarias para comunicarse
                                efectivamente con los locales, así como para mejorar sus perspectivas profesionales en
                                España y otros países de habla hispana.</p>
                            <p>Para aquellos que deseen seguir estudios universitarios, España ofrece una variedad de
                                programas universitarios de licenciatura y maestría, en áreas como derecho, economía,
                                ingeniería, ciencias humanas, tecnología de la información, salud, ciencias sociales y
                                mucho más. Los estudiantes marroquíes también pueden realizar una formación profesional
                                (grado superior) para adquirir habilidades especializadas en un campo profesional
                                específico, lo que puede abrirles muchas puertas para su futura carrera.</p>
                            <p>Por último, los estudiantes marroquíes pueden seguir un año preparatorio (selectividad)
                                para acceder a la universidad española. Este año preparatorio les permite prepararse
                                para los exámenes de ingreso a la universidad española, así como perfeccionar su dominio
                                del idioma español.</p>
                            <p>En resumen, estudiar en España ofrece a los estudiantes marroquíes una variedad de
                                opciones académicas, así como la oportunidad de aprender español y sumergirse en la
                                cultura española.</p>


                        </div>
                        <!-- espagne start  -->
                        <div class="espagneWrapp">
                            <!-- row start  -->
                            <div class="row">
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg1">
                                        <a href="{{ url('page/Estudiar-en-Espana-sin-Selectividad') }}">
                                            <h4>Estudiar en España sin Selectividad</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg2">
                                        <a href="{{ url('page/estudiar-selectividad-en-espana') }}">
                                            <h4>Estudiar la Selectividad en España</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg3">
                                        <a href="{{ url('page/estudiar-el-idioma-en-espana') }}">
                                            <h4>Estudiar el idioma en España</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg4">
                                        <a href="{{ url('page/estudiar-la-licenciatura-en-espana') }}">
                                            <h4>Estudiar la licenciatura en España</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg5">
                                        <a href="{{ url('page/estudiar-el-grado-superior-en-espana') }}">
                                            <h4>Formación profesional (Grado superior)</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->

                            </div>
                            <!-- row end -->
                        </div>
                        <!-- espagne end -->
                        <!-- Intéressé par start  -->
                        <div class="interessePar">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="itemleftD align-self-center">
                                    <img src="{{ asset('img/img3.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="itemRightD align-self-center">
                                    <h2>¿Interesado en
                                        una <span>visa de estudiante?</span></h2>
                                    <p>Reserve su consulta en línea de forma gratuita
                                    </p>
                                    <a href="{{ route('frontend.sp.index') . '#consulting' }}">Reserve su consulta</a>
                                </div>
                            </div>
                        </div>
                        <!-- Intéressé par end  -->
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>¿Necesidad de ayuda?</h2>
                        <h4>Contacto</h4>
                        <p><strong>Chat en Línea:</strong> El tiempo de espera promedio es de 3 minutos.</p>
                        <p><strong>Solicitud de llamada:</strong> Disponible solo con cita previa.</p>
                        <p><strong>Redes sociales:</strong> El tiempo de espera promedio es de 15 minutos.</p>

                        <x-links_sp_area />

                    </div>


                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->

<x-en.footer />
