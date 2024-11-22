<x-en.head title="{{ setting('site.title') }}" />

{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Insurance</h1>
            <p>At Immiworld, we guide you in obtaining the mandatory insurance required by Extranjería and the consulate, ensuring a smooth immigration process in Spain.</p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                </div>
                <img {{ asset('assets/images/svg/arrow.svg') }} alt="Flecha de ruta">
                <div class="p-path">
                    Insurance
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
                    <img src="{{ asset('assets/images/contact-image.png') }}" alt="Contact image">
                </div>
                <div class="contacts-title">
                    <h2 class="in-section-title">INSURANCE</h2>
                </div>
                <div class="contacts-2-content">
                    <p>Having health insurance is essential for immigration procedures in Spain. This service ensures access to medical care and is a key requirement for obtaining visas and residence permits.</p>
                </div>
            </div>
            <!-- Contact Form -->
            @livewire('assurance-en')
        </div>
    </div>
</div>

<!-- contact-components -->
<x-en.contact-info />


<!-- Solutions -->
<x-en.solutions />

<x-en.footer />
