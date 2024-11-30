<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.programmes') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Programas de estudios</h1>
            <p>
                Descubre una amplia variedad de programas educativos en España, desde universidades hasta cursos profesionales. Te asesoramos para que elijas el programa adecuado y cumplas con todos los requisitos para estudiar en España.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Servicios
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Programas de estudios
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

<div class="section programmes-section" style="padding-top:0px;">
    {{-- Programmes de Séjour linguistique --}}
    <div class="programmes-box base-container w-container">
            {{-- Programme Heading --}}
            <div class="programme-heading">
                Programas de <span>Español</span>
            </div>
            <div class="programmes-wrapper">
                @foreach ( $linguistique as $programe )    
                    <div class="programme-wrapper">
                        <div class="p-img">
                            <div class="p-img-content">
                                <div class="p-img-top">
                                    <div class="year">
                                        {{ $programe->year }}
                                    </div>
                                    <div class="branch">Español</div>
                                </div>
                                <div class="p-img-bottom">
                                    <div class="p-title">
                                        {{ $programe->title }}
                                    </div>
                                    <div class="p-price">
                                        Desde <span>{{ $programe->price }}€</span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                        </div>
                        <div class="p-content">
                            <div class="p-infos">
                                <div>
                                    <span>Ciudad :</span> {{ $programe->city }}
                                </div> 
                                <div>
                                    <span>Duracion del programa :</span> {{ $programe->duree_de_programme }}
                                </div> 
                            </div>
                            <div class="primary-button p-btn">
                                <a href="https://wa.me/+34657933788" target="_blanck">Contáctanos por whatsapp para más información</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    {{-- Programmes de Séjour linguistique --}}
    <div class="programmes-box base-container w-container">
        {{-- Programme Heading --}}
        <div class="programme-heading">
            Programas de <span>Selectividad</span>
        </div>
        <div class="programmes-wrapper">
            @foreach ( $selectividad as $programe )    
                <div class="programme-wrapper">
                    <div class="p-img">
                        <div class="p-img-content">
                            <div class="p-img-top">
                                <div class="year">
                                    {{ $programe->year }}
                                </div>
                                <div class="branch">Selectividad</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    Desde <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>Ciudad :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duracion del programa :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contáctanos por whatsapp para más información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Programmes de Séjour linguistique --}}
    <div class="programmes-box base-container w-container">
        {{-- Programme Heading --}}
        <div class="programme-heading">
            Programas de <span>licenciatura</span>
        </div>
        <div class="programmes-wrapper">
            @foreach ( $licence as $programe )    
                <div class="programme-wrapper">
                    <div class="p-img">
                        <div class="p-img-content">
                            <div class="p-img-top">
                                <div class="year">
                                    {{ $programe->year }}
                                </div>
                                <div class="branch">licenciatura</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    Desde <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>Ciudad :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duracion del programa :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contáctanos por whatsapp para más información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Programmes de Séjour linguistique --}}
    <div class="programmes-box base-container w-container">
        {{-- Programme Heading --}}
        <div class="programme-heading">
            Programas de <span>Master</span>
        </div>
        <div class="programmes-wrapper">
            @foreach ( $master as $programe )    
                <div class="programme-wrapper">
                    <div class="p-img">
                        <div class="p-img-content">
                            <div class="p-img-top">
                                <div class="year">
                                    {{ $programe->year }}
                                </div>
                                <div class="branch">Master</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    Desde <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>Ciudad :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duracion del programa :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contáctanos por whatsapp para más información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Programmes de Séjour linguistique --}}
    <div class="programmes-box base-container w-container">
        {{-- Programme Heading --}}
        <div class="programme-heading">
            Programmes de <span>Grado superior</span>
        </div>
        <div class="programmes-wrapper">
            @foreach ( $grade_sup_a as $programe )    
                <div class="programme-wrapper">
                    <div class="p-img">
                        <div class="p-img-content">
                            <div class="p-img-top">
                                <div class="year">
                                    {{ $programe->year }}
                                </div>
                                <div class="branch">Grado superior</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    Desde <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>Ciudad :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duracion del programa :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contáctanos por whatsapp para más información</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- contact-components -->
<x-sp.contact-info />

    <!-- Solutions -->
    <x-sp.solutions />
</div>

<style>
    /* Style to change button to green  */
    .primary-button.p-btn {
        background-color: #25c160 !important;
        border-color: #25D366 !important;
    }
    .primary-button.p-btn a {
        color: white;
        font-weight: 500;
    }
</style>
<x-sp.footer />