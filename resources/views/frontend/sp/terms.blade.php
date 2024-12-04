<x-sp.head title="{{ setting('site.title') }}" />

<!-- Top menu navbar -->
    <x-sp.main-navbar route="{{route('frontend.index') }}" />


    <!-- Banner hero section -->
    <x-sp.contact-hero />

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
