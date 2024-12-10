<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.arraigo_para_la_formacion') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Arraigo para la formacion</h1>
                <p>
                    This permit is for those who have lived in Spain for at least two years and wish to pursue formal education or vocational training. It allows you to regularize your status while continuing your studies.

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
                        Arraigo para la formacion
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
                        <img src="{{ asset('assets/images/pages/arraigo-para-la-formacion.webp') }}" alt="Contact image">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            The residency  (arraigo para la formación) is a residence permit in Spain that allows foreigners, who have lived in the country for at least two years, to regularize their status through a professional training program. This permit is ideal for those seeking to enhance their skills and facilitate their integration into the Spanish labor market.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Arraigo para la formación'])
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
                        Pasaporte vigente. 
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Certificado de empadronamiento que acredite dos años de residencia en España.
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Certificado de antecedentes penales.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Matrícula en un programa de formación profesional aprobado.
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

