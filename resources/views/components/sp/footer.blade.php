<!-- footer start  -->
<footer>
    <div class="container">
        <!-- row start  -->

        <div class="row">
            <!-- single item start  -->
            <div class="col-lg-2">
                <div class="itemLogo">
                    <a class="navbar-brand" href="{{ route('frontend.sp.index') }}">
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
                    <h4>Estudios en España</h4>
                    <ul>
                        <li><a href="{{ url('page/estudiar-el-idioma-en-espana') }}">Estudiar idiomas en España</a></li>
                        <li><a href="{{ url('page/estudiar-selectividad-en-espana') }}">Estudiar la selectividad en
                                España</a></li>
                        <li><a href="{{ url('page/estudia-el-master-en-espana') }}">Estudiar el máster en España</a>
                        </li>
                        <li><a href="{{ url('page/estudiar-el-grado-superior-en-espana') }}">Estudiar el Grado
                                Superior</a></li>
                        <li><a href="{{ url('page/estudiar-la-licencia-sin-selectividad') }}">Estudiar en España sin
                                selectividad</a></li>
                        <li><a href="{{ url('page/estudiar-la-licenciatura-en-espana') }}">Estudiar el grado en
                                España</a></li>
                    </ul>
                </div>
            </div>
            <!-- single item end -->

            <!-- single item start -->
            <div class="col-lg-3">
                <div class="item">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="{{ route('frontend.sp.etudier') }}">Estudiar en España</a></li>
                        <li><a href="{{ url('page/preparacion-de-expediente-de-visdao') }}">Preparación de expediente
                                de visado</a>
                        </li>
                        <li><a href="{{ route('frontend.sp.logements') }}">Alojamiento</a></li>
                        <li><a href="{{ url('page/residencia-no-lucrativa') }}">Residencia no lucrativa</a></li>
                        <li><a href="{{ route('frontend.sp.assurance') }}">Seguro</a></li>
                        <li><a href="{{ url('page/renovacion-de-la-tarjeta-de-residencia-nie') }}">Renovación de la
                                tarjeta de residencia (NIE)</a></li>
                    </ul>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item start -->
            <div class="col-lg-2">
                <div class="item">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="javascript:void(0)" class="chat-buttonb">
                                <img src="{{ asset('img/LivechatGray.png') }}" alt="img" class="img-fluid">
                                <span>Chat en Línea</span>
                            </a></li>
                        <li><a href="{{ route('frontend.sp.index') . '#consulting' }}">
                                <img src="{{ asset('img/PhoneGray.png') }}" alt="img" class="img-fluid">
                                <span>Consultas telefónicas</span>
                            </a></li>

                    </ul>
                </div>
            </div>
            <!-- single item end -->
            <!-- single item start -->
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
                <p>©2023 Immiworld - todos los derechos reservados | <a
                        href="{{ route('frontend.sp.politique') }}">política de confidencialidad</a> | <a
                        href="{{ route('frontend.sp.mention') }}">Aviso legal</a> | <a
                        href="{{ route('frontend.sp.terms') }}">Términos y Condiciones</a> |<span> v1.1</span>
                </p>

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
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"
    integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
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
