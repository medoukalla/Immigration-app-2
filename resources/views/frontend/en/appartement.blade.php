<x-en.head title="{{ setting('site.title') . ' - ' . $appartement->title }}" />

<!-- headerTop end -->
<div class="wrapper bg-dark">

    <x-en.header_menu :langLink="$langLink" />

</div>
<!-- wrapper end  -->

<!-- Qui sommes start  -->
<div class="wrapper bg-dark">
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="{{ route('frontend.sp.logements') }}">alojamiento</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="javascript:void(0)">Verificar</a>
            </p>
            <h2 class="text-center">VÉRIFIER</h2>
        </div>
    </div>
</div>
<!-- Qui sommes end -->

<!-- main start  -->
<main>
    <div class="Besoin">
        <div class="container">
            <!-- .row start  -->
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-7">
                    <div class="itemLeft">
                        <div class="itemLeft08">
                            <div class="RetourAux d-flex justify-content-between align-items-center">
                                <a href="{{ route('frontend.sp.logements') }}">
                                    <img src="{{ asset('img/arrowLeft.svg') }}" alt="img" class="img-fluid">
                                    volver
                                </a>
                                {{-- For guys / girls --}}
                                @if ($appartement->for_girls == true)
                                    <div class="sex d-flex align-items-center gap-2">
                                        <img src="{{ asset('img/girl-icon.svg') }}" alt="girls-icon">
                                        <span>Solo chicas</span>
                                    </div>
                                @else
                                    <div class="sex d-flex align-items-center gap-2">
                                        <img src="{{ asset('img/boys-icon.svg') }}" alt="girls-icon">
                                        <span>Solo chicos</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Chambre à Barcelone start  -->
                            <div class="ChambreBarcelone">
                                <h2>{{ $appartement->title }}</h2>
                                <div class="sliderWrappImg">


                                    @foreach (json_decode($appartement->images) as $image)
                                        <div class="sliderImg">
                                            <img src="{{ asset('storage') . '/' . $image }}" alt="img"
                                                class="img-fluid">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <style>
                                .slick-list {
                                    max-height: 370px !important;
                                }
                            </style>

                            <!-- Chambre à Barcelone end -->
                            <!-- Détails de la chambre start  -->
                            <div class="detailsDe">
                                <!-- itemDetails start  -->
                                <div class="itemDetails">
                                    <h2>Información general del piso</h2>
                                    <div class=" d-flex justify-content-between flex-wrap">
                                        <div class="room-item item03 mb-4">
                                            <div class="d-flex align-items-start gap-2">
                                                <img src="{{ asset('img/bed.svg') }}" alt="bed">
                                                <p>Número de dormitorios</p>
                                            </div>
                                            <h4>
                                                {{ $appartement->nombre_de_places }}
                                                @if ($appartement->nombre_de_places < 2)
                                                    Plaza
                                                @else
                                                    Plazas
                                                @endif
                                            </h4>
                                        </div>

                                        <div class="room-item item03 mb-4">
                                            <div class="d-flex align-items-start gap-2">
                                                <img src="{{ asset('img/price.svg') }}" alt="bed">
                                                <p>Precio</p>
                                            </div>
                                            <h4>{{ $appartement->first_payment + $appartement->Frais_service }}€ /mes
                                            </h4>
                                        </div>

                                        <div class="room-item item03 mb-4">
                                            <div class="d-flex align-items-start gap-2">
                                                <img src="{{ asset('img/calendar.svg') }}" alt="bed">
                                                @php $date = strtotime($appartement->disponibilite);  @endphp
                                                <p>Disponibilidad</p>
                                            </div>
                                            <h4>{{ date('d/M', $date) }}</h4>
                                        </div>

                                    </div>
                                </div>
                                <!-- itemDetails end -->
                                <!-- itemDetails start  -->
                                <div class="itemDetails">
                                    <h2>Detalles del piso</h2>
                                    <div class="container">
                                        <div class="row">
                                            {{-- Wifi  --}}
                                            @if ($appartement->option_wifi == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Wifi</p>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.79761 9.82857C5.96896 7.65726 8.91391 6.43744 11.9846 6.43744C15.0554 6.43744 18.0003 7.65726 20.1717 9.82857"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M23.4461 5.39409C21.9408 3.88871 20.1538 2.69457 18.1871 1.87986C16.2203 1.06514 14.1124 0.645813 11.9835 0.645813C9.85471 0.645813 7.74674 1.06514 5.77999 1.87986C3.81323 2.69457 2.02622 3.88871 0.520996 5.39409"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M7.0708 14.2596C7.7159 13.6144 8.48179 13.1026 9.32471 12.7534C10.1676 12.4042 11.0711 12.2245 11.9835 12.2245C12.8959 12.2245 13.7993 12.4042 14.6423 12.7534C15.4852 13.1026 16.2511 13.6144 16.8962 14.2596"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M20.1717 9.82857C18.0003 7.65726 15.0554 6.43744 11.9846 6.43744C8.91391 6.43744 5.96896 7.65726 3.79761 9.82857"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.8974 14.2596C16.2523 13.6144 15.4864 13.1026 14.6435 12.7534C13.8005 12.4042 12.8971 12.2245 11.9847 12.2245C11.0723 12.2245 10.1689 12.4042 9.32593 12.7534C8.48301 13.1026 7.71712 13.6144 7.07202 14.2596"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.66772 20.3301C9.66772 20.6342 9.72762 20.9353 9.84399 21.2163C9.96037 21.4972 10.1309 21.7525 10.346 21.9676C10.561 22.1826 10.8163 22.3532 11.0972 22.4695C11.3782 22.5859 11.6793 22.6458 11.9834 22.6458C12.2875 22.6458 12.5886 22.5859 12.8696 22.4695C13.1505 22.3532 13.4058 22.1826 13.6208 21.9676C13.8358 21.7525 14.0064 21.4972 14.1228 21.2163C14.2392 20.9353 14.2991 20.6342 14.2991 20.3301C14.2991 20.026 14.2392 19.7249 14.1228 19.444C14.0064 19.163 13.8358 18.9077 13.6208 18.6927C13.4058 18.4777 13.1505 18.3071 12.8696 18.1907C12.5886 18.0744 12.2875 18.0145 11.9834 18.0145C11.6793 18.0145 11.3782 18.0744 11.0972 18.1907C10.8163 18.3071 10.561 18.4777 10.346 18.6927C10.1309 18.9077 9.96037 19.163 9.84399 19.444C9.72762 19.7249 9.66772 20.026 9.66772 20.3301Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option outdoor area --}}
                                            @if ($appartement->option_outdoor_area == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Área al aire libre</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21"
                                                        height="24" viewBox="0 0 21 24" fill="none">
                                                        <path
                                                            d="M6.92351 21.662C7.00882 22.3096 7.40823 22.7798 7.87453 22.7798H13.5729C14.0392 22.7798 14.4386 22.3096 14.5249 21.662L15.6136 15.2307C15.6864 14.9155 15.6492 14.5848 15.5081 14.2937C15.367 14.0025 15.1306 13.7684 14.838 13.6302C14.7798 13.6148 14.7199 13.607 14.6596 13.6069H6.78585C6.25072 13.6069 5.81641 14.2206 5.81641 14.9777C5.81655 15.0623 5.82206 15.1468 5.83289 15.2307L6.92351 21.662Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.66331 13.3122C8.94419 10.0415 7.31919 7.03909 4.97412 4.64835"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M8.69958 3.63624C10.9962 6.22949 10.938 8.63564 9.42473 9.97541C7.91143 11.3152 5.51594 11.0854 3.22224 8.49216C0.928546 5.89891 0.288715 2.71042 1.80201 1.37065C3.31531 0.0308852 6.40298 1.04686 8.69958 3.63624Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.7937 13.6069C13.2891 12.0297 13.1873 10.6346 14.7927 8.17032"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M13.7261 5.50919C11.9714 7.60416 12.0684 9.50038 13.2908 10.5251C14.5133 11.5498 16.3931 11.3132 18.1526 9.21827C19.9121 7.12331 20.3406 4.59501 19.122 3.57128C17.9034 2.54755 15.4818 3.4152 13.7261 5.50919Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option living with --}}
                                            <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                <p>
                                                    @if ($appartement->option_living_alone == true)
                                                        Sin dueño
                                                    @else
                                                        Sin dueño
                                                    @endif
                                                </p>
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M23.0003 23.1255C22.9544 21.7796 22.6287 20.458 22.0437 19.2449C21.3302 17.8177 18.2176 16.8536 14.3915 15.4188V12.5492C14.837 12.215 15.1985 11.7818 15.4476 11.2837C15.6966 10.7856 15.8263 10.2364 15.8263 9.67956C16.3045 9.67956 16.7828 7.76649 15.8263 7.28823C15.8263 7.00127 17.1071 4.60993 16.7828 2.98383C16.3045 0.592491 9.6088 0.592491 9.13053 2.50556C6.26093 2.50556 8.174 6.89987 8.174 7.28823C7.21747 7.76649 7.69573 9.67956 8.174 9.67956C8.174 10.2364 8.30365 10.7856 8.55269 11.2837C8.80173 11.7818 9.16331 12.215 9.6088 12.5492V15.4188C5.78267 16.8536 2.66915 17.8177 1.95653 19.2449C1.3716 20.458 1.04584 21.7796 1 23.1255H23.0003Z"
                                                        stroke="black" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>

                                            {{-- option elevator --}}
                                            @if ($appartement->option_elevator == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Ascensor</p>
                                                    <svg width="23" height="24" viewBox="0 0 23 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.47752 0.645813H20.608C20.608 0.645813 21.5645 0.645813 21.5645 1.60233V21.6893C21.5645 21.6893 21.5645 22.6458 20.608 22.6458H1.47752C1.47752 22.6458 0.520996 22.6458 0.520996 21.6893V1.60233C0.520996 1.60233 0.520996 0.645813 1.47752 0.645813Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M11.0427 22.6458V7.34143" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M17.7385 22.6458V7.81969C17.7385 7.69285 17.6881 7.5712 17.5984 7.48151C17.5087 7.39182 17.3871 7.34143 17.2602 7.34143H4.82543C4.69859 7.34143 4.57694 7.39182 4.48725 7.48151C4.39756 7.5712 4.34717 7.69285 4.34717 7.81969V22.6458"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M6.26001 4.95018L7.35618 3.85401C7.40061 3.80947 7.45339 3.77413 7.51149 3.75002C7.5696 3.72591 7.63189 3.7135 7.69479 3.7135C7.7577 3.7135 7.81999 3.72591 7.87809 3.75002C7.9362 3.77413 7.98897 3.80947 8.0334 3.85401L9.12958 4.95018"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.9558 3.51538L14.052 4.61155C14.0964 4.65609 14.1492 4.69143 14.2073 4.71554C14.2654 4.73965 14.3277 4.75206 14.3906 4.75206C14.4535 4.75206 14.5158 4.73965 14.5739 4.71554C14.632 4.69143 14.6848 4.65609 14.7292 4.61155L15.8254 3.51538"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option accessibility --}}
                                            @if ($appartement->option_accessibility == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Accesibilidad</p>
                                                    <svg width="18" height="24" viewBox="0 0 18 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.55444 3.5166C5.55444 4.15089 5.80641 4.7592 6.25493 5.20771C6.70344 5.65622 7.31175 5.90819 7.94604 5.90819C8.58033 5.90819 9.18864 5.65622 9.63715 5.20771C10.0857 4.7592 10.3376 4.15089 10.3376 3.5166C10.3376 3.20253 10.2758 2.89153 10.1556 2.60137C10.0354 2.31121 9.85923 2.04756 9.63715 1.82548C9.41507 1.6034 9.15143 1.42724 8.86126 1.30705C8.5711 1.18686 8.26011 1.125 7.94604 1.125C7.63197 1.125 7.32098 1.18686 7.03082 1.30705C6.74065 1.42724 6.47701 1.6034 6.25493 1.82548C6.03285 2.04756 5.85668 2.31121 5.73649 2.60137C5.6163 2.89153 5.55444 3.20253 5.55444 3.5166Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M9.38115 9.25643C9.38115 8.87586 9.22996 8.51087 8.96086 8.24176C8.69175 7.97265 8.32676 7.82147 7.94619 7.82147C7.56561 7.82147 7.20063 7.97265 6.93152 8.24176C6.66241 8.51087 6.51123 8.87586 6.51123 9.25643V16.9095C6.51123 17.2901 6.66241 17.6551 6.93152 17.9242C7.20063 18.1933 7.56561 18.3445 7.94619 18.3445H12.2511C12.3322 18.3445 12.412 18.3651 12.4829 18.4045C12.5539 18.4438 12.6137 18.5005 12.6567 18.5693L14.4858 21.4966C14.5856 21.6564 14.716 21.795 14.8694 21.9044C15.0229 22.0138 15.1963 22.0919 15.3799 22.1343C15.5636 22.1767 15.7537 22.1825 15.9396 22.1513C16.1254 22.1202 16.3033 22.0528 16.4631 21.9529C16.6229 21.8531 16.7615 21.7227 16.8709 21.5693C16.9803 21.4158 17.0585 21.2424 17.1008 21.0588C17.1432 20.8751 17.149 20.685 17.1179 20.4991C17.0868 20.3133 17.0193 20.1354 16.9195 19.9756L15.0904 17.0482C14.7907 16.5654 14.3725 16.1673 13.8755 15.8919C13.3785 15.6164 12.8193 15.4728 12.2511 15.4746H9.85946C9.79665 15.4746 9.73445 15.4622 9.67642 15.4382C9.61839 15.4141 9.56566 15.3789 9.52124 15.3345C9.47683 15.2901 9.44159 15.2373 9.41755 15.1793C9.39352 15.1213 9.38115 15.0591 9.38115 14.9963V9.25643Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M11.4206 20.362C10.9395 21.1552 10.2733 21.8199 9.47906 22.2992C8.68486 22.7786 7.7863 23.0583 6.86034 23.1145C5.93438 23.1706 5.00861 23.0015 4.16232 22.6216C3.31602 22.2416 2.57442 21.6623 2.00102 20.933C1.42762 20.2038 1.03951 19.3465 0.869921 18.4345C0.700335 17.5224 0.754329 16.5829 1.02728 15.6963C1.30023 14.8097 1.784 14.0025 2.43716 13.3437C3.09033 12.685 3.89342 12.1944 4.77767 11.9139"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option cable tv --}}
                                            @if ($appartement->option_cable_tv == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Televisión por cable</p>
                                                    <svg width="31" height="24" viewBox="0 0 31 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.81511 0.645813H28.9915C28.9915 0.645813 30.2856 0.645813 30.2856 1.93993V17.4693C30.2856 17.4693 30.2856 18.7634 28.9915 18.7634H1.81511C1.81511 18.7634 0.520996 18.7634 0.520996 17.4693V1.93993C0.520996 1.93993 0.520996 0.645813 1.81511 0.645813Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M13.4622 22.6458V18.7635" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.0503 18.7635V22.6458" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.28564 22.6458H21.2268" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option central heating --}}
                                            @if ($appartement->option_central_heating == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Calefacción central</p>
                                                    <svg width="13" height="24" viewBox="0 0 13 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.05036 15.9869V3.03756C7.05036 2.5303 6.84885 2.04382 6.49017 1.68513C6.13148 1.32645 5.645 1.12494 5.13774 1.12494C4.63048 1.12494 4.144 1.32645 3.78531 1.68513C3.42663 2.04382 3.22512 2.5303 3.22512 3.03756V15.9869C2.49587 16.408 1.92592 17.0579 1.60368 17.8358C1.28144 18.6138 1.2249 19.4764 1.44284 20.2897C1.66079 21.1031 2.14103 21.8218 2.80908 22.3345C3.47714 22.8471 4.29567 23.1249 5.13774 23.1249C5.97981 23.1249 6.79834 22.8471 7.4664 22.3345C8.13445 21.8218 8.61469 21.1031 8.83264 20.2897C9.05058 19.4764 8.99404 18.6138 8.6718 17.8358C8.34956 17.0579 7.77961 16.408 7.05036 15.9869Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4.1814 19.2948C4.1814 19.4204 4.20613 19.5447 4.25419 19.6608C4.30225 19.7768 4.37269 19.8822 4.46149 19.971C4.5503 20.0598 4.65572 20.1303 4.77174 20.1783C4.88777 20.2264 5.01212 20.2511 5.13771 20.2511C5.26329 20.2511 5.38765 20.2264 5.50367 20.1783C5.6197 20.1303 5.72512 20.0598 5.81392 19.971C5.90272 19.8822 5.97316 19.7768 6.02122 19.6608C6.06928 19.5447 6.09402 19.4204 6.09402 19.2948C6.09402 19.1692 6.06928 19.0449 6.02122 18.9288C5.97316 18.8128 5.90272 18.7074 5.81392 18.6186C5.72512 18.5298 5.6197 18.4594 5.50367 18.4113C5.38765 18.3632 5.26329 18.3385 5.13771 18.3385C5.01212 18.3385 4.88777 18.3632 4.77174 18.4113C4.65572 18.4594 4.5503 18.5298 4.46149 18.6186C4.37269 18.7074 4.30225 18.8128 4.25419 18.9288C4.20613 19.0449 4.1814 19.1692 4.1814 19.2948Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M5.13794 18.3386V3.0376" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.96313 3.0376H11.8321" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.96313 7.81915H9.91944" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M8.96313 12.6006H9.91944" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option air conditioning --}}
                                            @if ($appartement->option_air_conditioning == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Aire acondicionado</p>
                                                    <svg width="26" height="24" viewBox="0 0 26 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.04762 1.08331H24.0476C24.0476 1.08331 25.0952 1.08331 25.0952 2.13093V11.5595C25.0952 11.5595 25.0952 12.6071 24.0476 12.6071H2.04762C2.04762 12.6071 1 12.6071 1 11.5595V2.13093C1 2.13093 1 1.08331 2.04762 1.08331Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M3.09546 12.6071V11.5595C3.09546 11.2817 3.20583 11.0152 3.4023 10.8187C3.59877 10.6223 3.86523 10.5119 4.14308 10.5119H21.9526C22.2304 10.5119 22.4969 10.6223 22.6934 10.8187C22.8898 11.0152 23.0002 11.2817 23.0002 11.5595V12.6071"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M4.14282 4.2262H21.9523" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M4.14282 7.36902H21.9523" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path
                                                            d="M4.66676 14.7023C4.09727 15.267 3.72918 16.0032 3.61914 16.7976C3.72918 17.592 4.09727 18.3281 4.66676 18.8928"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M4.66675 23.0833C5.23623 22.5186 5.60433 21.7824 5.71437 20.9881C5.60433 20.1937 5.23623 19.4575 4.66675 18.8928"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M21.4287 14.7023C20.8592 15.267 20.4911 16.0032 20.3811 16.7976C20.4911 17.592 20.8592 18.3281 21.4287 18.8928"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M21.4287 23.0833C21.9982 22.5186 22.3663 21.7824 22.4763 20.9881C22.3663 20.1937 21.9982 19.4575 21.4287 18.8928"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M13.0476 15.75V22.0357" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M10.3259 17.3214L15.7694 20.4643" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15.7694 17.3214L10.3259 20.4643" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif

                                            {{-- option towels linen --}}
                                            @if ($appartement->option_towels_linen == true)
                                                <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                    <p>Toallas y ropa de cama</p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M18.1948 12.4783H22.0208C25.8221 12.4783 17.1483 5.30435 12.0156 5.30435C6.48693 5.30435 -1.79654 12.4783 1.93389 12.4783H5.75998"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M13.4123 2.43478C13.4123 2.15101 13.3281 1.87361 13.1705 1.63766C13.0128 1.40171 12.7887 1.21781 12.5266 1.10922C12.2644 1.00062 11.9759 0.972208 11.6976 1.02757C11.4193 1.08293 11.1636 1.21958 10.963 1.42024C10.7623 1.6209 10.6257 1.87655 10.5703 2.15487C10.5149 2.43319 10.5433 2.72168 10.6519 2.98385C10.7605 3.24602 10.9444 3.47011 11.1804 3.62776C11.4163 3.78542 11.6937 3.86957 11.9775 3.86957L12.0158 5.30435"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M18.1948 11.5217C18.1948 11.0144 17.9932 10.5278 17.6345 10.169C17.2757 9.81026 16.7891 9.6087 16.2817 9.6087H7.67305C7.42183 9.6087 7.17306 9.65819 6.94096 9.75433C6.70886 9.85047 6.49797 9.99138 6.32033 10.169C6.14268 10.3467 6.00177 10.5576 5.90563 10.7897C5.80949 11.0218 5.76001 11.2705 5.76001 11.5217V22.5217C5.76001 22.6486 5.8104 22.7702 5.90009 22.8599C5.98978 22.9496 6.11143 23 6.23827 23H17.7165C17.8434 23 17.965 22.9496 18.0547 22.8599C18.1444 22.7702 18.1948 22.6486 18.1948 22.5217V11.5217Z"
                                                            stroke="black" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M5.75806 20.1304H18.1928" stroke="black"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <!-- itemDetails end -->


                                {{-- Get spaces and items  --}}
                                @foreach ($appartement->spaces as $space)
                                    <div class="itemDetails">
                                        <h2>{{ $space->name_sp }}</h2>

                                        <div class="container">
                                            <div class="row">
                                                @foreach ($space->items($space->id) as $item)
                                                    <div class="col-6 col-md-3 px-0 text-center mb-4">
                                                        <p>{{ $item->name_sp }}</p>
                                                        {!! $item->svg_code !!}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                @endforeach


                                {{-- Get rules if exists  --}}

                                <div class="itemDetails ">
                                    <h2>Normas</h2>
                                    <div class="container">
                                        <div class="row">
                                            @php
                                                if ($appartement->rules->count() == 0) {
                                                    if ($appartement->translate != null) {
                                                        $rules = $appartement->translate()->rules;
                                                    } else {
                                                        $rules = [];
                                                    }
                                                } else {
                                                    $rules = $appartement->rules;
                                                }
                                            @endphp
                                            @foreach ($rules as $rule)
                                                <div
                                                    class="col-6 col-md-4 px-0 text-center mb-4 @if ($rule->status == 0) optionInactive @endif ">
                                                    <p>{{ $rule->rule_sp }}</p>
                                                    {!! $rule->item->svg_code !!}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                                {{-- Get conditions if exists  --}}
                                <div class="itemDetails app-conditions ">
                                    <h2>Condiciones de alquiler</h2>
                                    <div class="container">
                                        <div class="row">
                                            @php
                                                if ($appartement->conditions()->count() == 0) {
                                                    if ($appartement->translate != null) {
                                                        $conditions = $appartement->translate()->conditions;
                                                    } else {
                                                        $conditions = [];
                                                    }
                                                } else {
                                                    $conditions = $appartement->conditions;
                                                }
                                            @endphp
                                            @foreach ($conditions as $key => $condition)
                                                <div class="col-6 col-md-6 px-0 text-center mb-4">
                                                    <button class="bg-transparent border-0" role="button"
                                                        onclick="$('.collapse.show').removeClass('show')"
                                                        href="#collapseCondition{{ $key }}"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseCondition{{ $key }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseCondition{{ $key }}">
                                                        <p>{{ $condition->name_sp }}</p>
                                                        {!! $condition->item->svg_code !!}
                                                    </button>
                                                </div>
                                            @endforeach

                                            <div class="col-12">
                                                @foreach ($conditions as $key => $condition)
                                                    <div class="collapse mt-2"
                                                        id="collapseCondition{{ $key }}">
                                                        <div class="cnt-conditions card card-body">
                                                            {!! $condition->content_sp !!}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>



                                {{-- Get contracts if exists  --}}

                                <div class="itemDetails">
                                    <h2>Detalles del contrato</h2>
                                    <div class="container">
                                        <div class="row">

                                            @php

                                                if ($appartement->contracts()->count() == 0) {
                                                    if ($appartement->translate != null) {
                                                        $contracts = $appartement->translate()->contracts;
                                                    } else {
                                                        $contracts = [];
                                                    }
                                                } else {
                                                    $contracts = $appartement->contracts;
                                                }
                                            @endphp
                                            @foreach ($contracts as $key => $contract)
                                                <div class="col-6 col-md-6 px-0 text-center mb-4">
                                                    <button class="bg-transparent border-0" role="button"
                                                        onclick="$('.collapse.show').removeClass('show')"
                                                        href="#collapseContract{{ $key }}"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseContract{{ $key }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseContract{{ $key }}">
                                                        <p>{{ $contract->name_sp }}</p>
                                                        {!! $contract->item->svg_code !!}
                                                    </button>
                                                </div>
                                            @endforeach


                                            <div class="col-12">
                                                @foreach ($contracts as $key => $contract)
                                                    <div class="collapse mt-2"
                                                        id="collapseContract{{ $key }}">
                                                        <div class="cnt-conditions card card-body">
                                                            {!! $contract->content_sp !!}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>



                                <!-- Description start  -->
                                <div class="description">
                                    <h2>Descripción</h2>
                                    <p>{{ $appartement->description }}</p>
                                </div>
                                <!-- Description end -->



                                <!-- Emplacement start  -->
                                <div class="mapping Emplacement">
                                    <h4>Ubicación</h4>

                                    @if (!is_null($appartement->google_map_code))
                                        <div class="iframe-box ratio ratio-21x9">
                                            {!! $appartement->google_map_code !!}
                                        </div>
                                    @endif
                                    <p>{{ $appartement->address }}</p>

                                </div>
                                <!-- Emplacement end  -->

                                @if (isset($appartement->plans_etage))
                                    <!-- Plans d'étage start  -->
                                    <div class="PlansDetage">
                                        <h4>Planos de planta</h4>
                                        <img src="{{ asset('storage' . '/' . $appartement->plans_etage) }}"
                                            alt="img" class="img-fluid">
                                    </div>
                                    <!-- Plans d'étage end  -->
                                @endif


                                <!-- why choice immiworld start  -->
                                <div class="why-choice-us">
                                    <h4>¿Por qué elegir immiworld?</h4>
                                    <div class="paymentItem1 appartment-hints">
                                        <!-- Swiper -->
                                        <div class="swiper mySwiper swip-hight">
                                            <div class="swiper-wrapper" id="swiperWrapper">
                                                <!-- House Rules -->
                                                <div
                                                    class="swiper-slide d-flex flex-column align-items-start justify-content-start">
                                                    <div class="top">
                                                        <div class="top-img">
                                                            <img src="{{ asset('img/renting.svg') }}"
                                                                alt="Hassle-free Renting" />
                                                        </div>
                                                        <div class="title">Alquiler sin complicaciones</div>
                                                    </div>
                                                    <p class="mt-2">
                                                        Olvídate de molestas llamadas, procesos de selección o
                                                        avalistas
                                                        en casi todas las propiedades... con Immiworld
                                                        encontrarás
                                                        lo
                                                        que buscas, encontrando un nuevo lugar al que llamar
                                                        hogar,
                                                        ¡desde cualquier parte del mundo!
                                                    </p>
                                                </div>
                                                <!-- After request is sent -->
                                                <div
                                                    class="swiper-slide d-flex flex-column align-items-start justify-content-start">
                                                    <div class="top">
                                                        <div class="top-img">
                                                            <img src="{{ asset('img/baggage.svg') }}"
                                                                alt="Hassle-free Renting" />
                                                        </div>
                                                        <div class="title">Protección contra estafas</div>
                                                    </div>
                                                    <p class="mt-2">
                                                        Tu tranquilidad es nuestra prioridad. En Immiworld, garantizamos
                                                        que la propiedad reservada sea exactamente lo que encuentras al
                                                        mudarte. Si surge algún problema en las primeras 24 horas
                                                        después de tu llegada, infórmanos y activa nuestra Protección
                                                        del Inquilino. Nos aseguraremos de abordar la situación y solo
                                                        realizaremos el pago al arrendador después de 24 horas de tu
                                                        mudanza, buscando siempre una solución para ti. ¡Confía en
                                                        nosotros para una experiencia segura y sin preocupaciones!
                                                    </p>
                                                </div>
                                                <!-- When you move in -->
                                                <div
                                                    class="swiper-slide d-flex flex-column align-items-start justify-content-start">
                                                    <div class="top">
                                                        <div class="top-img">
                                                            <img src="{{ asset('img/certificate.svg') }}"
                                                                alt="Hassle-free Renting" />
                                                        </div>
                                                        <div class="title">Certificado de Alojamiento para Visado
                                                        </div>
                                                    </div>
                                                    <p class="mt-2">
                                                        Si necesita documentación que verifique su alojamiento
                                                        organizado para una solicitud de Visa, podemos proporcionarle un
                                                        certificado de alojamiento prepago para respaldar su solicitud
                                                        de VISA.
                                                    </p>
                                                </div>
                                                <!-- When you move out -->
                                                <div
                                                    class="swiper-slide d-flex flex-column align-items-start justify-content-start">
                                                    <div class="top">
                                                        <div class="top-img">
                                                            <img src="{{ asset('img/money.svg') }}"
                                                                alt="Hassle-free Renting" />
                                                        </div>
                                                        <div class="title">Múltiples solicitudes, paga solo una.</div>
                                                    </div>
                                                    <p class="mt-2">
                                                        Aumente la probabilidad de que su solicitud sea aceptada
                                                        enviando solicitudes de reserva para múltiples propiedades. Solo
                                                        incurrirá en cargos por la reserva aceptada inicialmente, ya que
                                                        todas las demás solicitudes se cancelarán automáticamente.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Pagination --}}
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                <!-- why choice immiworld end  -->

                                <!-- Checkout start  -->
                                <div class="parCeLogement">
                                    <a href="{{ route('frontend.sp.checkout', $appartement->id) }}"
                                        class="text-center d-block main-btn w-100">
                                        Checkout
                                    </a>
                                </div>
                                <!-- Checkout end -->
                            </div>
                            <!-- Détails de la chambre end -->


                        </div>
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>¿Necesidad de ayuda?</h2>
                        <h4>Contacto</h4>
                        <p><strong>Chat en Línea:</strong> El tiempo de espera promedio es de 3 minutos.</p>
                        <p><strong>Solicitud de llamada:</strong> Disponible solo con cita previa.</p>
                        <p><strong>Redes sociales:</strong> El tiempo de espera promedio es de 15 minutos.</p>

                        <x-links_sp_area />

                    </div>

                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-en.footer />

<!-- Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
</script>
