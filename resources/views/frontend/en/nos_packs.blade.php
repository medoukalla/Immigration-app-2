<x-en.head title="{{ setting('site.title') . ' - ' . 'Nuestros paquetes' }}" />

<div class="wrapper bg-dark">

    <x-en.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Nuestros paquetes</a>

            </p>
            <h2 class="text-center">Nuestros paquetes</h2>
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
            <h2><span>Paquetes personalizados</span> para tus <span>diferentes objetivos</span></h2>
            <div class="textBox">
                <div class="media">
                    <img src="{{ asset('img/round.svg') }}" alt="img" class="img-fluid">
                    <div class="media-body">
                        <p>Los precios de los programas de estudio en España son independientes del precio de nuestros
                            servicios. Haga clic aquí para ir a la página de programas para obtener más información
                            sobre los programas de estudio en España.</p>
                    </div>
                </div>
            </div>
            <!-- textBox end  -->


            <!-- item box start  -->
            <div class="itemBox">
                @if ( $packs->count() == 0 )
                    <h4 class="soon-warning">Pronto: ¡Prepárense!</h4>
                @else

                <!-- row start  -->
                <div class="row">
                    @php $i = 0 @endphp
                    @foreach ($packs as $pack)
                        <!-- single item start  -->
                        <div class="col-lg-4  col-md-6 mb-4">
                            <div class="itemBoxInner shadow">

                                <div class="itembox1"
                                    style="background:linear-gradient(1deg, #000000, transparent), url('{{ asset('storage/'.$pack->image) }}'); background-size:cover;">
                                    <h4>{{ $pack->title }}</h4>
                                    <div class="d-flex justify-content-between flex-wrap">
                                        <div class="TextLeft">
                                            <span>
                                                {{ $pack->price }}<sub>Euro</sub>
                                            </span>
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
                                            data-id="{{ $i }}">Más información <img
                                                src="{{ asset('img/arrowDown.svg') }}" alt="img"
                                                class="img-fluid"></span>
                                        <div class="more-text more-text{{ $i }}">
                                            {!! $pack->hidden_description !!}
                                        </div>
                                    </div>
                                    <a href="{{ setting('site.whatsapp_link') }}" target="_blanck">Póngase en contacto
                                        con nosotros en Whatsapp</a>
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


<x-en.footer />
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
