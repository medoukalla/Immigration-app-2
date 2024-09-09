<x-sp.head title="{{ setting('site.title') . ' - política de confidencialidad' }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Términos y Condiciones</a>

            </p>
            <h2 class="text-center">Términos y Condiciones</h2>
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

            {!! setting('pages.terms_et_conditions_espagnol') !!}
        </div>
        <!-- Des packs end -->
</main>
<!-- main end -->


<x-sp.footer />
