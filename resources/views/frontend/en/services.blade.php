<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.services') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Servicios</h1>
                <p>
                    Ofrecemos una amplia gama de servicios diseñados para facilitar tu transición a un nuevo país. Nuestro equipo de profesionales está comprometido a brindarte el apoyo y la orientación que necesitas en cada etapa del proceso, asegurando que te sientas seguro y bien informado en tu viaje.
                </p>
                <div class="pages-path">
                    <div class="p-path">
                        Inicio
                    </div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                    <div class="p-path">
                        Servicios
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
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>El arraigo social es una autorización de residencia temporal por circunstancias
                            excepcionales que se podrá conceder a ciudadanos extranjeros que se hallen en España
                            y tengan vínculos familiares en España o estén integrados socialmente.</p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => '###'])
            </div>
        </div>
    </div>
    <x-en.trust_immiworld />
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
                        Un proyecto empresarial innovador que incluya inversión inicial y potencial de creación de empleo
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Plan de negocio detallado. 
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Justificación de medios económicos suficientes.
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Seguro médico. 
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Certificado de antecedentes penales.
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Pasaporte vigente
                    </div>
                </div>
            </div>
        </div>
    </div>


    <x-en.call_to_action />

    
    <!-- Necessary documents -->
    <x-en.necessary-documents />


    <!-- Feedback -->
    <x-en.testimonials :testimonials="$testimonials" />

    <!-- Solutions -->
    <x-en.solutions />

<x-en.footer />

