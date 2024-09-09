<x-fr.head title="{{ setting('site.title') . ' - Étudier en espagne sans Selectividad' }}" />


<div class="wrapper bg-dark">

    <x-fr.header_menu />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Étudier en espagne sans Selectividad
                </a>

            </p>
            <h2 class="text-center">Étudier en espagne sans Selectividad</h2>
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
                            <img src="{{ asset('img/img2.png') }}" alt="img" class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/StudyIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>Étudier en espagne <br>
                                    sans Selectividad</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText">
                            <p>La Fase Extrajeros d'Andalousie est une option pour les étudiants marocains qui
                                souhaitent poursuivre
                                leurs études
                                universitaires en Espagne. Contrairement aux autres étudiants étrangers, les étudiants
                                marocains
                                peuvent postuler sans
                                avoir à passer la Selectividad, l'examen d'entrée commun pour accéder à l'université en
                                Espagne. <br>
                                Cependant, il y a certaines conditions à remplir pour pouvoir participer à la Fase
                                Extrajeros. Le
                                diplôme de
                                baccalauréat doit être obtenu dans les deux dernières années précédant l'inscription et
                                les étudiants
                                doivent avoir
                                l'homologation de leur diplôme de baccalauréat délivrée par le Ministère de l'éducation
                                nationale et
                                de la formation
                                professionnelle du Maroc.
                                Participer à la Fase Extrajeros peut être une excellente option pour les étudiants
                                marocains qui
                                cherchent à poursuivre
                                leurs études universitaires en Espagne, car cela leur permet de postuler dans plusieurs
                                universités
                                sans avoir à passer
                                la Selectividad. et qui veulent aussi éviter les frais de la Selectividad.</p>
                        </div>
                        <!-- Intéressé par start  -->
                        <div class="interessePar">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="itemleftD align-self-center">
                                    <img src="{{ asset('img/img3.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="itemRightD align-self-center">
                                    <h2>Intéressé par <br>
                                        un <span>visa étudiant ?</span></h2>
                                    <p>Réservez votre consultation
                                        en ligne gratuitement</p>
                                    <a href="{{ route('frontend.index') . '#consulting' }}">Réservez votre
                                        consultation</a>
                                </div>
                            </div>
                        </div>
                        <!-- Intéressé par end  -->
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
