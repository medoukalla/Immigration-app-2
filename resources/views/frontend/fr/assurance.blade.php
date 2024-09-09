<x-fr.head title="{{ setting('site.title') . ' - Assurance' }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Assurance
                </a>

            </p>
            <h2 class="text-center">Assurance</h2>
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
                            <img src="{{ asset('img/img08.png') }}" alt="img" class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/ShieldIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>Assurance</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->

                        <div class="wrppText wrppText2">
                            <p style="font-weight: bold;">Chez Immiworld, nous nous engageons à offrir le meilleur
                                rapport qualité-prix pour nos services
                                d'assurance obligatoire
                                pour les étrangers en Espagne. Nous comprenons que ce service est indispensable pour les
                                demandeurs de
                                visa.</p>
                        </div>
                        <!-- wrppText end -->
                        <!-- payment box start  -->
                        <div class="paymentBox">
                            <!-- paymentItem1 start  -->
                            <div class="paymentItem1">
                                <div class="media assurance-bnk">
                                    <img src="{{ asset('img/darkCarcle.svg') }}" alt="img"
                                        class="img-fluid mediaImg">
                                    <div class="media-body">
                                        <p>On acceptent toutes les modes de
                                            paiement au Maroc</p>
                                        <img src="{{ asset('img/payment.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- paymentItem1 end  -->
                            <div class="paymentItem2">
                                <h2>Remplissez les informations
                                    suivantes pour calculer <br>
                                    le prix de votre assurance</h2>
                                <form>
                                    <div class="InputItem">
                                        <label for="input1">Nom et Prénom:</label>
                                        <input type="text" id="input1" class="form-control"
                                            placeholder="Nom complet">
                                    </div>

                                    <div class="InputItem">
                                        <label for="input9">Select assurance:</label>
                                        <select id="input9" class="form-control">
                                            <option value="DKV">DKV</option>
                                            <option value="SANITAS">SANITAS</option>
                                            <option value="MAPFRE">MAPFRE</option>
                                            <option value="ASISA">ASISA</option>
                                            <option value="ADESLAS">ADESLAS</option>
                                        </select>
                                    </div>


                                    <div class="InputItem ">
                                        <label for="input2">Date de naissance:</label>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div>
                                                <input type="number" min="1" max="31" id="input2"
                                                    class="form-control" placeholder="JJ">
                                            </div>
                                            <div>
                                                <input type="number" min="1" max="12" id="input3"
                                                    class="form-control" placeholder="MM">
                                            </div>
                                            <div>
                                                <input type="number" min="1950" max="2024" id="input4"
                                                    class="form-control" placeholder="AAAA">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" checkBox">
                                        <label for="">Sexe:</label>
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="maleRadio"
                                                    name="sex" value="male">
                                                <label class="form-check-label" for="maleRadio">
                                                    Homme
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="femaleRadio"
                                                    name="sex" value="female">
                                                <label class="form-check-label" for="femaleRadio">
                                                    Femme
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" id="submitBtn" disabled data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Calculer le prix d’assurance</button>
                                </form>
                                <!-- modal start  -->
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal coustomModal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Remplissez les informations
                                                    suivantes pour recevoir le prix
                                                    de votre assurance</h2>
                                                <form action="">
                                                    <div class="InputItem">
                                                        <label for="number">Numéro de téléphone:</label>
                                                        <input type="number" id="number" class="form-control"
                                                            placeholder="+000 000 000 000">
                                                    </div>
                                                    <div class="InputItem">
                                                        <label for="mail">Addresse E-mail:</label>
                                                        <input type="mail" id="mail" class="form-control"
                                                            placeholder="exemple@domaine.com">
                                                    </div>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#SuccessModal">Recevoir le
                                                        prix</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal coustomModal SuccessModal fade" id="SuccessModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('img/checkGreen.svg') }}" alt="img"
                                                    class="img-fluid">
                                                <p>Votre demande est bien reçu, on va vous envoyer le prix d’assurance
                                                    par mail</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- modal end  -->
                            </div>
                        </div>
                        <!-- payment box end -->

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


<!-- Hidden form to submit  -->
<form action="{{ route('frontend.assurance.store') }}" method="post" id="secret_form"
    style="opacity: 0; display: none;">
    @csrf
    <input type="text" id="input_name" name="name">
    <input type="text" id="input_assurance" name="assurance">
    <input type="text" id="input_day" name="day">
    <input type="text" id="input_month" name="month">
    <input type="text" id="input_year" name="year">
    <input type="text" id="input_sex" name="sex">
    <input type="text" id="input_phone" name="phone">
    <input type="text" id="input_email" name="email">
</form>


<x-fr.footer />
