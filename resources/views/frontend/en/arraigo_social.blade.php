<x-en.head title="{{ setting('site.title') }}" />


    <!-- Banner hero section -->
    <div class="pages-banner blog">
        <div class="base-container w-container">
            <div class="min-hero-wrapper">
                <h1>Family Rooting (Arraigo Familiar)</h1>
                <p>
                    We offer a wide range of services designed to facilitate your transition to a new country. Our team of professionals is committed to providing you with the support and guidance you need at every stage of the process, ensuring that you feel safe and well-informed during your journey.
                </p>
                <div class="pages-path">
                    <div class="p-path">
                        Welcome
                    </div>
                    <img {{ asset('assets/images/svg/arrow.svg') }} alt="Path Arrow">
                    <div class="p-path">
                        Immigration
                    </div>
                    <img {{ asset('assets/images/svg/arrow.svg') }} alt="Path Arrow">
                    <div class="p-path">
                        Family Rooting
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
                        <p>El <b>arraigo social</b> es una autorización de residencia en España destinada a extranjeros en situación irregular que
                            desean regularizar su estatus. Este permiso busca facilitar la integración de los extranjeros en la sociedad española,
                            permitiéndoles vivir y trabajar legalmente en el país. </p>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="contacts-2-form-wrapper">
                    <div class="form-block-contacts w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form"
                            data-wf-page-id="651f2c08c5bd81eb296c17fd"
                            data-wf-element-id="502c5dca-196a-0aae-1f67-5b18c9a9023a">
                            <h3 class="form-heading">Contacta con nosotros</h3>
                            <input class="contacts-input white-style w-input" maxlength="256" name="name-2"
                                data-name="Name 2" placeholder="Your name" type="text" id="name-2" required="" />
                            <input class="contacts-input white-style w-input" maxlength="256" name="email-2"
                                data-name="Email 2" placeholder="Your email" type="email" id="email-2" required="" />
                            <input class="contacts-input white-style w-input" maxlength="256" name="email-2"
                                data-name="Email 2" placeholder="Your phone number" type="email" id="email-2"
                                required="" />
                            <textarea placeholder="Your text" maxlength="5000" id="field-2" name="field-2"
                                data-name="Field 2" required="" class="contacts-textarea white-style w-input">
                                </textarea>
                            <input type="submit" data-wait="Please wait..."
                                class="primary-button full-width-mobile w-button" value="Submit" />
                        </form>
                        <div class="success-message w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
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
                        <b>Permanencia mínima</b> 
                        <br>
                        <p>
                            Al menos tres años de residencia en España. 
                        </p>
                    </div>
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-2.svg') }}" alt="Badge">
                        <b>Vínculos</b>
                        <br>
                        <p>
                            Tener vínculos familiares, laborales o sociales en el país
                        </p>
                    </div>
                    
                </div>
                <div class="doc-block-wrapper doc-block-right">
                    <div class="doc-block">
                        <img src="{{ asset('assets/images/svg/badge-3.svg') }}" alt="Badge">
                        <b>Contrato de trabajo</b>
                        <br>
                        <p>
                            Presentar un contrato de trabajo válido (si aplica). 
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

