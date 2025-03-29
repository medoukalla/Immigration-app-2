<x-sp.head title="Immiworld - Renovación de la tarjeta de residencia" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.renovación_de_la_tarjeta_de_residencia') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper" style=" min-height: 225px; ">
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
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        <b>Pasaporte Vigente:</b> <br> <p> Presentar un pasaporte completo y válido, con todas las páginas visibles.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Tarjeta de Residencia Actual:</b> <br> <p> Aportar una copia de la tarjeta de residencia actual (NIE) que desea renovar.</p>
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Pago de la Tasa:</b> <br> <p> Aportar el comprobante de pago de la tasa correspondiente al trámite.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Otros Documentos:</b> <br> <p> Se requerirán documentos adicionales dependiendo del tipo de residencia, como en los casos de renovación de arraigo familiar o estancia por estudios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-sp.call_to_action />

    <!-- Necessary documents -->
    <x-sp.necessary-documents service="Renovación de la tarjeta de residencia (NIE)" />


    <!-- Feedback -->
    <x-sp.testimonials :testimonials="$testimonials" />

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

