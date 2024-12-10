<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{ route('frontend.sp.arraigo_familiar') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Arraigo familiar</h1>
                <p>
                    If you are a direct relative of a Spanish citizen or legal resident, this permit allows you to reside in Spain legally. We provide guidance on the requirements and processes to obtain residence based on family ties.

                </p>
                <div class="pages-path">

                    <div class="p-path">
                        <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                    </div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                    <div class="p-path">
                        Immigration
                    </div>
                    <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">

                    <div class="p-path">
                        Arraigo familiar
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
                        <img src="{{ asset('assets/images/pages/arraigo_familiar.jpg') }}" alt="Arraigo familiar">
                    </div>
                    <div class="contacts-title">
                        <h2 class="in-section-title">Service Presentation</h2>
                    </div>
                    <div class="contacts-2-content">
                        <p>
                            Arraigo familiar residency is a residence permit in Spain that allows foreigners in an irregular situation to regularize their status for family reasons. It is primarily aimed at:
                            <ul>
                                <li><b>Parents of Spanish national minors.</b></li>
                                <li><b>Children of parents originally from Spain.</b></li>
                            </ul>
                        </p>
                        <p>
                            Family-based residency is a key option for those seeking to regularize their status in Spain based on family ties. It allows legal residence in Spain, access to social services, the ability to work, and facilitates the potential application for Spanish nationality.
                        </p>
                    </div>
                </div>
                <!-- Contact Form -->
                @livewire('contact-english', ['service' => 'Arraigo Familiar'])
            </div>
        </div>
    </div>


    <x-en.trust_immiworld />
    <!-- Necessary documents -->
    <div class="section documents-section">
        <div class="base-container w-container">
            <div class="heading">
                <h2>Required Documents</h2>
            </div>
            <div class="doc-wrapper w-layout-grid">
                <div class="doc-block-wrapper doc-block-left">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-1.svg') }}" alt="Badge">
                        Be a father or mother of a minor with Spanish nationality or a child of a parent originally from Spain.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        Valid passport.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        Birth certificate of the minor or the applicant.
                    </div>
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-4.svg') }}" alt="Badge">
                        Certificate of registration (empadronamiento).
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-5.svg') }}" alt="Badge">
                        Criminal record certificate.
                    </div>
                    <div class="doc-block top">
                        <img src="{{ asset('assets/images/svg/badge-6.svg') }}" alt="Badge">
                        Documentation proving the family relationship.
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

