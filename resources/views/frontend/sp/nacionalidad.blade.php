<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.nacionalidad') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Nacionalidad Española</h1>
                <p>
                    La nacionalidad española se puede obtener por residencia, matrimonio o descendencia. Te asistimos en el proceso de naturalización, ayudándote a cumplir con los requisitos legales para obtener la ciudadanía
                </p>
                <div class="pages-path">
<div class="p-path">
    <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
</div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                    <div class="p-path">
                        Nacionalidad Española
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
                        <img src="{{ asset('assets/images/pages/nacionalidad.jpg') }}" alt="Nacionalidad Española">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            La <b>Tramitación de la Nacionalidad Española</b> es el proceso que permite a personas extranjeras obtener la
                            ciudadanía española, con todos sus derechos y obligaciones. Las vías principales incluyen residencia, matrimonio
                            con un español, descendencia, o nacimiento en España en ciertos casos. Este trámite requiere cumplir requisitos de
                            arraigo, presentar documentación específica y, en algunos casos, aprobar pruebas de conocimientos y lengua.
                            Finaliza con el juramento de nacionalidad en el Registro Civil, momento en el cual el solicitante se convierte
                            oficialmente en ciudadano español. 
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-spanish', ['service' => 'Nacionalidad'])
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
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        Pasaporte vigente
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Certificado de nacimiento. 
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Certificado de antecedentes penales. 
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Justificantes de residencia en España. 
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Exámenes de conocimiento (CCSE y, en algunos casos, DELE). 
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Exámenes de conocimiento (CCSE y, en algunos casos, DELE). 
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

