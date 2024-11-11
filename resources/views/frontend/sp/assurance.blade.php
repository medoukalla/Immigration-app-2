<x-sp.head title="{{ setting('site.title') }}" />

{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Seguro</h1>
            <p>Estamos aquí para guiarte en cada paso del camino. Nuestro equipo de expertos está dedicado a hacer que
                tu viaje a un nuevo país sea lo más fluido y libre de estrés posible.</p>
            <div class="pages-path">
                <div class="p-path">
                    Bienvenida
                </div>
                <img src="assets/images/svg/arrow.svg" alt="Flecha de ruta">
                <div class="p-path">
                    Seguro
                </div>
            </div>
        </div>
    </div>
</div>
<div class="numbers-wrapper">
    <div data-w-id="221627f6-3a31-260f-8a97-6ec174e99870" class="w-layout-grid working-numbers">
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813" class="working-wrap">
            <div class="numbers">15+</div>
            <div class="numbers-text white-style">Años de experiencia</div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
            <div class="numbers">84k</div>
            <div class="numbers-text white-style">Clientes en todo el mundo</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
            <div class="numbers">98%</div>
            <div class="numbers-text white-style">Tasa de éxito</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
            <div class="numbers">28k</div>
            <div class="numbers-text white-style">Visas emitidas</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>
{{-- Hero section ENDS  --}}


<!-- Services contact form -->
<div class="section">
    <div class="base-container w-container">
        <div data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237" class="contacts-2-wrapper" style="align-items: flex-start !important">
            <div class="contacts-2-content-wrapper">
                <div class="image-box">
                    <img src="assets/images/contact-image.png" alt="Contact image">
                </div>
                <div class="contacts-title">
                    <h2 class="in-section-title">SEGURO</h2>
                </div>
                <div class="contacts-2-content">
                    <p>Contar con un seguro de salud es esencial para los trámites de extranjería en España. Este servicio asegura el acceso a atención médica y es un requisito clave para la obtención de visados y permisos de residencia</p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="contacts-2-form-wrapper">
                <div class="form-block-contacts w-form" style="padding-top:40px">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form"
                        data-wf-page-id="651f2c08c5bd81eb296c17fd"
                        data-wf-element-id="502c5dca-196a-0aae-1f67-5b18c9a9023a">
                        <div class="contact-method-payment">
                            <div class="banks">
                                <p>Aceptamos todos los métodos de pago en Marruecos</p>
                                <div class="payments">
                                    <img src="{{ asset('img/mar-banks.svg') }}" alt="Morocco banks">
                                </div>
                            </div>
                            <div class="banks">
                                <p>Aceptamos todos los métodos de pago en España</p>
                                <div class="payments">
                                    <img src="{{ asset('img/sp-banks.svg') }}" alt="Morocco banks">
                                </div>
                            </div>
                        </div>
                        <div class="note-important">
                            Rellena los siguientes datos para calcular el precio de tu seguro
                        </div>
                        <h6>1 - Apellido y Nombre:</h6>
                        <input class="contacts-input white-style w-input" maxlength="256" name="name-2"
                            data-name="Name 2" placeholder="Your name" type="text" id="name-2" required="" />
                        <h6>2 - Seleccionar seguro:</h6>
                        <select name="service" id="service" class="white-style">
                            <option value="DKV">DKV</option>
                            <option value="SANITAS">SANITAS</option>
                            <option value="MAPFRE">MAPFRE</option>
                            <option value="ASISA">ASISA</option>
                            <option value="ADESLAS">ADESLAS</option>
                        </select>
                        <h6>3 -  Fecha de nacimiento:</h6>
                        <div class="date">
                            <input type="number" placeholder="Día">
                            <input type="number" placeholder="Mes">
                            <input type="number" placeholder="Año">
                        </div>
                        <h6 style="margin-top: 20px">4 -  Sexo:</h6>
                        <div class="check-type" style="margin-bottom: 40px">
                            <div class="type man">
                                <input type="radio">
                                <label for="">Hombre</label>
                            </div>
                            <div class="type femal">
                                <input type="radio">
                                <label for="">Mujer</label>
                            </div>
                        </div>
                        <input type="submit" data-wait="Please wait..."
                            class="primary-button full-width-mobile w-button" value="Calcular el precio del seguro" />
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

<!-- contact-components -->
<div class="section contact-components">
    <div class="base-container w-container">
        <div class="contact-component-wrapper">
            <div class="c-c-block">
                <img src="/assets/images/svg/component-email.svg" alt="Email icone">
                <div class="c-c-name">
                    Email
                </div>
                <p>Direct all your queries to our dedicated customer support email.</p>
                <a href="#">
                    <div class="c-c-link">
                        hello@nimble.llc
                    </div>
                </a>
            </div>
            <div class="c-c-block">
                <img src="/assets/images/svg/component-chat.svg" alt="Email icone">
                <div class="c-c-name">
                    Email
                </div>
                <p>For real-time assistance, initiate a chat with our representative.</p>
                <a href="#">
                    <div class="c-c-link">Start new chat
                    </div>
                </a>
            </div>
            <div class="c-c-block">
                <img src="/assets/images/svg/component-phone.svg" alt="Email icone">
                <div class="c-c-name">
                    Email
                </div>
                <p>Call us for immediate responses to your questions or concerns.</p>
                <a href="#">
                    <div class="c-c-link">+1 (555) 000-0000
                    </div>
                </a>
            </div>
            <div class="c-c-block">
                <img src="/assets/images/svg/component-location.svg" alt="Email icone">
                <div class="c-c-name">
                    Email
                </div>
                <p>If you're in the area, feel free to drop by our office for assistance.</p>
                <a href="#">
                    <div class="c-c-link">123 Sample St, Los Angeles 2000 US
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Solutions -->
<x-sp.solutions />

<x-sp.footer />
