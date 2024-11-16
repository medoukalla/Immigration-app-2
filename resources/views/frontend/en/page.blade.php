<x-en.head title="{{ setting('site.title') . ' - ' . $page->title }}" />

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
                                <img src="{{ asset('storage' . '/' . $page->image) }}" alt="img"
                                    class="img-fluid mainImg">
                                <div class="box">
                                    @if ($page->icon != '[]')
                                        {{-- <img src="{{ asset('storage' . '/' . json_decode($page->icon)[0]->download_link) }}" alt="img" class="img-fluid"> --}}
                                    @endif
                                    <p>{{ $page->title }}</p>
                                </div>
                            </div>


                            <!-- en espagne end  -->
                            <div class="wrppText wrppText2">
                                {{ $page->excerpt }}
                            </div>
                            <!-- wrppText end -->
                            
                            <!-- en espagne end  -->
                            <div class="wrppText wrppText2">
                                {!! $page->body !!}
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


<x-en.footer />
