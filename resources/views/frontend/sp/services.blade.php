<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.services') }}" />


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
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentación del Servicio</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>El arraigo social es una autorización de residencia temporal por circunstancias
                            excepcionales que se podrá conceder a ciudadanos extranjeros que se hallen en España
                            y tengan vínculos familiares en España o estén integrados socialmente.</p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-spanish', ['service' => 'Family'])
            </div>
        </div>
    </div>
    <x-sp.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Procedimiento para la residencia no lucrativa</h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        El recorrido para la obtención de la residencia no lucrativa comienza solicitando la
                        “Autorización
                        de residencia temporal” y el correspondiente visado ante
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        El solicitante tendrá un plazo de un mes para recoger el visado concedido en
                        el Consulado. Posteriormente deberá tener en cuenta el plazo para entrar en España según el
                        plazo indicado.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        El primer permiso de residencia no lucrativa será por 1 año, el cual podrá
                        ser renovado al término del mismo. (Ver trámites de Renovación de Residencia).
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        El plazo máximo que tiene la Administración Pública (Delegación o
                        Subdelegación del Gobierno) para resolver la solicitud de autorización es de un mes...
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Una vez en España, habrá de ser solicitada la Tarjeta de Identidad de
                        Extranjero de forma personal y en el plazo de un mes desde la llegada. (Ver trámite de Tarjeta
                        de Identidad de Extranjero).
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Póngase en contacto con nosotros y solicite más información. Nuestro equipo legal le solucionará
                        sus dudas, le dará la información más completa
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

