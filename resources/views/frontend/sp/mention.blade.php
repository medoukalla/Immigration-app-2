<x-sp.head title="{{ setting('site.title') . ' - Politique de confidentialité' }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Mention legal</a>

            </p>
            <h2 class="text-center">Mention legal</h2>
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

            {!! setting('pages.mention_legal_espagnol') !!}

        </div>
        <!-- Des packs end -->
</main>
<!-- main end -->


<x-sp.footer />
