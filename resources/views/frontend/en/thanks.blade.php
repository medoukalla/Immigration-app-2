<x-en.head title="{{ setting('site.title') . ' : Gracias' }}" />
<link rel="stylesheet" href="{{ asset('css/stripe.css') }}">

<!-- Qui sommes start  -->
<div class="wrapper bg-dark">
    {{-- header --}}
    <x-en.header_menu :langLink="$langLink" />
    {{-- Quisommes --}}
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Alojamiento</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="javascript:void(0)">Verificar</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Terminado</a>
            </p>
            <h2 class="text-center">Gracias</h2>
        </div>
    </div>
</div>
<!-- Qui sommes end -->


<!-- thanks section start  -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="thanks-section">
                    <div class="big-thanks">
                        <lord-icon class="success" src="https://cdn.lordicon.com/cgzlioyf.json" trigger="loop"
                            delay="2000" colors="primary:#ffffff" style="width: 80px; height: 80px">
                        </lord-icon>
                        <h1 class="mb-0">Pago exitoso!</h1>
                        <h6 class="mt-2">Número de transacción : IW-{{ $reference }}</h6>
                    </div>
                    <div class="re-thanks">
                        <p class="mb-0 text-start">
                            Cher/Chère <span>{{ $order->prenom . ' ' . $order->nom_de_famille }}</span>, <br />
                            ¡Un millón de gracias por elegir Immiworld! Su pago ha sido recibido y su estancia está
                            confirmada. <br />
                            Preguntas ? Estamos allí 24 horas al día, 7 días a la semana.
                            <a class="chat-button" href="javascript:void(0)"> <span>¡Haga clic aquí para obtener
                                    ayuda!</span> </a><br />

                            ¡Esperamos que tu estadía sea increíble! Bueno para usted,
                            <br />Immiworld.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thanks section end -->


<x-en.footer />
