<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.residencia_familiar_ue') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Residencia para Familiares de Ciudadanos de la UE</h1>
                <p>
                    Si eres familiar de un ciudadano de la Unión Europea y deseas residir en España, este permiso te permite hacerlo bajo condiciones favorables. Te proporcionamos apoyo en la tramitación de la tarjeta de familiar de ciudadano de la UE.

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
                        Residencia para Familiares de Ciudadanos de la UE
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
                        <img src="{{ asset('assets/images/pages/residencia_familiar_ue.jpg') }}" alt="Residencia para Familiares de Ciudadanos de la UE">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            La <b>Residencia de Familiar de Ciudadano de la UE</b> permite a familiares directos de ciudadanos de la Unión Europea
                            vivir legalmente en otro país miembro. Este permiso, que incluye a cónyuges, hijos, padres y en algunos casos
                            parejas y familiares dependientes, les brinda derechos de residencia, trabajo y estudio en igualdad de condiciones a
                            los ciudadanos locales. Para obtenerlo, es necesario demostrar la relación familiar y la residencia del ciudadano de la
                            UE en el país de destino.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-spanish', ['service' => 'Residencia de Familiar de Ciudadano de la UE'])
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
                        Pasaporte vigente del solicitante.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Documento de identidad del ciudadano de la UE.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Documentación que acredite la relación familiar (certificados de matrimonio, nacimiento, etc.). 
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Prueba de residencia y situación del ciudadano de la UE en el país.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Traducción oficial o apostilla de documentos extranjeros, en caso necesario. 
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

