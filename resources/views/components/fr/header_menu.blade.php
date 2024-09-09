<!-- header start  -->
<header>
    <nav class="navbar  navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('frontend.index') }}">
                @if (setting('site.logo') == '')
                    <img src="{{ asset('/img/logo.svg') }}" alt="img" class="img-fluid" width="200px">
                @else
                    <img src="{{ asset(setting('site.logo')) }}" alt="img" class="img-fluid" width="200px">
                @endif
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Immiworld.es</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">

                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/preparation-de-dossier-visa') }}">Préparation de
                                        dossier visa</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('frontend.logements') }}">Logements</a></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.assurance') }}">Assurance</a></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.programmes') }}">Programmes
                                        d’études</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->

                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Étudier en Espagne
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('fr/page/etudier-en-espagne') }}">Quesque je
                                        peux étudier en Espagne ?</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/Etudier-en-espagne-sans-Selectividad') }}">Étudier en
                                        espagne sans Selectividad</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/etudier-la-langue-en-espagne') }}">Étudier la langue en
                                        espagne</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/etudier-la-selectividad-en-espagne') }}">Étudier la
                                        selectividad en espapgne</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/etudier-la-licence-en-espagne') }}">Étudier la licence en
                                        espagne</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/etudier-le-master-en-espagne') }}">Étudier le Master en
                                        espagne</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/etudier-le-grado-superior-en-espagne') }}">Étudier Le
                                        Grado superior en Espagne</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->

                        <!-- nav link start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Immigration
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item dropdownB">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdownB"
                                        aria-expanded="false">
                                        Arraigo
                                    </a>
                                    <ul>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important;"
                                                href="{{ url('fr/page/enracinement-pour-la-formation') }}">Arraigo para
                                                la formación</a></li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important;"
                                                href="{{ url('fr/page/enracinement-familiales') }}">Arraigo
                                                Familiar</a></li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important;"
                                                href="{{ url('fr/page/enracinement-du-travail') }}">Arraigo Laboral</a>
                                        </li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important;"
                                                href="{{ url('fr/page/enracinement-sociales') }}">Arraigo Social</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/residence-non-lucrative') }}">Résidence non
                                        lucrative</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/renouvellement-de-la-carte-sejour-nie') }}">Renouvellement
                                        du titre de séjour</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('fr/page/residence-en-espagne-pour-etudes') }}">Visa d'etude en
                                        Espagne</a></li>
                                <li><a class="dropdown-item" href="{{ url('fr/page/appel-administratif') }}">Recours
                                        administratif</a></li>

                            </ul>
                        </li>
                        <!-- nav link  end  -->

                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.quisommes_nous') }}">
                                Qui sommes-nous ?
                            </a>
                        </li>
                        <!-- nav link  end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.nos_packs') }}">
                                Nos packs
                            </a>
                        </li>
                        <!-- nav link  end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.blog') }}">
                                Blog
                            </a>
                        </li>
                        <!-- nav link  end  -->


                    </ul>
                    <div class="languageItem align-self-center">
                        <ul>

                            <!-- dropdown start  -->
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="@if (isset($langLink)) {{ $langLink }} @else {{ route('frontend.sp.index') }} @endif">
                                    <img src="{{ asset('img/GlobeWhite.png') }}" alt="img" class="img-fluid">
                                    Español
                                </a>

                            </li>
                            <!-- dropdown end  -->
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>
<!-- header end  -->
