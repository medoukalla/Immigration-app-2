<x-sp.head title="{{ setting('site.title') . ' - ' . $service->title }}" />


<div class="wrapper bg-dark">

    <x-sp.header_menu />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">{{ $service->title }}
                </a>

            </p>
            <h2 class="text-center">{{ $service->title }}</h2>
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
                            <img src="{{ asset('storage' . '/' . $service->image) }}" alt="img"
                                class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('storage' . '/' . $service->icon) }}" alt="img"
                                    class="img-fluid">
                                <p>{{ $service->title }}</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText wrppText2">
                            {!! $service->content !!}
                        </div>
                        <!-- wrppText end -->

                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>¿Necesidad de ayuda?</h2>
                        <h4>Contacto</h4>
                        <p><strong>Chat en Línea:</strong> El tiempo de espera promedio es de 3 minutos.</p>
                        <p><strong>Solicitud de llamada:</strong> Disponible solo con cita previa.</p>
                        <p><strong>Redes sociales:</strong> El tiempo de espera promedio es de 15 minutos.</p>

                        <x-links_sp_area />

                    </div>

                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-sp.footer />