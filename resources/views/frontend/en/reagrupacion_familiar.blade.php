<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.reagrupacion_familiar') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Family Reunification</h1>
                <p>
                    This permit allows legal residents of Spain to bring their immediate family members to live with them. We provide comprehensive support in navigating the application process, ensuring you meet the financial and housing requirements.

                </p>
                <div class="pages-path">

                    <div class="p-path">
                        <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                    </div>

                    <img src=" {{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                    <div class="p-path">
                        Immigration
                    </div>
                    <img src=" {{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">

                    <div class="p-path">
                        Family Reunification
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="numbers-wrapper">
        <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
                <div class="numbers">10+</div>
                <div class="numbers-text white-style">Years of experience</div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
                <div class="numbers">+5.000</div>
                <div class="numbers-text white-style">Personalized Consultations</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
                <div class="numbers">100%</div>
                <div class="numbers-text white-style">Satisfaction</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
                <div class="numbers">+1.200</div>
                <div class="numbers-text white-style">Happy Clients</div>
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
                        <img src="{{ asset('assets/images/pages/reagrupacion_familiar.jpg') }}" alt="Reagrupación Familiar">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            Family reunification residency is a type of residence permit in Spain that allows legally residing foreign nationals to bring their immediate family members to the country. This type of authorization is essential for those wishing to ensure family unity and provide a stable environment for their loved ones.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Family reunification'])
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
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        Ser residente legal en España
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Contar con medios económicos suficientes para mantener a los familiares reagrupados. 
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Identificar a los familiares que se desea reagrupar (cónyuges, parejas de hecho, hijos menores, ascendientes).
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

