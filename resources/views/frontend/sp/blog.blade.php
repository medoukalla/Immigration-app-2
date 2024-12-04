<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.blog') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Nuestro Blog</h1>
            <p>Explora artículos y novedades sobre extranjería, visas, y asesoría legal. Mantente informado con nuestras guías y consejos prácticos.</p>
            <div class="pages-path">
                <div class="p-path">
                    Inicio
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Extrajería
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


<x-sp.blog-index :articles="$posts" />


<x-sp.footer />
