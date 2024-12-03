<x-en.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-en.main-navbar route="{{route('frontend.sp.programmes') }}" />


{{-- Hero section START  --}}
<div class="pages-banner blog">
    <div class="base-container w-container">
        <div class="min-hero-wrapper">
            <h1>Study Programs</h1>
            <p>
                Discover a wide range of educational programs in Spain, from universities to professional courses. We provide expert guidance to help you choose the right program and ensure you meet all the requirements to study in Spain.
            </p>
            <div class="pages-path">
                <div class="p-path">
                    <a href="{{ route('frontend.sp.index') }}">Welcome</a>
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Services
                </div>
                <img src="{{ asset('assets/images/svg/arrow.svg') }}" alt="Flecha de ruta">
                <div class="p-path">
                    Study Programs
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
                <span>Spanish</span> Language Programs
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
                                    <div class="branch">Spanish</div>
                                </div>
                                <div class="p-img-bottom">
                                    <div class="p-title">
                                        {{ $programe->title }}
                                    </div>
                                    <div class="p-price">
                                        From  : <span>{{ $programe->price }}€</span>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                        </div>
                        <div class="p-content">
                            <div class="p-infos">
                                <div>
                                    <span>City :</span> {{ $programe->city }}
                                </div> 
                                <div>
                                    <span>Duration of the program :</span> {{ $programe->duree_de_programme }}
                                </div> 
                            </div>
                            <div class="primary-button p-btn">
                                <a href="https://wa.me/+34657933788" target="_blanck">Contact us via whatsapp for more information</a>
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
            <span>Selectividad</span> Programs
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
                                    From  : <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>City :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duration of the program :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contact us via whatsapp for more information</a>
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
            <span>Bachelor’s Degree</span> Programs
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
                                <div class="branch">Bachelor’s Degree</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    From  : <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>City :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duration of the program :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contact us via whatsapp for more information</a>
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
            <span>Master’s Degree</span> Programs
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
                                <div class="branch">Master’s Degree</div>
                            </div>
                            <div class="p-img-bottom">
                                <div class="p-title">
                                    {{ $programe->title }}
                                </div>
                                <div class="p-price">
                                    From  : <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>City :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duration of the program :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contact us via whatsapp for more information</a>
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
            <span>Grado superior</span> Programs
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
                                    From  : <span>{{ $programe->price }}€</span>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/'.$programe->image) }}" alt="City image">
                    </div>
                    <div class="p-content">
                        <div class="p-infos">
                            <div>
                                <span>City :</span> {{ $programe->city }}
                            </div> 
                            <div>
                                <span>Duration of the program :</span> {{ $programe->duree_de_programme }}
                            </div> 
                        </div>
                        <div class="primary-button p-btn">
                            <a href="https://wa.me/+34657933788" target="_blanck">Contact us via whatsapp for more information</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- contact-components -->
<x-en.contact-info />


    <!-- Solutions -->
    <x-en.solutions />
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

<x-en.footer />