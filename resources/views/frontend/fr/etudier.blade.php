<x-fr.head title="{{ setting('site.title') . ' - Étudier en espagne' }}" />


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
                <a href="">Étudier en espagne</a>


            </p>
            <h2 class="text-center">Qu'est ce que je peux <br>
                étudier en Espagne?</h2>
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
                            <img src="{{ asset('img/img05.png') }}" alt="img" class="img-fluid mainImg">
                            <div class="box">
                                <img src="{{ asset('img/StudyIconOrange.png') }}" alt="img" class="img-fluid">
                                <p>Qu'est ce que je peux <br>
                                    étudier en Espagne?</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->
                        <div class="wrppText">
                            <p>En Espagne, les étudiants marocains ont accès à une offre académique variée, qui comprend
                                non
                                seulement des programmes
                                universitaires en licence et en master, mais également des programmes de formation
                                professionnelle
                                (grado superior) et
                                des programmes préparatoires à l'université (selectividad). De plus, étudier en Espagne
                                offre
                                également l'opportunité
                                d'apprendre la langue espagnole, une compétence très recherchée sur le marché du travail
                                international.</p>
                            <p>Les étudiants marocains peuvent choisir d'étudier l'espagnol dans une école de langue
                                spécialisée,
                                pour acquérir les
                                compétences linguistiques nécessaires pour communiquer efficacement avec les locaux,
                                ainsi que pour
                                améliorer leurs
                                perspectives professionnelles en Espagne et dans d'autres pays hispanophones.</p>
                            <p>Pour ceux qui souhaitent poursuivre des études universitaires, l'Espagne offre une gamme
                                de
                                programmes universitaires en
                                licence et en master, dans des domaines tels que le droit, l'économie, l'ingénierie, les
                                sciences
                                humaines, la
                                technologie de l'information, la santé, les sciences sociales et bien plus encore.Les
                                étudiants
                                marocains peuvent
                                également suivre une formation professionnelle (grado superior) pour acquérir des
                                compétences
                                spécialisées dans un
                                domaine professionnel spécifique, ce qui peut leur ouvrir de nombreuses portes pour leur
                                future
                                carrière.</p>
                            <p>Enfin, les étudiants marocains peuvent suivre une année préparatoire (selectividad) pour
                                accéder à
                                l'université
                                espagnole. Cette année préparatoire leur permet de se préparer aux examens d'entrée à
                                l'université
                                espagnole, ainsi que
                                de perfectionner leur maîtrise de la langue espagnole.</p>
                            <p>En somme, étudier en Espagne offre aux étudiants marocains une variété d'options
                                académiques, ainsi
                                que la possibilité
                                d'apprendre l'espagnol et de s'immerger dans la culture espagnole.
                            </p>
                        </div>
                        <!-- espagne start  -->
                        <div class="espagneWrapp">
                            <!-- row start  -->
                            <div class="row">
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg1">
                                        <a href="{{ url('fr/page/Etudier-en-espagne-sans-Selectividad') }}">
                                            <h4>Étudier en espagne <br>
                                                Sans Selectividad</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->

                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg2">
                                        <a href="{{ url('fr/page/etudier-la-selectividad-en-espagne') }}">
                                            <h4>Étudier la selectividad <br>
                                                en Espagne</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg3">
                                        <a href="{{ url('fr/page/etudier-la-langue-en-espagne') }}">
                                            <h4>Étudier la langue <br>
                                                en espagne</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg4">
                                        <a href="{{ url('fr/page/etudier-la-licence-en-espagne') }}">
                                            <h4>Étudier la licence <br>
                                                en espagne</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->
                                <!-- single item start  -->
                                <div class="col-lg-6">
                                    <div class="item bg5">
                                        <a href="{{ url('fr/page/etudier-le-grado-superior-en-espagne') }}">
                                            <h4>Formation professionnelle <br>
                                                (Grado superior)</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- single item end -->

                            </div>
                            <!-- row end -->
                        </div>
                        <!-- espagne end -->
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
