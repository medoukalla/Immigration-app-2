<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Web Content">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <!--
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/fav_icon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav-small.png') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <title>{{ setting('site.title') . ': Avocats de Extranjería - Immiworld Agence d’immigration a Malaga' }}</title>
    <meta name="description" content="{{ setting('site.description') }}">

</head>

<body>
    <!-- headerTop start  -->
    <div class="headerTop">
        <div class="container">
            <div class="d-flex headerTopWrapp justify-content-md-between flex-wrap">
                <ul class="leftItem d-flex">
                    <li><a href=""> <img src="{{ asset('img/ClockGray.png') }}" alt="img" class="img-fluid">
                            Lun-Ven |
                            {{ setting('site.working-ours') }}</a></li>
                    <li><a href="{{ setting('site.whatsapp_link') }}" target="_blanck"> <img
                                src="{{ asset('img/WhatsappGray.png') }}" alt="img" class="img-fluid">
                            {{ setting('site.whatsapp') }}</a></li>
                </ul>
                <ul class="rightItem d-flex justify-content-md-end">
                    <li><a href="{{ setting('site.facebook') }}" target="_blanck"><img
                                src="{{ asset('img/FacebookGray.png') }}" alt="img" class="img-fluid"></a></li>
                    <li><a href="{{ setting('site.instagram') }}" target="_blanck"><img
                                src="{{ asset('img/InstagramGray.png') }}" alt="img" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- headerTop end -->
    <style>
        .slick-list {
            max-height: 100% !important;
        }
    </style>

    <div class="wrapper" style=" overflow: hidden; position: relative; ">

        {{-- Main background  --}}
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: 100% !important">

                <div class="carousel-item active">
                </div>

                @foreach ($sliders as $slider)
                    @php
                        $image = asset('storage') . '/' . $slider->image;
                    @endphp
                    <div class="carousel-item" style="background-image: url({{ $image }})">
                    </div>
                @endforeach

            </div>
        </div>


        <style>
            /* Main background  */
            .carousel-item:nth-child(1) {
                background-image: url("{{ asset('img/bgBanner1.png') }}");
            }

            ;
        </style>
        <x-fr.header_menu :langLink="$langLink" />

        <!-- banner start  -->
        <div class="banner">
            <div class="container">
                <div class="bannerTop">
                    <!-- row start  -->
                    <div class="row justify-content-center align-items-center">
                        <!-- singel tiem start -->
                        <div class="col-lg-5">
                            <div class="itemLeft">
                                <h1>Votre agence
                                    d’immigration
                                    en ligne</h1>
                            </div>
                        </div>
                        <!-- singel tiem end -->

                        <!-- singel tiem start -->
                        <div class="col-lg-5">
                            <div class="itemRgiht">
                                <p>Des experts vous facilitant tout le nécessaire pour votre immigration, du choix du
                                    visa
                                    et préparation du dossier à
                                    votre accueil en Espagne</p>
                                <ul>
                                    <li><a href="{{ route('frontend.index') . '#consulting' }}">Consultation en ligne
                                            --
                                            C’est gratuit !</a></li>
                                    <li><a href="{{ route('frontend.nos_packs') }}">Découvrez nos services</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- singel tiem end -->

                    </div>
                    <!-- row end -->
                </div>
                <!-- banner top end -->
                <!-- processus start  -->
                <div class="processus ">
                    <h2>Un processus court et simple pour obtenir son visa en Espagne</h2>
                    <!-- .row start  -->
                    <div class="row">
                        <!-- single item start  -->
                        <div class="col-lg">
                            <div class="item">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <h4>L’obtention
                                        d’une admission</h4>
                                    <div class="">
                                        <img src="{{ asset('img/1.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                                <p>ImmiWorld - Votre guide pour obtenir une admission dans l'établissement
                                    d'enseignement de votre choix.</p>
                            </div>
                        </div>
                        <!-- single item end -->

                        <!-- single item start  -->
                        <div class="col-lg-5">
                            <div class="item item2">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <h4>Préparation
                                        du dossier</h4>
                                    <div class="">
                                        <img src="{{ asset('img/2.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                                <p>On s’occupe de la préparation de votre dossier de visa en assurant la présence et la
                                    validité de chaque document demandé</p>
                            </div>
                        </div>
                        <!-- single item end -->
                        <!-- single item start  -->
                        <div class="col-lg">
                            <div class="item">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <h4>Bienvenue
                                        en Espagne</h4>
                                    <div class="">
                                        <img src="{{ asset('img/3.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                                <p>Nous vous accueillerons en espagne après l'acceptation de votre visa!</p>
                            </div>
                        </div>
                        <!-- single item end -->

                    </div>
                    <!-- .row end -->
                </div>
                <!-- processus end -->
            </div>
        </div>
        <!-- banner end -->

        <!-- Video wrapper start-->
        {{-- style="margin: 0px;width: 1806.76px;height: 1016.3px;" --}}
        <!-- Slider video < 1440px -->
        {{-- <div class="video-wrapper">
            <video class="slider-video-lg" loop="loop" autoplay="" playsinline="" muted=""
                id="mejs_4760365513983986_html5" preload="none"
                src="https://carbray.es/wp-content/uploads/2022/11/shutterstock_1084637086.mov">
                <source type="video/mp4"
                    src="https://carbray.es/wp-content/uploads/2022/11/shutterstock_1084637086.mov" />
            </video>
        </div> --}}
        <!-- Video wrapper end -->
    </div>
    <!-- wrapper end  -->




    <!-- services start  -->
    <div class="services " id="services">
        <div class="container">
            <div class="servicesTop">
                <h2>Nos <span>services</span> qui vous aideront
                    à <span>accomplir votre immigration</span></h2>
            </div>
            <!-- row start  -->
            <div class="row">


                <!-- single item start  -->
                <div class="col-lg-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58.39 44.75">

                            <g id="Layer_1-2">
                                <path class="cls"
                                    d="m54.92,9.65L36.56,1.57c-2.38-1.05-4.87-1.57-7.36-1.57s-4.98.52-7.36,1.57L3.47,9.65c-4.68,2.06-4.62,10.45.09,12.4l4.31,1.79v9.28c0,2.64,1.24,6.35,7.12,9,3.77,1.7,8.79,2.63,14.16,2.63,10.25,0,21.28-3.64,21.28-11.63v-9.24l2.44-1.01v8c0,.94.77,1.71,1.71,1.71s1.71-.77,1.71-1.71v-9.76c3.18-2.91,2.75-9.65-1.38-11.46ZM3.42,15.88c-.01-1.23.42-2.66,1.43-3.1L23.21,4.7c1.94-.85,3.95-1.28,5.98-1.28s4.05.43,5.98,1.28l18.36,8.07c1.01.44,1.44,1.88,1.43,3.1-.01,1.2-.47,2.6-1.45,3.01l-15.56,6.45c-2.84,1.18-5.79,1.78-8.77,1.78s-5.93-.6-8.77-1.78l-15.56-6.45c-.98-.41-1.44-1.81-1.45-3.01Zm43.6,17.23c0,5.33-9.2,8.21-17.86,8.21s-17.86-2.88-17.86-8.21v-7.86l7.83,3.25c3.27,1.36,6.68,2.04,10.08,2.04s6.8-.68,10.08-2.04l7.74-3.21v7.82Z" />
                            </g>
                        </svg>
                        <h4>Étudier en espagne</h4>
                        <p>Immiworld - L'agence spécialisée dans les études en Espagne, offrant des conseils
                            personnalisés et un soutien complet pour une expérience éducative enrichissante.</p>
                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ url('fr/page/etudier-en-espagne') }}">
                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->


                <!-- single item start  -->
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.08 50.82">

                            <g id="Layer_1-2">
                                <path class="cls "
                                    d="m40.08,11.5c0-3.17,0-6.76-5.75-8.21L13.54,0c-2.65,0-4.88,1.8-5.54,4.25-4.43.12-7.99,3.75-7.99,8.2v30.08c0,4.53,3.69,8.22,8.22,8.22l26.12.08c3.17,0,5.75-2.57,5.75-5.75V11.5ZM10.82,5.75c0-1.43,1.12-2.61,2.53-2.71l20.38,3.22c3.34.87,3.34,2.17,3.34,5.24v31.35c-.06,2.3-.77,4.87-3.68,4.87H13.54c-.69,0-1.38-.21-1.88-.68s-.85-1.19-.85-1.97V5.75ZM3.03,42.53V12.45c0-2.72,2.1-4.95,4.76-5.17v37.79c0,.95.24,1.85.65,2.65h-.22c-2.86,0-5.19-2.33-5.19-5.19Z" />
                            </g>
                        </svg>
                        <h4>Préparation <br>
                            de dossier visa</h4>
                        <p>Immiworld vos facilite le choix entre les visas disponibles, en expliquant ses
                            caracteristiques et modalités
                            d’acceptance</p>
                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ url('fr/page/preparation-de-dossier-visa') }}">
                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->

                <!-- single item start  -->
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.08 50.94">

                            <g id="Layer_1-2">
                                <path class="cls "
                                    d="m42.16,12.74L26.8,1.4c-1.27-.93-2.76-1.4-4.26-1.4s-2.99.47-4.26,1.4L2.92,12.74c-1.83,1.35-2.92,3.5-2.92,5.78v25.26c0,3.96,3.21,7.18,7.18,7.18h30.73c3.96,0,7.18-3.21,7.18-7.18v-25.26c0-2.28-1.08-4.42-2.92-5.78Zm-.51,31.03c0,2.07-1.68,3.76-3.76,3.76H7.18c-2.07,0-3.76-1.68-3.76-3.76v-25.26c0-1.19.57-2.32,1.53-3.02l15.36-11.33c.65-.48,1.42-.73,2.23-.73s1.58.25,2.23.73l15.36,11.33c.96.7,1.53,1.83,1.53,3.02v25.26Z" />
                            </g>
                        </svg>
                        <h4>Logement</h4>
                        <p>Immiworld vous aide à trouver un logement après l'obtention de votre visa</p>
                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ route('frontend.logements') }}">
                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->



                <!-- single item start  -->
                <div class="col-lg-4  mt-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.08 50.94">

                            <g id="Layer_1-2">
                                <path class="cls "
                                    d="m42.16,12.74L26.8,1.4c-1.27-.93-2.76-1.4-4.26-1.4s-2.99.47-4.26,1.4L2.92,12.74c-1.83,1.35-2.92,3.5-2.92,5.78v25.26c0,3.96,3.21,7.18,7.18,7.18h30.73c3.96,0,7.18-3.21,7.18-7.18v-25.26c0-2.28-1.08-4.42-2.92-5.78Zm-20.27,34.48c-2.46-2.96-5.1-9.66-5.1-12.14,0-3.18,1.8-6.61,5.75-6.61s5.75,3.43,5.75,6.61c0,2.48-2.64,9.18-5.1,12.14-.21.25-.47.3-.65.3s-.44-.05-.65-.3Zm19.77-3.45c0,2.07-1.68,3.76-3.76,3.76h-10.74c2.42-3.83,4.55-9.56,4.55-12.45,0-5.54-3.63-10.03-9.17-10.03s-9.17,4.49-9.17,10.03c0,2.89,2.12,8.62,4.55,12.45H7.18c-2.07,0-3.76-1.68-3.76-3.76v-25.26c0-1.19.57-2.32,1.53-3.02l15.36-11.33c.65-.48,1.42-.73,2.23-.73s1.58.25,2.23.73l15.36,11.33c.96.7,1.53,1.83,1.53,3.02v25.26Z" />
                            </g>
                        </svg>
                        <h4>Résidence non lucrative</h4>
                        <p>On s’occupe de la préparation de votre dossier de visa en assurant la présence et la validité
                            de chaque document demandé</p>

                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ url('fr/page/residence-non-lucrative') }}">

                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->


                <div class="col-lg-4  mt-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.7 50.94">

                            <g id="Layer_1-2">
                                <path class="cls "
                                    d="m60.12,0H9.58C4.29,0,0,4.29,0,9.58v31.79c0,5.29,4.29,9.58,9.58,9.58h50.54c5.29,0,9.58-4.29,9.58-9.58V9.58c0-5.29-4.29-9.58-9.58-9.58Zm6.16,41.37c0,3.4-2.76,6.16-6.16,6.16H9.58c-3.4,0-6.16-2.76-6.16-6.16V9.58c0-3.4,2.76-6.16,6.16-6.16h50.54c3.4,0,6.16,2.76,6.16,6.16v31.79Z" />
                                <path class="cls"
                                    d="m57.03,32.16h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                <path class="cls"
                                    d="m57.03,23.76h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                <path class="cls"
                                    d="m57.03,15.36h-19.46c-.94,0-1.71.77-1.71,1.71s.77,1.71,1.71,1.71h19.46c.94,0,1.71-.77,1.71-1.71s-.77-1.71-1.71-1.71Z" />
                                <path class="cls"
                                    d="m26.07,15.36h-11.14c-2.19,0-3.97,1.78-3.97,3.97v12.27c0,2.19,1.78,3.97,3.97,3.97h11.14c2.19,0,3.97-1.78,3.97-3.97v-12.27c0-2.19-1.78-3.97-3.97-3.97Zm.55,16.24c0,.3-.25.55-.55.55h-11.14c-.3,0-.55-.25-.55-.55v-12.27c0-.3.25-.55.55-.55h11.14c.3,0,.55.25.55.55v12.27Z" />
                            </g>
                        </svg>
                        <h4>Renouvellement de la carte séjour (NIE)</h4>
                        <p>Renouvellement de carte de séjour sans tracas. Obtenez rapidement le renouvellement de votre
                            carte de séjour avec notre assistance complète.</p>

                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ url('fr/page/renouvellement-de-la-carte-sejour-nie') }}">

                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>




                <!-- single item start  -->
                <div class="col-lg-4 mt-4">
                    <div class="item shadow">
                        <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.07 50.94">

                            <g id="Layer_1-2">
                                <path class="cls "
                                    d="m39.58,0H7.49C3.36,0,0,3.36,0,7.49v13.28c0,10.61,5.04,20.59,13.58,26.89,2.96,2.18,6.46,3.28,9.96,3.28s7-1.09,9.96-3.28c8.54-6.3,13.58-16.28,13.58-26.89V7.49c0-4.14-3.36-7.49-7.49-7.49Zm4.07,20.77c0,9.48-4.56,18.51-12.19,24.14-2.31,1.71-5.05,2.61-7.93,2.61s-5.61-.9-7.93-2.61c-7.63-5.63-12.19-14.66-12.19-24.14V7.49c0-2.25,1.83-4.07,4.07-4.07h32.08c2.25,0,4.07,1.83,4.07,4.07v13.28Z" />
                                <path class="cls"
                                    d="m32.33,15.35l-11.4,11.4-6.2-6.2c-.67-.67-1.75-.67-2.42,0s-.67,1.75,0,2.42l7.41,7.41c.32.32.76.5,1.21.5s.89-.18,1.21-.5l12.61-12.61c.67-.67.67-1.75,0-2.42-.67-.67-1.75-.67-2.42,0Z" />
                            </g>
                        </svg>
                        <h4>Assurance</h4>
                        <p>ImmiWorld - Votre lien privilégié avec les compagnies d'assurance espagnoles pour aider les
                            étudiants à trouver la meilleure couverture d'assurance adaptée à leurs besoins pendant leur
                            séjour d'études en Espagne</p>
                        <a class="linkText d-flex flex-wrap justify-content-between"
                            href="{{ route('frontend.assurance') }}">
                            <span>En savoir plus</span>
                            <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.7 16.19">

                                <g id="Layer_1-2">
                                    <polyline class="cls-1" points="11.29 8.1 26.49 8.1 18.75 .35" />
                                    <polyline class="cls-1" points="0 8.1 26.49 8.1 18.75 15.84" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- single item end  -->



            </div>
            <!-- row end  -->
        </div>
    </div>
    <!-- services end  -->


    <!-- Pays que nous start  -->
    <div class="paysQue">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="itemLeft">
                        <h4 class="text-light">Nous nous occupons de la préparation de votre dossier de visa en
                            garantissant la présence et
                            la validité de chaque document requis.</h4>
                    </div>
                </div>
                <div class="col-lg-7 align-self-center mt-lg-0 mt-5">
                    <div class="itemRight">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="innerItem">
                                    <img src="{{ asset('img/pays1.png') }}" alt="img" class="img-fluid w-100">
                                    <div class="box">
                                        <p>Maroc</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="innerItem">
                                    <img src="{{ asset('img/pays2.png') }}" alt="img" class="img-fluid w-100">
                                    <div class="box">
                                        <p>Algérie</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6  mt-lg-0 mt-4">
                                <div class="innerItem">
                                    <img src="{{ asset('img/pays3.png') }}" alt="img" class="img-fluid w-100">
                                    <div class="box">
                                        <p>Tunisie</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                                <div class="innerItem">
                                    <img src="{{ asset('img/pays4.png') }}" alt="img" class="img-fluid w-100">
                                    <div class="box">
                                        <p>Égypte</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pays que nous end -->

    <!-- partenaires start  -->
    <div class="partenaires ">
        <div class="partenairesInner">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="itemLeft">
                        <h2>Des <span>partenaires</span> qui
                            nous font confiance</h2>
                    </div>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                    <ul class="d-flex justify-content-between flex-wrap itemRgiht">
                        <li><img src="{{ asset('img/b1.png') }}" alt="img" class="img-fluid"></li>
                        <li><img src="{{ asset('img/b2.png') }}" alt="img" class="img-fluid"></li>
                        <li><img src="{{ asset('img/b3.png') }}" alt="img" class="img-fluid"></li>
                        <li><img src="{{ asset('img/b4.png') }}" alt="img" class="img-fluid"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- partenaires end -->

    <!-- Avis start  -->
    <div class="AvisDo">
        <div class="container">
            <div class="box">
                <h2>Avis de <span>nos clients</span></h2>
                <div class="googleWrapp d-flex flex-wrap justify-content-between">
                    <div class="itemLeft">
                        <img src="{{ asset('img/google.png') }}" alt="img" class="img-fluid googleImg">
                        <div class="itemImg">
                            <span class="points">4.5</span>
                            <span class="star">
                                <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                <img src="{{ asset('img/starHalf.png') }}" alt="img" class="img-fluid">
                            </span>
                            <span class="avis">
                                {{ count($testimonials) }} avis
                            </span>
                        </div>
                    </div>
                    <div class="itemRight">
                        <a href="{{ setting('site.avis_lien') }}" target="_blanck" class="main-btn">Laisser un
                            avis</a>
                    </div>
                </div>
                <!-- slider wrapp start  -->
                <div class="sliderWrapp">
                    <div class="slider">
                        @foreach ($testimonials as $testimonial)
                            <div class="sliderItem">
                                <h4>{{ $testimonial->name }}</h4>
                                <ul class="d-flex">
                                    <li><img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                    </li>
                                    <li><img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                    </li>
                                    <li><img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                    </li>
                                    <li><img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                    </li>
                                    <li><img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                    </li>
                                </ul>
                                <p>{{ $testimonial->textimonial }} ...</p>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- slider wrapp end -->

            </div>
        </div>
    </div>
    <!-- Avis end -->

    <!-- visa étudiant start  -->
    <div class="visaEtudiant">
        <div class="container">
            <div class="box">
                <!-- row start  -->
                <div class="row">
                    <!-- single item start  -->
                    <div class="col-lg-8">
                        <div class="itemLeft">
                            <div class="media d-md-flex d-block justify-content-between">
                                <img src="{{ asset('img/img3.png') }}" alt="img"
                                    class="img-fluid align-self-center">
                                <div class="media-body mt-md-0 mt-4 align-self-center">
                                    <h2>Intéressé par <br>
                                        une <span>visa étudiant ?</span></h2>
                                    <p>Réservez votre consultation
                                        en ligne gratuitement</p>
                                    <a href="#consulting" class="main-btn">Réservez votre consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single item end -->
                    <!-- single item start  -->
                    <div class="col-lg-4 mt-lg-0 mt-4 pt-lg-0 pt-2">
                        <div class="WrappitemRight itemRight">
                            <img src="{{ asset('img/VisaIconOrange.png') }}" alt="img" class="img-fluid">
                            <h4>À la recherche d’une <span>visa non lucrative</span> en espagne?</h4>
                            <a href="/fr/page/residence-non-lucrative" class="main-btn">En savoir plus</a>
                        </div>
                    </div>
                    <!-- single item end -->

                </div>
                <!-- row end -->
            </div>
        </div>
    </div>
    <!-- visa étudiant end -->

    <!-- Cherchez-vous un start  -->
    <div class="CherchezVousUn " id="contact">
        <div class="container">
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-4">
                    <div class="WrappitemRight itemRight">
                        <img src="{{ asset('img/Home Icon Orange.png') }}" alt="img" class="img-fluid">
                        <h4>Cherchez-vous un <span>logement en espagne?</span></h4>
                        <a href="{{ route('frontend.logements') }}" class="main-btn">En savoir plus</a>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item start  -->
                <div class="col-lg-8">
                    <div class="Besoin p-0">
                        <div class="itemRight ">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h2>Contact</h2>
                                    <p><strong>Live Chat:</strong> Le délai d'attente moyen est de 3 minutes.</p>
                                    <p><strong>Demander à être rappelé:</strong> Disponible uniquement sous un rendez
                                        vous</p>
                                    <p><strong>Réseaux sociaux:</strong> Le délai d'attente moyen est de 15 minutes.</p>
                                </div>
                                <div class="col-lg-7">

                                    <x-links_area />

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>
    <!-- Cherchez-vous un end  -->

    <!-- full images start  -->
    <div class="fullImages" id="consulting">
        <div class="container">
            <div class="box">
                {!! setting('site.consultation_fr_code') !!}

            </div>
        </div>
    </div>
    <!-- full images end  -->

    <!-- Derniers articles start  -->
    <div class="DerniersArticles">
        <div class="container">
            <h2>Derniers <span>articles</span></h2>
            <!-- row start  -->
            <div class="BlogSlider">
                @foreach ($last_posts as $post)
                    <!-- single item start  -->
                    <div class="BlogSliderItem">
                        <a href="{{ route('frontend.post', $post) }}" class="d-block m-3 ">
                            <img src="{{ asset('storage' . '/' . $post->image) }}" alt=" img"
                                class="img-fluid blogImg">
                            <span class="box d-block">
                                <h4>{{ $post->title }}</h4>
                                <p>{{ substr($post->excerpt, 0, 30) }}...</p>
                                <span class="d-flex justify-content-between flex-wrap">
                                    <span class="date">
                                        {{ $post->created_at->format('d/m/y') }}
                                    </span>
                                    <span class="ReadMore">
                                        <span>Consulter l’article</span> <img src="{{ asset('img/arrowRgiht0.svg') }}"
                                            alt="img" class="img-fluid">
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <!-- single item end  -->
                @endforeach

            </div>
            <!-- row end -->
        </div>
    </div>
    <!-- Derniers articles end -->


    <x-fr.footer />
