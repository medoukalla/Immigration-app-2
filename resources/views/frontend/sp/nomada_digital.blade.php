<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.nomada_digital') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Visa para Nómadas Digitales</h1>
                <p>
                    Si trabajas de forma remota y deseas vivir en España, el visado para nómadas digitales te permite residir legalmente sin necesidad de empleo local. Te ayudamos a presentar tu solicitud y cumplir con los requisitos.

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
                        <img src="{{ asset('assets/images/pages/nomada_digital.jpg') }}" alt="Visa para Nómadas Digitales">
                    </div>
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
                @livewire('contact-spanish', ['service' => 'Nómada digital'])
            </div>
        </div>
    </div>
    <x-sp.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Requisitos Requeridos
                </h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        Acreditar que trabajas de manera remota para una empresa extranjera o como autónomo con clientes internacionales.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Demostrar ingresos mensuales superiores al umbral establecido (aproximadamente 2.000-2.500€), con extractos bancarios o contratos.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Presentar un certificado de antecedentes penales de tu país de residencia o de origen, traducido si es necesario.
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Demostrar que tienes un lugar donde residir en España, a través de un contrato de alquiler.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Presentar documentos adicionales, como referencias laborales, pruebas de actividad profesional o declaraciones fiscales
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Acreditar un seguro médico con cobertura total en España, que cubra atención sanitaria durante todo tu periodo de estancia.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-sp.call_to_action />

    <!-- Necessary documents -->
    <x-sp.necessary-documents />


    <!-- Feedback -->
    <x-sp.testimonials :testimonials="$testimonials" />

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

