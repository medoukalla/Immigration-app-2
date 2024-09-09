<x-fr.head title="{{ setting('site.title') . ' - ' . $post->title }}" />

<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />


    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Blog</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">{{ $post->title }}
                </a>

            </p>
            <h2 class="text-center">{{ $post->title }}</h2>
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
                        <!-- en espagne start  -->
                        <div class="enEspagne">
                            <img src="{{ asset('storage' . '/' . $post->image) }}" alt="img"
                                class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/FolderIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>{{ $post->title }}</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText">
                            {!! $post->body !!}
                        </div>



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

                        <x-links_area />

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
