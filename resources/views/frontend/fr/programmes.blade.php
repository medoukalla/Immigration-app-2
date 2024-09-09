<x-fr.head title="{{ setting('site.title') . ' - Programmes' }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="{{ route('frontend.sp.index') }}">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Programmes d’études
                </a>

            </p>
            <h2 class="text-center">Programmes d’études</h2>
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
                        <!-- Programmes wrapp start  -->
                        <div class="ProgrammesWrapp">
                            <!-- single item start  -->
                            <div class="ProgrammesItem @if (is_null($linguistique) || count($linguistique) == 0) d-none @endif ">
                                <h2>Programmes de <span>Séjour
                                        linguistique</span></h2>
                                <!-- row start  -->
                                <div class="row">

                                    @foreach ($linguistique as $lings)
                                        <!-- single item start  -->
                                        <div class="col-lg-6 mb-4">
                                            <div class="itemInner shadow">
                                                <div class="boxTop"
                                                    style="background-image:linear-gradient(1deg, #000000, transparent), url({{ asset('storage' . '/' . $lings->image) }})">
                                                    <div class="d-flex justify-content-between">
                                                        @php $date = strtotime($lings->year);  @endphp
                                                        <span class="yearsText">{{ date('Y', $date) }}</span>
                                                        <span class="p">Séjour
                                                            linguistique</span>
                                                    </div>
                                                    <h4>{{ $lings->title }}</h4>
                                                    <p>A partir de <strong>{{ $lings->price }}€</strong></p>
                                                </div>
                                                <div class="boxBootom">
                                                    <p><strong>Ville :</strong> {{ $lings->city }}</p>
                                                    <p><strong>Durée du programme :</strong>
                                                        {{ $lings->duree_de_programme }}</p>
                                                    <a href="{{ route('frontend.nos_packs') }}">Consulter nos packs</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single item end  -->
                                    @endforeach

                                </div>
                                <!-- row end -->
                            </div>
                            <!-- single item end -->

                            <!-- single item start  -->
                            <div class="ProgrammesItem @if (is_null($selectividad) || count($selectividad) == 0) d-none @endif ">
                                <h2>Programmes de <span>Selectividad</span></h2>
                                <!-- row start  -->
                                <div class="row">

                                    @foreach ($selectividad as $lings)
                                        <!-- single item start  -->
                                        <div class="col-lg-6 mb-3">
                                            <div class="itemInner shadow">
                                                <div class="boxTop"
                                                    style="background-image: linear-gradient(1deg, #000000, transparent), url({{ asset('storage' . '/' . $lings->image) }})">
                                                    <div class="d-flex justify-content-between">
                                                        @php $date = strtotime($lings->year);  @endphp
                                                        <span class="yearsText">{{ date('Y', $date) }}</span>
                                                        <span class="p">Selectividad</span>
                                                    </div>
                                                    <h4>{{ $lings->title }}</h4>
                                                    <p>A partir de <strong>{{ $lings->price }}€</strong></p>
                                                </div>
                                                <div class="boxBootom">
                                                    <p><strong>Ville :</strong> {{ $lings->city }}</p>
                                                    <p><strong>Durée du programme :</strong>
                                                        {{ $lings->duree_de_programme }}</p>
                                                    <a href="{{ route('frontend.nos_packs') }}">Consulter nos packs</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single item end  -->
                                    @endforeach


                                </div>
                                <!-- row end -->
                            </div>
                            <!-- single item end -->

                            <!-- single item start  -->
                            <div class="ProgrammesItem @if (is_null($licence) || count($licence) == 0) d-none @endif ">
                                <h2>Programmes de <span>Licence</span></h2>
                                <!-- row start  -->
                                <div class="row">

                                    @foreach ($licence as $lings)
                                        <!-- single item start  -->
                                        <div class="col-lg-6 mb-3">
                                            <div class="itemInner shadow">
                                                <div class="boxTop"
                                                    style="background-image: linear-gradient(1deg, #000000, transparent), url({{ asset('storage' . '/' . $lings->image) }})">
                                                    <div class="d-flex justify-content-between">
                                                        @php $date = strtotime($lings->year);  @endphp
                                                        <span class="yearsText">{{ date('Y', $date) }}</span>
                                                        <span class="p">Licence</span>
                                                    </div>
                                                    <h4>{{ $lings->title }}</h4>
                                                    <p>A partir de <strong>{{ $lings->price }}€/An</strong></p>
                                                </div>
                                                <div class="boxBootom">
                                                    <p><strong>Ville :</strong> {{ $lings->city }}</p>
                                                    <p><strong>Durée du programme :</strong>
                                                        {{ $lings->duree_de_programme }}</p>
                                                    <a href="{{ route('frontend.nos_packs') }}">Consulter nos packs</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single item end  -->
                                    @endforeach



                                </div>
                                <!-- row end -->
                            </div>
                            <!-- single item end -->

                            <!-- single item start  -->
                            <div class="ProgrammesItem @if (is_null($master) || count($master) == 0) d-none @endif ">
                                <h2>Programmes de <span>Master</span></h2>
                                <!-- row start  -->
                                <div class="row">

                                    @foreach ($master as $lings)
                                        <!-- single item start  -->
                                        <div class="col-lg-6 mb-3">
                                            <div class="itemInner shadow">
                                                <div class="boxTop"
                                                    style="background-image: linear-gradient(1deg, #000000, transparent), url({{ asset('storage' . '/' . $lings->image) }})">
                                                    <div class="d-flex justify-content-between">
                                                        @php $date = strtotime($lings->year);  @endphp
                                                        <span class="yearsText">{{ date('Y', $date) }}</span>
                                                        <span class="p">Master</span>
                                                    </div>
                                                    <h4>{{ $lings->title }}</h4>
                                                    <p>A partir de <strong>{{ $lings->price }}€/An</strong></p>
                                                </div>
                                                <div class="boxBootom">
                                                    <p><strong>Ville :</strong> {{ $lings->city }}</p>
                                                    <p><strong>Durée du programme :</strong>
                                                        {{ $lings->duree_de_programme }}</p>
                                                    <a href="{{ route('frontend.nos_packs') }}">Consulter nos packs</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single item end  -->
                                    @endforeach



                                </div>
                                <!-- row end -->
                            </div>
                            <!-- single item end -->



                            <!-- single item start  -->
                            <div class="ProgrammesItem @if (is_null($grade_sup_a) || count($grade_sup_a) == 0) d-none @endif ">
                                <h2>Programmes de <span>Grado superior</span></h2>
                                <!-- row start  -->
                                <div class="row">

                                    @foreach ($grade_sup_a as $lings)
                                        <!-- single item start  -->
                                        <div class="col-lg-6 mb-3">
                                            <div class="itemInner shadow">
                                                <div class="boxTop"
                                                    style="background-image: linear-gradient(1deg, #000000, transparent), url({{ asset('storage' . '/' . $lings->image) }})">
                                                    <div class="d-flex justify-content-between">
                                                        @php $date = strtotime($lings->year);  @endphp
                                                        <span class="yearsText">{{ date('Y', $date) }}</span>
                                                        <span class="p">Grado superior</span>
                                                    </div>
                                                    <h4>{{ $lings->title }}</h4>
                                                    <p>A partir de <strong>{{ $lings->price }}€/An</strong></p>
                                                </div>
                                                <div class="boxBootom">
                                                    <p><strong>Ville :</strong> {{ $lings->city }}</p>
                                                    <p><strong>Durée du programme :</strong>
                                                        {{ $lings->duree_de_programme }}</p>
                                                    <a href="{{ route('frontend.nos_packs') }}">Consulter nos packs</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- single item end  -->
                                    @endforeach


                                </div>
                                <!-- row end -->
                            </div>
                            <!-- single item end -->

                        </div>
                        <!-- Programmes wrapp end -->
                    </div>
                </div>
                <!-- single item end -->

                <!-- single item start  -->
                <div class="col-lg-5">
                    <div class="itemRight sticky-top">
                        <h2>Besoin d’aide?</h2>
                        <h4>Contactez-nous</h4>
                        <p><strong>Live Chat:</strong> Le délai d'attente moyen est de 3 minutes.</p>
                        <p><strong>Demander à être rappelé:</strong> Disponible uniquement sous un rendez vous</p>
                        <p><strong>Réseaux sociaux:</strong> Le délai d'attente moyen est de 15 minutes.</p>

                        <x-links_area />

                    </div>


                </div>
                <!-- single item end -->

            </div>
            <!-- .row end -->
        </div>
    </div>
</main>
<!-- main end -->


<x-fr.footer />
