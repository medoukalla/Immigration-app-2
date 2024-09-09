<x-fr.head title="{{ setting('site.title') . ' - Logements' }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Logements
                </a>

            </p>
            <h2 class="text-center">Logements</h2>
        </div>
    </div>
    <!-- Qui sommes end -->
</div>
<!-- wrapper end  -->

<!-- main start  -->
<main>
    <!-- Logements start  -->
    <div class="Logements">
        <div class="container">
            <h2>Logements disponibles en Espagne</h2>
            <!-- LogementsWrapp start  -->
            <div class="LogementsWrapp">

                <!-- LogementsItem start  -->
                @livewire('logements-fr')
                <!-- LogementsItem end  -->

            </div>
            <!-- LogementsWrapp end  -->
        </div>
    </div>
    <!-- Logements end -->
</main>
<!-- main end -->

<x-fr.footer />


<script>
    $('.sliders1').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
</script>
