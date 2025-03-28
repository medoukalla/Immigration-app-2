<x-en.head title="Immiworld - Spanish Nationality Application" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.nacionalidad') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper" style=" min-height: 225px; ">
                <h1>Citizenship</h1>
                <p>
                    Spanish nationality can be obtained through residency, marriage, or descent. We guide you through the naturalization process for those who meet Spain’s residency requirements, helping you fulfill all legal criteria for citizenship.
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
                        Citizenship
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
                        <img src="{{ asset('assets/images/pages/nacionalidad.jpg') }}" alt="Nacionalidad Española">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            The process of obtaining Spanish nationality allows foreign individuals to acquire Spanish citizenship, with all the associated rights and obligations. The main routes to nationality include residency, marriage to a Spanish citizen, descent, or birth in Spain under certain circumstances. This procedure requires meeting residency requirements, submitting specific documentation, and, in some cases, passing language and knowledge tests. The process culminates with the oath of allegiance at the Civil Registry, at which point the applicant officially becomes a Spanish citizen.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Nationality'])
            </div>
        </div>
    </div>
    <x-en.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Required Requirements</h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        <b>Continuous Residence in Spain:</b> <br> You must have continuously resided in Spain for at least 10 years, or 2 years if you are an Ibero-American citizen, and 1 year if you are married to a Spanish citizen.

                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Personal Identification Documents:</b> <br> You must present a valid, complete passport with all pages visible. You must also provide a valid NIE (Foreigner’s Identification Number).
                        </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Birth Certificate:</b> <br> You must provide an original birth certificate, duly apostilled or legalized, as applicable.
                        </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        <b>Criminal Record Certificate:</b> <br> You must submit a criminal record certificate from your country of origin and from Spain if you reside here.
                        </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        <b>Proof of Knowledge of the Spanish Language:</b> <br> You must demonstrate sufficient knowledge of the Spanish language through an official DELE exam or an equivalent document.
                        </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        <b>Other Specific Documents:</b> <br> Depending on your personal situation, other documents may be required, such as a certificate of registration (empadronamiento) or a marriage certificate if you are married to a Spanish citizen.
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

