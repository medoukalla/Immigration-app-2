<x-en.head title="{{ setting('site.title') . ' - ' . 'Estudiar en España sin Selectividad' }}" />

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

                <a href="javascript:void(0)">Estudiar en España sin Selectividad
                </a>

            </p>
            <h2 class="text-center">Estudiar en España sin Selectividad</h2>
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
                            <img src="{{ asset('img/img2.png') }}" alt="img" class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/StudyIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>Estudiar en España sin Selectividad</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText">
                            <p>La Fase Extrajeros de Andalucía es una opción para estudiantes marroquíes que desean
                                continuar sus estudios universitarios en España. A diferencia de otros estudiantes
                                extranjeros, los estudiantes marroquíes pueden presentar su solicitud sin tener que
                                aprobar la Selectividad, el examen de ingreso común para acceder a la universidad en
                                España.
                                Sin embargo, hay ciertas condiciones que deben cumplirse para poder participar en la
                                Fase Extrajeros. El diploma de bachillerato debe haber sido obtenido en los últimos dos
                                años antes de la inscripción y los estudiantes deben tener la homologación de su diploma
                                de bachillerato emitida por el Ministerio de Educación Nacional y Formación Profesional
                                de Marruecos. Participar en la Fase Extrajeros puede ser una excelente opción para los
                                estudiantes marroquíes que buscan continuar sus estudios universitarios en España, ya
                                que les permite presentar solicitudes en varias universidades sin tener que aprobar la
                                Selectividad y también evitar los costos de la Selectividad.</p>
                        </div>
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
