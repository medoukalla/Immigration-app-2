<!-- footer start  -->
<footer>
    <div class="container">
        <!-- row start  -->

        <div class="row">
            <!-- single item start  -->
            <div class="col-lg-2">
                <div class="itemLogo">
                    <a class="navbar-brand" href="{{ route('frontend.index') }}">
                        @if (setting('site.logo') == '')
                            <img src="{{ asset('/img/logo.svg') }}" alt="img" class="img-fluid">
                        @else
                            <img src="{{ asset(setting('site.logo')) }}" alt="img" class="img-fluid">
                        @endif
                    </a>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item start -->
            <div class="col-lg-3">
                <div class="item">
                    <h4>Études en Espagne</h4>
                    <ul>
                        <li><a href="{{ url('fr/page/etudier-la-langue-en-espagne') }}">Étudier la langue en Espagne</a>
                        </li>
                        <li><a href="{{ url('fr/page/etudier-la-selectividad-en-espagne') }}">Étudier la selectividad en
                                Espagne</a></li>
                        <li><a href="{{ url('fr/page/etudier-la-licence-en-espagne') }}">Étudier la licence en
                                Espagne</a></li>
                        <li><a href="{{ url('fr/page/etudier-le-master-en-espagne') }}">Étudier le Master en Espagne</a>
                        </li>
                        <li><a href="{{ url('fr/page/etudier-le-grado-superior-en-espagne') }}">Étudier le Grado
                                supperior</a></li>
                        <li><a href="{{ url('fr/page/Etudier-en-espagne-sans-Selectividad') }}">Étudier en Espagne sans
                                selectividad</a></li>
                    </ul>
                </div>
            </div>
            <!-- single item end -->

            <!-- single item start -->
            <div class="col-lg-3">
                <div class="item">
                    <h4>Services</h4>
                    <ul>
                        <li>
                            <a href="{{ url('fr/page/etudier-en-espagne') }}">
                                Étudier en Espagne</a>
                        </li>
                        <li>
                            <a href="{{ url('fr/page/preparation-de-dossier-visa') }}">
                                Préparation de dossier visa</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.logements') }}">
                                Logement</a>
                        </li>
                        <li>
                            <a href="{{ url('fr/page/residence-non-lucrative') }}">Résidence non lucrative</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.assurance') }}">
                                Assurance</a>
                        </li>
                        <li>
                            <a href="{{ url('fr/page/renouvellement-de-la-carte-sejour-nie') }}">
                                Renouvellement de la carte séjour (NIE)</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item start -->
            <div class="col-lg-2">
                <div class="item">
                    <h4>Liens rapides</h4>
                    <ul>
                        <li><a href="javascript:void(0)" class="chat-buttonb">
                                <img src="{{ asset('img/LivechatGray.png') }}" alt="img" class="img-fluid">
                                <span>Live chat</span>
                            </a></li>
                        <li><a href="{{ route('frontend.index') . '#consulting' }}">
                                <img src="{{ asset('img/PhoneGray.png') }}" alt="img" class="img-fluid">
                                <span>Consultation téléphonique</span>
                            </a></li>

                    </ul>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item start -->
            <div class="col-lg-2">
                <div class="item">
                    <h4>Liens rapides</h4>
                    <ul>
                        <li><a href="mailto:Hola@immiworld.es" class="chat-buttonb">
                                <img src="{{ asset('img/email.svg') }}" alt="img" class="img-fluid">
                                <span>Hola@immiworld.es</span>
                            </a></li>
                        <li><a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0xd72f7e3be779801:0x87987270e73629b8?sa=X&ved=1t:8290&ictx=111"
                                target="_blank">
                                <img src="{{ asset('img/location.svg') }}" alt="img" class="img-fluid">
                                <span>Calle. Maestro Lecuona, 1, Local 7, 29006 Málaga</span>
                            </a></li>

                    </ul>
                </div>
            </div>
            <!-- single item end -->

        </div>

        <!-- row end -->
        <div class="copyright d-flex justify-content-between flex-wrap">
            <div class="itemLeft align-self-center">
                <p>©2023 Immiworld - Tous droits réservés | <a href="{{ route('frontend.politique') }}">Politique de
                        confidentialité</a> | <a href="{{ route('frontend.mention') }}">Mention legal</a> | <a
                        href="{{ route('frontend.terms') }}">Termes et conditions</a> |<span> v1.1</span></p>
            </div>
            <div class="itemRgiht align-self-center">
                <a href="{{ setting('site.whatsapp_link') }}"><img src="{{ asset('img/WhatsappGray.png') }}"
                        alt="img" class="img-fluid"></a>
                <a href="{{ setting('site.facebook') }}"><img src="{{ asset('img/FacebookGray.png') }}" alt="img"
                        class="img-fluid"></a>
                <a href="{{ setting('site.instagram') }}"><img src="{{ asset('img/InstagramGray.png') }}"
                        alt="img" class="img-fluid"></a>
            </div>
        </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"
        integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- LordIcon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- tidio -->
    <script src="//code.tidio.co/nie4zenbkyw45j3d6wkzow25epn2erwo.js" async></script>
    <!-- End tidio -->

    {{-- Main js  --}}
    <script src="{{ asset('js/main.js') }}"></script>


    @livewireScripts
</footer>
