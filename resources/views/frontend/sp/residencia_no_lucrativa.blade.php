<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.residencia_no_lucrativa') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Residencia No Lucrativa</h1>
                <p>
                    Si planeas vivir en España sin trabajar, este visado es ideal para quienes tienen los medios económicos para mantenerse sin necesidad de empleo. Te guiamos en la documentación y requisitos para una residencia no lucrativa.

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
                        Residencia No Lucrativa
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
                        <img src="{{ asset('assets/images/pages/residencia_no_lucrativa.jpg') }}" alt="Residencia No Lucrativa">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>La <b>residencia no lucrativa</b> en España es un permiso que permite a extranjeros vivir en el país sin realizar
                            actividades laborales. Está destinada a personas que cuentan con recursos económicos suficientes para mantenerse
                            sin trabajar. Es ideal para jubilados, pensionistas o personas con recursos que deseen vivir en España sin necesidad
                            de trabajar. </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-spanish', ['service' => 'Residencia no lucrativa'])
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
                        Pasaporte vigente.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Comprobantes financieros que demuestren ingresos suficientes.   
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Certificado de antecedentes penales
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Seguro médico privado válido en España.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Informe médico que acredite la buena salud del solicitante
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

