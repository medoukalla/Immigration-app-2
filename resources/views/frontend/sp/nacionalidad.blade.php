<x-sp.head title="Immiworld - Tramitación Nacionalidad Española" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.nacionalidad') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper" style=" min-height: 225px; ">
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
                        <b>Residir en España de Forma Continua:</b> <br> <p> Debe haber residido en España de forma continua durante al menos 10 años, o 2 años si es ciudadano iberoamericano, y 1 año si está casado con un ciudadano español.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Documentos de Identificación Personal:</b> <br> <p> Debe presentar su pasaporte en vigor completo, con todas las hojas visibles. También debe entregar el NIE en vigor.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Certificado de Nacimiento:</b> <br> <p> Es necesario presentar un certificado de nacimiento original, debidamente apostillado o legalizado, según corresponda.</p>
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Certificado de Antecedentes Penales:</b> <br> <p> Debe presentar un certificado de antecedentes penales de su país de origen y de España, si reside aquí.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        <b>Prueba de Conocimiento de la Lengua Española:</b> <br> <p> Se requiere demostrar un nivel suficiente de conocimiento del idioma español mediante un examen oficial DELE o un documento equivalente.</p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        <b>Otros Documentos Específicos:</b> <br> <p> Dependiendo de su situación personal, pueden ser necesarios otros documentos, como el certificado de empadronamiento o el acta de matrimonio en caso de estar casado con un ciudadano español.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-sp.call_to_action />
   
    <!-- Necessary documents -->
    <x-sp.necessary-documents service="Nacionalidad" />


    <!-- Feedback -->
    {{-- <x-sp.testimonials :testimonials="$testimonials" /> --}}

    <!-- Solutions -->
    <x-sp.solutions />

<x-sp.footer />

