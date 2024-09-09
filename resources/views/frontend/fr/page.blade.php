<x-fr.head title="{{ setting('site.title') . ' - ' . $page->title }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">{{ $page->slug }}
                </a>

            </p>
            <h2 class="text-center">{{ $page->title }}</h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->

<!-- main start  -->
<main>
    <div class="Besoin">
        <div class="container">
            <!-- .row start  -->
            <div class="row">
                <!-- single item start  -->
                <div class="col-lg-7">
                    <div class="itemLeft">

                        <!-- Image wrapper -->
                        <div class="img-wrapper">
                            <div class="main-title">{{ $page->title }}</div>
                            <div class="main-img">
                                <img src="{{ asset('storage' . '/' . $page->image) }}" alt="{{ $page->title }}" />
                            </div>
                        </div>

                        <!-- en espagne end  -->
                        <div class="wrppText wrppText2">
                            {{ $page->excerpt }}
                        </div>
                        <!-- wrppText end -->
                        
                        <!-- en espagne end  -->
                        <div class="wrppText wrppText2">
                            {!! $page->body !!}
                        </div>
                        <!-- wrppText end -->

                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>Besoin d’aide?</h2>
                        <h4>Contactez-nous</h4>
                        <p><strong>Live Chat:</strong> Le délai d'attente moyen est de 3 minutes.</p>
                        <p><strong>Demander à être rappelé:</strong> Disponible uniquement sous un rendez vous</p>
                        <p><strong>Réseaux sociaux:</strong> Le délai d'attente moyen est de 15 minutes.</p>
                        <div class="linkArea">
                            <a class="itemLink d-block" href="">
                                <span class="media">
                                    <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.83 21.78">

                                        <g id="Layer_1-2">
                                            <path class="cls-1"
                                                d="m3.83,2.05c-.98,0-1.78.8-1.78,1.78v15.38c0,.36.32.53.53.53.07,0,.14-.02.21-.05l3.2-1.4c1.37-.6,2.83-.91,4.33-.91h13.69c.98,0,1.78-.8,1.78-1.78V3.83c0-.98-.8-1.78-1.78-1.78H3.83m0-2.05h20.18c2.11,0,3.83,1.71,3.83,3.83v11.78c0,2.11-1.71,3.83-3.83,3.83h-13.69c-1.21,0-2.4.25-3.5.73l-3.2,1.4c-.34.15-.69.22-1.04.22-1.36,0-2.58-1.1-2.58-2.58V3.83C0,1.71,1.71,0,3.83,0h0Z" />
                                            <path class="cls-1"
                                                d="m6.11,8.4h9.52c.57,0,1.02-.46,1.02-1.02s-.46-1.02-1.02-1.02H6.11c-.57,0-1.02.46-1.02,1.02s.46,1.02,1.02,1.02Z" />
                                            <path class="cls-1"
                                                d="m6.11,12.84h15.58c.57,0,1.02-.46,1.02-1.02s-.46-1.02-1.02-1.02H6.11c-.57,0-1.02.46-1.02,1.02s.46,1.02,1.02,1.02Z" />
                                        </g>
                                    </svg>
                                    <span class="media-body">
                                        <p class="mb-0">Discutez avec un agent
                                            en ligne</p>
                                    </span>
                                </span>
                            </a>

                            <a class="itemLink d-block" href="">
                                <span class="media">
                                    <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.46 24.48">

                                        <g id="Layer_1-2">
                                            <path class="cls-1"
                                                d="m18.46,24.48c-1.91-.1-3.68-.66-5.39-1.48-3.2-1.55-5.89-3.76-8.2-6.44-1.78-2.06-3.22-4.33-4.14-6.91C.28,8.37-.04,7.06,0,5.69c.02-.66.14-1.33.3-1.98.22-.86.7-1.59,1.39-2.15.49-.4,1-.79,1.54-1.13,1.14-.71,2.56-.53,3.51.41,1.23,1.22,2.29,2.57,3.13,4.08.69,1.24.62,2.48-.22,3.64-.36.49-.79.93-1.2,1.38-.28.31-.33.55-.09.9,1.43,2.07,3.18,3.82,5.24,5.25.34.24.59.19.9-.09.47-.43.93-.88,1.44-1.24,1.1-.78,2.31-.86,3.48-.22,1.58.85,2.99,1.96,4.24,3.25.86.89,1.03,2.32.38,3.37-.39.62-.83,1.23-1.32,1.77-.85.95-1.98,1.36-3.23,1.49-.35.04-.7.04-1.06.06ZM1.76,5.8c.06,1.21.41,2.67,1.04,4.14,1.2,2.78,2.98,5.14,5.14,7.22,2,1.94,4.23,3.54,6.83,4.6,1.45.59,2.93.99,4.52.85.83-.07,1.6-.31,2.16-.96.37-.42.69-.88,1-1.34.31-.47.25-.96-.15-1.36-1.1-1.09-2.31-2.03-3.66-2.8-.56-.32-1.15-.3-1.67.1-.41.31-.8.65-1.16,1.02-.91.91-2.14,1.05-3.19.32-2.27-1.56-4.19-3.48-5.75-5.75-.73-1.05-.59-2.29.32-3.19.35-.35.68-.73.99-1.12.44-.56.47-1.18.1-1.78-.35-.57-.71-1.14-1.12-1.67-.52-.67-1.09-1.31-1.66-1.94-.36-.4-.87-.45-1.32-.16-.43.28-.84.59-1.25.91-.48.37-.79.87-.92,1.46-.11.47-.16.96-.24,1.44Z" />
                                        </g>
                                    </svg>
                                    <span class="media-body">
                                        <p class="mb-0">Consultation téléphonique
                                            avec un expert</p>
                                    </span>
                                </span>
                            </a>
                            <a class="itemLink d-block" href="">
                                <span class="media">
                                    <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.83 27.96">

                                        <g id="Layer_1-2">
                                            <path class="cls-1"
                                                d="m0,27.96c.39-1.44.77-2.82,1.15-4.2.25-.91.5-1.81.74-2.72.04-.14.02-.33-.05-.46C-1.74,14.02.41,5.91,6.79,2.02,9.54.34,12.53-.29,15.73.12c5.71.74,10.37,4.9,11.71,10.43,1.83,7.57-2.87,15.15-10.47,16.84-3.27.73-6.4.28-9.39-1.22-.14-.07-.34-.09-.49-.05-2.25.58-4.5,1.17-6.76,1.76-.09.02-.19.04-.33.08Zm3.33-3.3c.09-.02.12-.02.16-.03,1.27-.33,2.55-.66,3.82-1.01.26-.07.47-.04.71.1,2.56,1.53,5.32,2.03,8.23,1.43,6.16-1.26,10.12-7.09,9.07-13.29-.9-5.26-5.44-9.29-10.76-9.51-2.94-.12-5.58.72-7.86,2.59-2.6,2.14-4.02,4.92-4.22,8.28-.15,2.48.47,4.77,1.81,6.86.15.24.19.45.11.73-.36,1.27-.7,2.54-1.06,3.85Z" />
                                            <path class="cls-1"
                                                d="m9.48,7.48c.62-.16.9.22,1.11.77.31.8.65,1.6.99,2.39.11.27.11.51-.06.74-.28.37-.55.75-.84,1.11-.18.23-.21.43-.06.69,1.13,1.91,2.72,3.29,4.78,4.12.27.11.49.07.67-.16.35-.44.72-.87,1.06-1.32.2-.26.42-.34.71-.21.98.46,1.96.92,2.93,1.41.12.06.22.28.22.43-.03,1.47-.46,2.18-2.04,2.84-.89.37-1.82.28-2.74.03-3.33-.93-5.78-3.02-7.75-5.78-.62-.87-1.18-1.76-1.41-2.81-.33-1.5.04-2.8,1.14-3.88.35-.34.77-.42,1.29-.36Z" />
                                        </g>
                                    </svg>
                                    <span class="media-body">
                                        <p class="mb-0">Discutez avec un agent
                                            sur Whatsapp</p>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>


                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-fr.footer />
