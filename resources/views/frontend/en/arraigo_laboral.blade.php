<x-en.head title="Immiworld - Arraigo laboral" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{ route('frontend.sp.arraigo_laboral') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper" style=" min-height: 225px; ">
                <h1>Arraigo Laboral</h1>
                <p>
                    Available to those who have lived in Spain for at least two years and have worked for a minimum of six months. This permit allows you to regularize your labor status and continue working legally in the country.

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
                        Arraigo Laboral
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
                        <img src="{{ asset('assets/images/pages/arraigo_laboral.png') }}" alt="Arraigo Laboral">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            The arraigo laboral  is a temporary residence permit in Spain that allows foreigners in an irregular situation to regularize their status by demonstrating a continuous and prior employment relationship. This permit facilitates the acquisition of a residence and work permit, allowing applicants to live and work legally in the country.
                        </p>
                        <p>
                            The arraigo laboral aims to integrate foreigners who have established labor ties in Spain, enabling them to contribute to the workforce legally. Our expert team will guide you through the entire process, ensuring compliance with all legal requirements.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Arraigo Laboral'])
            </div>
        </div>
    </div>
    <x-en.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Required Requirements </h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        <b>Valid Passport:</b> <br> <p> Submit a complete and valid passport with all pages visible.
                            </p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Proof of Stay in Spain:</b> <br> <p> Demonstrate continuous stay in Spain for at least two years.
                            </p>
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Criminal Record Certificate:</b> <br> <p> Provide a criminal record certificate from your country of origin and from any country where you have resided in the last five years.
                            </p>
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Payment of the Corresponding Fee:</b> <br> <p> Provide proof of payment for the application fee for the labor root residence.
                            </p>
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

