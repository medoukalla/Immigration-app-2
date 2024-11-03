<x-sp.head title="{{ setting('site.title') }}" />


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
                <img src="assets/images/svg/arrow.svg" alt="Flecha de ruta">
                <div class="p-path">
                    Extrajería
                </div>
                <img src="assets/images/svg/arrow.svg" alt="Flecha de ruta">
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


<x-sp.blog-index :articles="$posts" />


<x-sp.footer />
