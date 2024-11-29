<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.residencia_para_emprendedores') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Entrepreneur Residence</h1>
                <p>
                    The Entrepreneur Residence permit is designed for individuals looking to start a business in Spain. We assist in developing your business plan, demonstrating its economic viability, and securing your entrepreneur visa.

                </p>
                <div class="pages-path">
<div class="p-path">
    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
</div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                    <div class="p-path">
                        Immigration
                    </div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Path Arrow">
                    <div class="p-path">
                        Entrepreneur Residence
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="numbers-wrapper">
        <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
                <div class="numbers">15+</div>
                <div class="numbers-text white-style">Years of experience</div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
                <div class="numbers">84k</div>
                <div class="numbers-text white-style">Clients worldwide</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
                <div class="numbers">98%</div>
                <div class="numbers-text white-style">Success rate</div>
                <div class="line home-white-left"></div>
            </div>
            <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
                <div class="numbers">28k</div>
                <div class="numbers-text white-style">Visas issued</div>
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
                        <p>Esta residencia permite desarrollar un proyecto empresarial innovador en el país, ideal para quienes buscan crear un
                            negocio que aporte valor y contribuya al desarrollo económico y social de España. Nuestro equipo de expertos le
                            guiará durante todo el proceso, asegurando el cumplimiento de todos los requisitos legales.</p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Entrepreneurs Residency'])
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
    {{-- <x-en.testimonials :testimonials="$testimonials" /> --}}

    <!-- Solutions -->
    <x-en.solutions />

<x-en.footer />

