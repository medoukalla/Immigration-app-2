<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.assurance') }}" />

{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Seguro</h1>
            <p>En Immiworld, te asesoramos para obtener el seguro obligatorio exigido por extranjería y el consulado, asegurando que tus trámites de inmigración en España se realicen sin contratiempos.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
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
            <div class="numbers">10+</div>
            <div class="numbers-text white-style">Años de experiencia</div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99876-296c1813" class="working-wrap">
            <div class="numbers">+5.000</div>
            <div class="numbers-text white-style">Consultas personalizadas</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e9987c-296c1813" class="working-wrap">
            <div class="numbers">100%</div>
            <div class="numbers-text white-style">Satisfacción</div>
            <div class="line home-white-left"></div>
        </div>
        <div id="w-node-_221627f6-3a31-260f-8a97-6ec174e99882-296c1813" class="working-wrap">
            <div class="numbers">+1.200</div>
            <div class="numbers-text white-style">Clientes felices</div>
            <div class="line home-white-left"></div>
        </div>
    </div>
</div>
{{-- Hero section ENDS  --}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Services contact form -->
<div class="section">
    <div class="base-container w-container">
        <div data-w-id="502c5dca-196a-0aae-1f67-5b18c9a90237" class="contacts-2-wrapper" style="align-items: flex-start !important">
            <div class="contacts-2-content-wrapper">
                <div class="image-box">
                    <img src="{{ asset('assets/images/contact-image.png') }}" alt="Contact image">
                </div>
                <div class="contacts-title">
                    <h2 class="in-section-title">SEGURO</h2>
                </div>
                <div class="contacts-2-content">
                    <p>Contar con un seguro de salud es esencial para los trámites de extranjería en España. Este servicio asegura el acceso a atención médica y es un requisito clave para la obtención de visados y permisos de residencia</p>
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
