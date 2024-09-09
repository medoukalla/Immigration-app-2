<x-fr.head title="{{ setting('site.title') . ' : Merci' }}" />
<link rel="stylesheet" href="{{ asset('css/stripe.css') }}">

<!-- Qui sommes start  -->
<div class="wrapper bg-dark">
    {{-- header --}}
    <x-fr.header_menu :langLink="$langLink" />
    {{-- Quisommes --}}
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="javascript:void(0)">Checkout</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Complété</a>
            </p>
            <h2 class="text-center">Merci</h2>
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
                        <h1 class="mb-0">Payment successful!</h1>
                        <h6 class="mt-2">Transaction number : IW-{{ $reference }}</h6>
                    </div>
                    <div class="re-thanks">
                        <p class="mb-0 text-start">
                            Cher/Chère <span>{{ $order->prenom . ' ' . $order->nom_de_famille }}</span>, <br />
                            Merci un million de fois d'avoir choisi Immiworld ! Votre
                            paiement a été reçu, et votre séjour est confirmé. <br />
                            Des questions ? Nous sommes là 24/7.
                            <a class="chat-button" href="javascript:void(0)"> <span>cliquez ici pour support!</span>
                            </a><br />

                            Impatients de rendre votre séjour génial ! Bien à vous,
                            <br />Immiworld.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- thanks section end -->


<x-fr.footer />
