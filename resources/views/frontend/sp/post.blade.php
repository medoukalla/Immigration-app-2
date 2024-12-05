<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
<x-sp.main-navbar route="{{route('frontend.blog') }}" />

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
                    {{ $post->title }}
                </div>
            </div>
        </div>
        <!-- Qui sommes end -->
    </div>
</div>

<div class="section without-bottom-spacing">
    <div class="base-container w-container">
        <div data-w-id="e4193592-df02-34ae-d569-c968dfa83609" style="opacity:1" class="service-details-content">
            <div class="service-details-content-wrapper">
                <div data-w-id="499d30a1-58a7-eebe-47b5-1b919229da65" style="opacity:1"
                    class="rich-text-style-details w-richtext">
                    <h2>{{ $post->title }}</h2>


                    <p>{{ $post->excerpt }}</p>

                    <br>
                        
                    {!! $post->body !!}
                </div>
            </div>
            <div data-w-id="e4193592-df02-34ae-d569-c968dfa8362c" style="opacity:1"
                class="countries-details-sidebar-wrapper">
                <h5 class="no-margin">Contactanos</h5>
                <h6>Estamos aquí para atenderte!</h6>
                <div class="service-details-sidebar-contacts">
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p>
                        <a href="#"  class="link-contact">
                            Calle. Maestro Lecuona, 1, Local 7, 29006 Málaga
                        </a>
                    </div>
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p><a href="tel:0034657933788" class="link-contact">+34 657 933 788</a>
                    </div>
                    <div class="contacts-detail">
                        <p class="contacts-icon"></p><a href="mailto:hola@immiworld.es"
                            class="link-contact">Hola@immiworld.es</a>
                    </div>
                </div><a href="{{ route('frontend.sp.contact') }}" class="link-with-arrow-underline">Contactanos</a>
            </div>
        </div>
    </div>
</div>

<x-sp.footer />
