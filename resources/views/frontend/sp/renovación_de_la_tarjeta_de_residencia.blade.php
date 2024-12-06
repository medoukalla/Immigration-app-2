<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.renovación_de_la_tarjeta_de_residencia') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Renovación de la tarjeta de residencia (NIE)</h1>
                <p>
                    Si ya resides en España y necesitas renovar tu tarjeta de residencia o NIE, te ayudamos a cumplir con los requisitos y completar el proceso de renovación sin complicaciones.

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
                        Renovación de la tarjeta de residencia (NIE)
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="numbers-wrapper">
        <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
                <div class="numbers">10+</div>
                <div class="numbers-text white-style">Años de experiencia</div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
                <div class="numbers">+5.000</div>
                <div class="numbers-text white-style">Consultas personalizadas</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
                <div class="numbers">100%</div>
                <div class="numbers-text white-style">Satisfacción</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
                <div class="numbers">+1.200</div>
                <div class="numbers-text white-style">Clientes felices</div>
                <div class="line home-white-left"></div>
            </div>
        </div>
    </div>
    


    <!-- Services contact form -->
    <div class="section">
        <div class="base-container w-container">
            <div data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237" class="contacts-2-wrapper">
                <div class="contacts-2-content-wrapper">
                    <div class="image-box">
                        <img src="{{ asset('assets/images/pages/renovación_de_la_tarjeta_de_residencia.jpg') }}" alt="Renovación de la tarjeta de residencia (NIE)">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            La renovación de la tarjeta de residencia (NIE) es un trámite esencial para los extranjeros que desean continuar su
                            estancia legal en España. Este proceso garantiza que los solicitantes mantengan su estatus migratorio y puedan
                            acceder a los servicios y derechos correspondientes.
                            <br>
                            Realizar la renovación a tiempo es crucial para evitar problemas legales y asegurar la continuidad de su estatus
                            migratorio. Nuestro equipo de expertos le guiará en cada paso, garantizando que el proceso sea eficiente y cumpla
                            con todos los requisitos. 
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-spanish', ['service' => 'Renovación de la tarjeta de residencia (NIE)'])
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
                        NIE actual.
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Pasaporte válido o documento de identidad. 
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Justificación de medios económicos para su estancia. 
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Certificado de empadronamiento. 
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Documentación que acredite su situación laboral, académica, o familiar, según aplique. 
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
    {{-- <x-sp.testimonials :testimonials="$testimonials" /> --}}

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

