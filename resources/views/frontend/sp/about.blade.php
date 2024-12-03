<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{ route('frontend.about') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Sobre Nosotros</h1>
            <p>
                En Immiworld, somos una firma de abogados especializada en asesoría legal en extranjería. Contamos con un equipo de profesionales altamente cualificados, comprometidos en ofrecer soluciones jurídicas personalizadas y eficaces para garantizar el éxito en tus trámites migratorios.

            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Sobre Nosotros
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

<div class="section about-section">
    <div class="base-container w-container">
        <div class="our-journey">
            <div class="left-side">
                <div class="journey-subtitle">Nuestra Historia</div>
                <h2>Expertos en Extranjería y Derecho de Inmigración en Málaga</h2>
            </div>
            <div class="right-side">
                <p>
                    En Immiworld, comenzamos con una misión clara es facilitar los trámites de extranjería e inmigración para personas y familias que desean establecerse en España, especialmente en Málaga. Nuestro despacho de abogados especializado en extranjería ha crecido gracias a la confianza de nuestros clientes, ofreciendo soluciones legales adaptadas a cada situación. Málaga, como una de las ciudades más dinámicas y atractivas para vivir, es el epicentro de nuestros servicios, ayudando a quienes buscan un nuevo comienzo en esta región.
                </p> <br>
                <p>
                    Desde la residencia no lucrativa hasta el visado para emprendedores o nómadas digitales, guiamos a nuestros clientes en cada paso del proceso, asegurándonos de cumplir con todos los requisitos legales. Con un equipo de abogados expertos en Málaga, Immiworld se ha posicionado como referente en asesoría de inmigración y extranjería, brindando apoyo personalizado y soluciones eficaces para la obtención de permisos de residencia, nacionalidad, y otros trámites complejos en España.
                </p> <br>
                <p>    
                    Estamos aquí para hacer que tu proceso de inmigración sea simple y exitoso, siempre con un enfoque local y personalizado. Málaga es nuestra base, y desde aquí ayudamos a personas de todo el mundo a cumplir sus metas en España
                </p>
            </div>
        </div>

    </div>
</div>

<x-sp.trust_immiworld />


{{-- Partner section --}}
<x-sp.partners-black />

<!-- Call to action -->
<div class="section call-to-action">
    <div class="base-container w-container">
      <div class="call-to-action-box">
        <div class="call-subtitle">Tu futuro empieza aquí</div>
        <div class="call-title">Obtén la asistencia legal que necesitas para tu proceso de<br>
          <span>inmigración en España</span>
        </div>
        <p>A sea que vivas en España o estés planificando venir, nuestros abogados expertos en extranjería te acompañarán en cada paso. Gestionamos tus trámites de manera eficiente para que puedas
          enfocarte en tu nuevo comienzo.</p>
        <div class="button-wrapper smaller-spacing">
          <a href="{{ route('frontend.sp.contact') }}" class="link-with-arrow-underline white-style">Contáctanos hoy</a>
        </div>
      </div>
    </div>
</div>

<!-- Solutions -->
<x-sp.solutions />

<x-sp.footer />
