<x-sp.head title="Sobre Nosotros – Abogados Expertos en Extranjería en Málaga" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{ route('frontend.about') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper" style="min-height: 255px">
            <h1>Sobre Nosotros</h1>
            <p>
                En Immiworld, recibes asesoramiento jurídico especializado en
                derecho de extranjería, enfocado en ofrecer soluciones claras,
                fiables y personalizadas para tu proceso migratorio en España.
                Cada caso se aborda de forma individual, garantizando que tu
                situación sea analizada y gestionada cuidadosamente de
                conformidad con la normativa de extranjería vigente.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Bienvenido</a>
                </div>
                <img
                    src=" {{ asset('assets/images/svg/arrow.svg') }}"
                    alt="Path Arrow"
                />

                <div class="p-path">Sobre Nosotros</div>
            </div>
        </div>
    </div>
</div>

<div class="numbers-wrapper">
    <div
        data-w-id="221627f6-3a31-260f-8a97-6ec174e99870"
        class="w-layout-grid working-numbers"
    >
        <div
            id="w-node-_221627f6-3a31-260f-8a97-6ec174e99871-296c1813"
            class="working-wrap"
        >
            <div class="numbers">10+</div>
            <div class="numbers-text white-style">Años de Experiencia</div>
        </div>
        <div
            id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813"
            class="working-wrap"
        >
            <div class="numbers">+5.000</div>
            <div class="numbers-text white-style">
                Consultas Personalizadas
            </div>
            <div class="line home-white-left"></div>
        </div>
        <div
            id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813"
            class="working-wrap"
        >
            <div class="numbers">100%</div>
            <div class="numbers-text white-style">Satisfacción</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>

<!-- Services contact form -->
<section>
    <div class="without-bottom-spacing">
        <div class="base-container w-container">
            <div class="s-services">
                <h2 class="text-center"><span>Descripción</span> del Servicio</h2>
                <p class="text-center">
                    El Arraigo Social es un permiso de residencia que permite a
                    los extranjeros residir legalmente en España si han
                    permanecido en el país al menos dos años antes de presentar
                    la solicitud, y pueden demostrar vínculos familiares con
                    otros extranjeros residentes con permiso de residencia
                    válido o, si no pueden probarse dichos vínculos, suficiente
                    evidencia de integración social en España.
                </p>

                <div
                    style="
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                    "
                >
                    
                        <a href=""
                        class="primary-button w-button"
                        style="margin: 0 auto; width: 250px"
                        >Sobre Nosotros</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Necessary documents -->
<section style="background: #efefef; padding: 100px 0">
    <div class="base-container w-container">
        <div class="section-rootedness">
            <h2 class="text-center">
                Por Qué Elegir Immiworld para Tu Proceso Migratorio
            </h2>
            <p class="text-center" style="width: 60%; margin: 0 auto">
                Te acompañamos paso a paso en cada etapa de tu proceso
                migratorio. Los procedimientos legales complejos se explican
                con claridad, para que siempre sepas qué esperar y cómo
                proceder.
            </p>
            <div class="section-rootedness-grid">
                <div class="left-rootedness">
                    <div class="rootedness first-rootedness">
                        <div class="number">1</div>
                        <div class="number-title">Asesoría Legal Experta</div>
                        <p>
                            Te acompañamos paso a paso en cada etapa de tu
                            proceso migratorio. Los procedimientos legales
                            complejos se explican con claridad, para que siempre
                            sepas qué esperar y cómo proceder.
                        </p>
                    </div>
                    <div class="rootedness second-rootedness">
                        <div class="number">2</div>
                        <div class="number-title">Soluciones Personalizadas</div>
                        <p>
                            Cada caso es único. Tu situación se analiza
                            detenidamente para diseñar una estrategia legal
                            adaptada a tus necesidades y objetivos específicos,
                            porque detrás de cada solicitud hay una historia
                            personal.
                        </p>
                    </div>
                </div>
                <div class="midle-rootedness-img">
                    <img
                        src="{{ asset('assets/images/why-choose-us.png') }}"
                        alt=""
                    />
                </div>
                <div class="right-rootedness">
                    <div class="rootedness third-rootedness">
                        <div class="number">3</div>
                        <div class="number-title">Trayectoria Probada</div>
                        <p>
                            Con cientos de clientes satisfechos, Immiworld ha
                            consolidado una sólida trayectoria de resultados
                            exitosos en materia de inmigración, nacionalidad y
                            residencia.
                        </p>
                    </div>
                    <div class="rootedness forth-rootedness">
                        <div class="number">4</div>
                        <div class="number-title">Un Equipo de Confianza</div>
                        <p>
                            Recibes un apoyo cercano y continuo durante todo el
                            proceso, garantizando profesionalidad, transparencia
                            y confianza en cada etapa.
                        </p>
                    </div>
                </div>
                <div class="midle-rootedness-img-mobile">
                    <img
                        src="{{ asset('assets/images/why-choose-us.png') }}"
                        alt=""
                    />
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Partner section --}}
<x-en.partners-black />

<!-- Call to action -->
<div class="section call-to-action">
    <div class="base-container w-container">
        <div class="call-to-action-box">
            <div class="call-subtitle">Tu futuro comienza aquí</div>
            <div class="call-title">
                Obtén la asistencia legal que necesitas para tu<br />
                <span>proceso migratorio en España</span>
            </div>
            <p>
                Tanto si vives en España como si estás planeando mudarte,
                nuestros abogados expertos en extranjería te guiarán en cada
                paso del camino. Gestionamos tu documentación de forma eficiente
                para que puedas centrarte en tu nuevo comienzo.
            </p>
            <div class="button-wrapper smaller-spacing">
                <a
                    href="{{ route('frontend.sp.contact') }}"
                    class="link-with-arrow-underline white-style"
                    >Contáctanos hoy</a
                >
            </div>
        </div>
    </div>
</div>

<!-- Solutions -->
<x-sp.solutions />

<x-sp.footer />
