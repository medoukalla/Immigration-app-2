<x-en.head title="{{ setting('site.title') . ' - Quiénes somos ?' }}" />


<div class="wrapper bg-dark">

    <x-en.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center"><a href="{{ route('frontend.sp.index') }}">Inicio Quién</a> <img
                    src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid"> <a
                    href="javascript:void(0)">Quiénes somos ?</a>
            </p>
            <h2 class="text-center">Quiénes somos ?</h2>
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
                        <div class="itemLeftLogo">
                            <a href="">
                                <img src="{{ asset('img/logoBlack.svg') }}" alt="img" class="img-fluid">
                            </a>
                            <p>
                                <span>Immi World</span> es una agencia especializada en la asistencia de los magrebíes
                                que desean <strong>estudiar en España</strong>. Somos conscientes de que la preparación
                                de una
                                solicitud para estudiar en el extranjero puede ser una tarea tediosa y compleja. Por
                                esta razón,
                                nuestro equipo de expertos está aquí para ayudarlo a través de cada etapa del proceso,
                                desde la solicitud de admisión hasta la <strong>preparación de su solicitud de
                                    visado</strong> de estudiante.
                            </p>
                        </div>
                        <!-- Nos services start  -->
                        <div class="NosServices">
                            <h2>Nuestros servicios</h2>
                            <!-- row start  -->
                            <div class="row">
                                <!-- singel item start  -->
                                <div class="col-lg-6">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.38 26.35">
                                                <g id="Layer_1-2">
                                                    <path class="cls-1"
                                                        d="m32.33,5.68L21.52.93c-1.4-.62-2.87-.93-4.33-.93s-2.93.31-4.33.93L2.05,5.68c-2.75,1.21-2.72,6.15.05,7.3l2.54,1.05v5.46c0,1.56.73,3.74,4.19,5.3,2.22,1,5.18,1.55,8.34,1.55,6.04,0,12.53-2.14,12.53-6.85v-5.44l1.44-.6v4.71c0,.56.45,1.01,1.01,1.01s1.01-.45,1.01-1.01v-5.75c1.87-1.71,1.62-5.68-.81-6.75ZM2.01,9.35c0-.72.25-1.57.84-1.83L13.67,2.77c1.14-.5,2.32-.76,3.52-.76s2.38.25,3.52.76l10.81,4.75c.59.26.85,1.11.84,1.83,0,.71-.27,1.53-.85,1.77l-9.16,3.8c-1.67.69-3.41,1.05-5.16,1.05s-3.49-.35-5.16-1.05l-9.16-3.8c-.58-.24-.85-1.06-.85-1.77Zm25.67,10.15c0,3.14-5.42,4.84-10.52,4.84s-10.52-1.7-10.52-4.84v-4.63l4.61,1.91c1.93.8,3.93,1.2,5.93,1.2s4.01-.4,5.93-1.2l4.56-1.89v4.61Z" />
                                                </g>
                                            </svg>
                                            <a href="{{ url('page/estudiar-en-espana') }}">
                                                <div class="media-body">
                                                    <p class="mb-0">Estudiar en España</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->


                                <!-- singel item start  -->
                                <div class="col-lg-6  mt-3  mt-lg-0">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.35 38.49">

                                                <g id="Layer_1-2">
                                                    <path class="cls-1"
                                                        d="m30.35,8.71c0-2.4,0-5.12-4.35-6.22L10.25,0c-2.01,0-3.7,1.36-4.2,3.22-3.35.09-6.05,2.84-6.05,6.21v22.78c0,3.43,2.79,6.22,6.22,6.22l19.78.06c2.4,0,4.35-1.95,4.35-4.35V8.71ZM8.19,4.35c0-1.09.85-1.98,1.91-2.06l15.43,2.44c2.53.66,2.53,1.64,2.53,3.97v23.74c-.04,1.74-.58,3.69-2.78,3.69h-15.02c-.52,0-1.05-.16-1.43-.52s-.64-.9-.64-1.49V4.35Zm-5.9,27.86V9.43c0-2.06,1.59-3.75,3.61-3.91v28.62c0,.72.18,1.4.49,2h-.17c-2.17,0-3.93-1.76-3.93-3.93Z" />
                                                </g>
                                            </svg>
                                            <a href="{{ url('page/preparacion-de-expediente-de-visdao') }}">
                                                <div class="media-body">
                                                    <p class="mb-0">Preparación de documentos para visado</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->

                                <!-- singel item start  -->
                                <div class="col-lg-6  mt-3">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.75 29.1">

                                                <g id="Layer_1-2">
                                                    <path class="cls-1"
                                                        d="m24.08,7.27L15.31.8c-.72-.53-1.58-.8-2.43-.8s-1.71.27-2.43.8L1.67,7.27c-1.05.77-1.67,2-1.67,3.3v14.42c0,2.26,1.84,4.1,4.1,4.1h17.55c2.26,0,4.1-1.84,4.1-4.1v-14.42c0-1.3-.62-2.53-1.67-3.3Zm-.29,17.72c0,1.18-.96,2.15-2.15,2.15H4.1c-1.18,0-2.15-.96-2.15-2.15v-14.42c0-.68.33-1.32.87-1.73L11.6,2.37c.37-.27.81-.42,1.27-.42s.9.14,1.27.42l8.77,6.47c.55.4.87,1.05.87,1.73v14.42Z" />
                                                </g>
                                            </svg>
                                            <div class="media-body">
                                                <a href="{{ route('frontend.sp.logements') }}">
                                                    <p class="mb-0">Alojamiento</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->

                                <!-- singel item start  -->
                                <div class="col-lg-6  mt-3">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.35 32.85">

                                                <g id="Layer_1-2">
                                                    <path class="cls-1"
                                                        d="m25.52,0H4.83C2.16,0,0,2.16,0,4.83v8.56c0,6.84,3.25,13.28,8.76,17.34,1.91,1.41,4.16,2.11,6.42,2.11s4.51-.7,6.42-2.11c5.51-4.06,8.76-10.5,8.76-17.34V4.83c0-2.67-2.16-4.83-4.83-4.83Zm2.63,13.4c0,6.12-2.94,11.94-7.86,15.57-1.49,1.1-3.26,1.68-5.11,1.68s-3.62-.58-5.11-1.68c-4.92-3.63-7.86-9.45-7.86-15.57V4.83c0-1.45,1.18-2.63,2.63-2.63h20.69c1.45,0,2.63,1.18,2.63,2.63v8.56Z" />
                                                    <path class="cls-1"
                                                        d="m20.85,9.9l-7.35,7.35-4-4c-.43-.43-1.13-.43-1.56,0s-.43,1.13,0,1.56l4.78,4.78c.21.21.49.32.78.32s.57-.12.78-.32l8.13-8.13c.43-.43.43-1.13,0-1.56s-1.13-.43-1.56,0Z" />
                                                </g>
                                            </svg>
                                            <a href="{{ route('frontend.sp.assurance') }}">
                                                <div class="media-body">
                                                    <p class="mb-0">Seguro</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->


                                <!-- singel item start  -->
                                <div class="col-lg-6  mt-3">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.08 50.94">

                                                <g id="Layer_1-2">
                                                    <path class="cls "
                                                        d="m42.16,12.74L26.8,1.4c-1.27-.93-2.76-1.4-4.26-1.4s-2.99.47-4.26,1.4L2.92,12.74c-1.83,1.35-2.92,3.5-2.92,5.78v25.26c0,3.96,3.21,7.18,7.18,7.18h30.73c3.96,0,7.18-3.21,7.18-7.18v-25.26c0-2.28-1.08-4.42-2.92-5.78Zm-20.27,34.48c-2.46-2.96-5.1-9.66-5.1-12.14,0-3.18,1.8-6.61,5.75-6.61s5.75,3.43,5.75,6.61c0,2.48-2.64,9.18-5.1,12.14-.21.25-.47.3-.65.3s-.44-.05-.65-.3Zm19.77-3.45c0,2.07-1.68,3.76-3.76,3.76h-10.74c2.42-3.83,4.55-9.56,4.55-12.45,0-5.54-3.63-10.03-9.17-10.03s-9.17,4.49-9.17,10.03c0,2.89,2.12,8.62,4.55,12.45H7.18c-2.07,0-3.76-1.68-3.76-3.76v-25.26c0-1.19.57-2.32,1.53-3.02l15.36-11.33c.65-.48,1.42-.73,2.23-.73s1.58.25,2.23.73l15.36,11.33c.96.7,1.53,1.83,1.53,3.02v25.26Z" />
                                                </g>
                                            </svg>
                                            <a href="{{ url('page/residencia-no-lucrativa') }}">
                                                <div class="media-body">
                                                    <p class="mb-0">Residencia no lucrativa</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->


                                <!-- singel item start  -->
                                <div class="col-lg-6  mt-3">
                                    <div class="item">
                                        <div class="media">
                                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.7 50.94">

                                                <g id="Layer_1-2">
                                                    <path class="cls "
                                                        d="m60.12,0H9.58C4.29,0,0,4.29,0,9.58v31.79c0,5.29,4.29,9.58,9.58,9.58h50.54c5.29,0,9.58-4.29,9.58-9.58V9.58c0-5.29-4.29-9.58-9.58-9.58Zm6.16,41.37c0,3.4-2.76,6.16-6.16,6.16H9.58c-3.4,0-6.16-2.76-6.16-6.16V9.58c0-3.4,2.76-6.16,6.16-6.16h50.54c3.4,0,6.16,2.76,6.16,6.16v31.79Z" />
                                                    <path class="cls"
                                                        d="m57.03,32.16h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                                    <path class="cls"
                                                        d="m57.03,23.76h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                                    <path class="cls"
                                                        d="m57.03,15.36h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                                    <path class="cls"
                                                        d="m26.07,15.36h-11.14c-2.19,0-3.97,1.78-3.97,3.97v12.27c0,2.19,1.78,3.97,3.97,3.97h11.14c2.19,0,3.97-1.78,3.97-3.97v-12.27c0-2.19-1.78-3.97-3.97-3.97Zm.55,16.24c0,.3-.25.55-.55.55h-11.14c-.3,0-.55-.25-.55-.55v-12.27c0-.3.25-.55.55-.55h11.14c.3,0,.55.25.55.55v12.27Z" />
                                                </g>
                                            </svg>
                                            <a href="{{ url('page/renovacion-de-la-tarjeta-de-residencia-nie') }}">
                                                <div class="media-body">
                                                    <p class="mb-0">Renovación de la tarjeta de residencia (NIE)</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- singel item end -->


                            </div>
                            <!-- row end -->
                        </div>
                        <!-- Nos services end -->
                        <!-- Notre objectif start  -->
                        <div class="NotreObjectif">

                            <div class="media d-md-flex d-block justify-content-between">
                                <div class="media-body align-self-center">
                                    <h2>Nuestro objetivo</h2>
                                    <img src="{{ asset('img/cercale.svg') }}" alt="img"
                                        class="img-fluid d-md-none d-block ms-auto me-auto mb-4 mt-4 align-self-center">
                                    <p>es brindarle asistencia completa y personalizada para facilitar su admisión en
                                        una universidad española y ayudarlo a hacer realidad su sueño de estudiar en
                                        España. <br>
                                        Estamos orgullosos de nuestra sólida experiencia y conocimientos en el campo de
                                        la educación internacional, así como de nuestra capacidad para satisfacer las
                                        necesidades únicas de cada estudiante</p>
                                </div>
                                <img src="{{ asset('img/cercale.svg') }}" alt="img"
                                    class="img-fluid d-md-block d-none align-self-center">
                            </div>
                        </div>
                        <!-- Notre objectif end -->
                        <!-- L’équipe Immi World start  -->
                        <div class="lmmiWorld">
                            <h2><span>El equipo de Immi World</span></h2>
                            <p>Nuestro <strong>equipo multilingüe</strong>
                                está compuesto por profesionales experimentados y altamente calificados, con
                                <strong>un conocimiento profundo de las normas y regulaciones en materia de estudios en
                                    España.</strong> Trabajamos en estrecha colaboración con usted para entender sus
                                objetivos de estudios y guiarlo a lo largo del proceso, asegurándonos de que su
                                solicitud de admisión esté completa y que su expediente de solicitud de visado esté
                                preparado con cuidado.
                            </p>
                        </div>
                        <!-- L’équipe Immi World end -->
                        <!-- Chaque étudiant est unique start  -->
                        <div class="ChaqueEtudiant">
                            <div class="row">
                                <div class="col-lg-4 align-self-center">
                                    <div class="itemLeftImg">
                                        <img src="{{ asset('img/img.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-8 align-self-center">
                                    <div class="itemRightText">
                                        <h2><span>Cada estudiante es </span> único</h2>
                                        <p>Entendemos que cada estudiante es único, por eso ofrecemos servicios
                                            personalizados para satisfacer sus necesidades individuales.
                                        </p>
                                        <p>Ya sea que necesite ayuda para encontrar el programa de estudios que mejor se
                                            adapte a usted, para completar su solicitud de admisión o para preparar su
                                            expediente de solicitud de visado, estamos aquí para acompañarlo en cada
                                            etapa
                                            del proceso.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chaque étudiant est unique end -->
                        <!-- Immiworld propose start  -->
                        <div class="ImmiworldPropose">
                            <h2><span>¡Eso no es todo!,</span> Immiworld ofrece otro servicio</h2>
                            <div class="media">
                                <img src="{{ asset('img/VisaIconOrange.png') }}" alt="img" class="img-fluid">
                                <div class="media-body">
                                    <p>También ofrecemos un <span>servicio de visado de residencia no lucrativa en
                                            España,</span> para aquellos que desean residir en España sin ejercer
                                        ninguna actividad profesional o laboral. <br>
                                        Esta visado es ideal para jubilados, inversores o personas que simplemente
                                        desean
                                        disfrutar de una estancia prolongada en España. Nuestro equipo le ayudará a
                                        preparar su solicitud de visado no lucrativa proporcionándole información sobre
                                        los requisitos, documentos necesarios y plazos. Tendrás autorización para
                                        trabajar a partir de tu segundo año en España.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Immiworld propose end -->
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
