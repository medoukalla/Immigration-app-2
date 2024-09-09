<x-fr.head title="{{ setting('site.title') . ' - Nos packs' }}" />

<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Nos packs</a>

            </p>
            <h2 class="text-center">
                Nos packs
            </h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->

<!-- main start  -->
<main>
    <!-- Des packs start  -->
    <div class="desPacks">
        <div class="container">
            <h2>Des <span>packs personnalisés</span> pour vos <span>différents
                    objectifs</span></h2>
            <div class="textBox">
                <div class="media">
                    <img src="{{ asset('img/round.svg') }}" alt="img" class="img-fluid">
                    <div class="media-body">
                        <p>Les prix des programmes d’études en espagne sont indépendants du prix de nos services,
                            <span>Cliquez
                                ici</span> pour accédez au page
                            des programmes pour
                            en savoir plus sur les programmes d’études en espagne
                        </p>
                    </div>
                </div>
            </div>
            <!-- textBox end  -->


            <!-- item box start  -->
            <div class="itemBox">
                @if ( $packs->count() == 0 )
                    <h4 class="soon-warning">Bientôt: Soyez prêts!</h4>
                @else
                <!-- row start  -->
                <div class="row">
                    @php $i = 0 @endphp
                    @foreach ($packs as $pack)
                        <!-- single item start  -->
                        <div class="col-lg-4  col-md-6 mb-4">
                            <div class="itemBoxInner shadow">

                                <div class="itembox1"
                                    style="background:linear-gradient(1deg, #000000, transparent), url('{{ asset('storage/'.$pack->image) }}'); background-size:cover; ">
                                    <h4>{{ $pack->title }}</h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="TextLeft">
                                            <span>{{ $pack->price }}<sub>Euro</sub></span>
                                        </div>
                                        <div class="Textright">
                                            <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                            <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                            <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                            <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                            <img src="{{ asset('img/star.png') }}" alt="img" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="itembox2">
                                    <div class="itembox2Inner">
                                        <p>
                                            {{ $pack->description }}
                                        </p>
                                        <span class="read-more read-more{{ $i }}"
                                            data-id="{{ $i }}">En savoir plus <img
                                                src="{{ asset('img/arrowDown.svg') }}" alt="img"
                                                class="img-fluid"></span>
                                        <div class="more-text more-text{{ $i }}">
                                            {!! $pack->hidden_description !!}
                                        </div>
                                    </div>
                                    <a href="{{ setting('site.whatsapp_link') }}" target="_blanck">Contactez-nous sur
                                        Whatsapp</a>
                                </div>
                            </div>
                        </div>
                        <!-- single item end  -->
                    @endforeach
                </div>
                <!-- row end -->
                <div class="row mt-5">
                    {{ $packs->links() }}
                </div>
                @endif
            </div>
            <!-- item box end -->
        </div>
        <!-- Des packs end -->
</main>
<!-- main end -->


<x-fr.footer />
<script>
    $(document).ready(function() {
        // class btn ( span )
        $(".read-more").click(function(e) {
            var clicked = ".read-more" + $(this).data('id');
            var target = ".more-text" + $(this).data('id');
            $(target).show();
            $(this).hide();
        })
    });
</script>
