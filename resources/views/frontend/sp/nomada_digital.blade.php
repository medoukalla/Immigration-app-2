<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.nomada_digital') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Visa para Nómadas Digitales</h1>
                <p>
                    Vive y trabaja remotamente desde España, disfrutando de su cultura y estilo de vida. Simplificamos el proceso de solicitud para que puedas centrarte en tu experiencia
                </p>
                <div class="pages-path">
<div class="p-path">
    <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
</div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                    <div class="p-path">
                        Extranjeria
                    </div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                    <div class="p-path">
                        Visa para Nómadas Digitales
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="numbers-wrapper">
        <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
                <div class="numbers">15+</div>
                <div class="numbers-text white-style">Años de experiencia</div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
                <div class="numbers">84k</div>
                <div class="numbers-text white-style">Clientes en todo el mundo</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
                <div class="numbers">98%</div>
                <div class="numbers-text white-style">Tasa de éxito</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
                <div class="numbers">28k</div>
                <div class="numbers-text white-style">Visas emitidas</div>
                <div class="line home-white-left"></div>
            </div>
        </div>
    </div>
    


    <!-- Services contact form -->
    <div class="section">
        <div class="base-container w-container">
            <div data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237" class="contacts-2-wrapper">
                <div class="contacts-2-content-wrapper">
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            La <b>visa para nómadas digitales</b> es un permiso de residencia que permite a profesionales y trabajadores remotos
                            vivir y trabajar legalmente en un país mientras desarrollan sus actividades laborales a distancia. Este tipo de visa está
                            diseñado específicamente para personas que pueden desempeñar su trabajo de manera remota,
                            independientemente de su ubicación geográfica, y que desean aprovechar la oportunidad de vivir en un entorno
                            diferente y enriquecedor, como puede ser España. 
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-sp', ['service' => 'service_name'])
            </div>
        </div>
    </div>
    <x-sp.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Requisitos Requeridos</h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        <b>Contrato Laboral</b>: Tener un contrato con una empresa no española o ser autónomo
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Ingresos Suficientes</b>: Demostrar que cuenta con ingresos suficientes para mantenerse durante su estancia en España. 
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Documentación</b>: Pasaporte válido y seguro de salud que cubra su estancia en España. 
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Actividad Profesional</b>: Acreditar su actividad profesional a través de documentos relevantes. 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-sp.call_to_action />

    <!-- Necessary documents -->
    <div class="section documents-section without-bottom-spacing">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Procedimiento para la residencia no lucrativa</h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        <b>Evaluación Inicial </b><br>
                        <p>Realizamos una consulta personalizada para evaluar a fondo su situación y confirmar que cumple con los requisitos generales. Además, le proporcionamos un resumen claro del proceso y de la documentación necesaria.</p>
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Revisión y Preparación de Documentación</b><br>
                        <p>Reunimos y revisamos toda la documentación requerida, verificando su conformidad con las normativas vigentes. Nuestro equipo organiza y prepara los documentos de manera exhaustiva para evitar retrasos en la solicitud. </p>
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Gestión Integral del Proceso</b><br>
                        <p>Nos ocupamos de gestionar todo el proceso desde la preparación hasta la presentación de su solicitud. También asistimos en cualquier requisito adicional necesario para asegurar el éxito del trámite.</p>
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Asesoría y Seguimiento Posterior</b><br>
                        <p>Realizamos un seguimiento continuo de la solicitud y le mantenemos informado de cada avance importante. En caso de resolución favorable, le orientamos en los pasos finales; si es desfavorable, le asesoramos sobre las opciones de recurso.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Feedback -->
    <x-sp.testimonials :testimonials="$testimonials" />

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

