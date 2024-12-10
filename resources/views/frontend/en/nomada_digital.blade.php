<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.nomada_digital') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Digital nomad</h1>
                <p>
                    If you work remotely and wish to live in Spain, the Digital Nomad Visa allows you to reside legally while continuing your work abroad. We help you with the application process and ensure compliance with the visa requirements.

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
                        Digital nomad
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
                        <img src="{{ asset('assets/images/pages/nomada_digital.jpg') }}" alt="Visa para Nómadas Digitales">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Presentation of the Service</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            The digital nomad visa is a residence permit that allows remote professionals and workers to live and work legally in a country while carrying out their work remotely. This type of visa is specifically designed for individuals who can perform their job remotely, regardless of geographic location, and who wish to take advantage of the opportunity to live in a different and enriching environment, such as Spain.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Digital nomad'])
            </div>
        </div>
    </div>
    <x-en.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Mandatory Requirements
                </h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        Provide evidence of remote work for a foreign company or as a self-employed professional with international clients.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Demonstrate monthly income above the established threshold (approximately €2,000–€2,500) through bank statements or contracts.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Submit a criminal record certificate from your country of residence or origin, translated if required.
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Show proof of accommodation in Spain, such as a rental agreement.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Provide additional documents, including professional references, evidence of professional activity, or tax declarations.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Secure comprehensive health insurance with full coverage in Spain for the entire period of stay.
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

