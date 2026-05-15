<x-sp.head title="Immiworld - Seguro Médico para Trámites de Extranjería y Visados" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.assurance') }}" />

{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper" style="min-height: 225px">
            <h1>Seguro Médico</h1>
            <p>
                El seguro médico es un requisito obligatorio para muchos
                trámites de inmigración en España. Recibes orientación para
                obtener la póliza adecuada, garantizando que tu solicitud
                cumpla con los requisitos establecidos por las autoridades
                de extranjería y los consulados.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Bienvenido</a>
                </div>
                <img
                    src="{{ asset('assets/images/svg/arrow.svg') }}"
                    alt="Flecha de ruta"
                />
                <div class="p-path">Services</div>
                <img
                    src="{{ asset('assets/images/svg/arrow.svg') }}"
                    alt="Flecha de ruta"
                />
                <div class="p-path">Seguros</div>
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
            <div class="numbers-text white-style">Años de experiencia</div>
        </div>
        <div
            id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813"
            class="working-wrap"
        >
            <div class="numbers">+5.000</div>
            <div class="numbers-text white-style">Clientes en todo el mundo</div>
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
<style>
    .min-hero-wrapper p {
        width: 48% !important;
    }
</style>
{{-- Hero section ENDS  --}}

<!-- Services contact form -->
<div class="section">
    <div class="base-container w-container">
        <div
            data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237"
            class="contacts-2-wrapper"
            style="align-items: flex-start !important"
        >
            <div class="contacts-2-content-wrapper">
                <div class="image-box">
                    <img
                        src="{{ asset('assets/images/pages/assurance.webp') }}"
                        alt="Seguro"
                    />
                </div>
                <div class="contacts-title">
                    <h2 class="in-section-title">SEGUROS</h2>
                </div>
                <div class="contacts-2-content">
                    <p>
                        Contar con un seguro médico es fundamental para los
                        trámites de inmigración en España. Este servicio
                        garantiza el acceso a la atención sanitaria y es un
                        requisito clave para la obtención de visados y permisos
                        de residencia.
                    </p>
                </div>
            </div>
            <!-- Contact Form -->
            @livewire('assurance')
        </div>
    </div>
</div>

<!-- contact-components -->
<x-sp.contact-info />

<!-- Solutions -->
<x-sp.solutions />

<x-sp.footer />
