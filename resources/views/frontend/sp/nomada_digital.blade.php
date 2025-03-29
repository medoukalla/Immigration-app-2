<x-sp.head title="Immiworld - Nómada Digital" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.nomada_digital') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper" style=" min-height: 225px; ">
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
                        <b>Prueba de Empleo o Actividad Empresarial:</b> <br> <p> Aportar un contrato de trabajo o prueba de actividad freelance/empresarial con empresas fuera de España, asegurando que al menos el 80 % de sus ingresos provengan de fuentes no españolas.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Pasaporte Vigente:</b> <br> <p> Presentar un pasaporte completo y válido, asegurándose de que todas las páginas sean visibles.</p>
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Certificado de Antecedentes Penales:</b> <br> <p> Presentar un certificado de antecedentes penales del país de origen y de cualquier país donde haya residido en los últimos cinco años.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Medios Económicos:</b> <br> <p> Presentar evidencia de recursos financieros suficientes, garantizando un ingreso mensual de al menos 2.800 €.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-sp.call_to_action />

    <!-- Necessary documents -->
    <x-sp.necessary-documents service="Nómada digital" />


    <!-- Feedback -->
    <x-sp.testimonials :testimonials="$testimonials" />

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

