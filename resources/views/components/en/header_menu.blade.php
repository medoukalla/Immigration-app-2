<!-- header start  -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('frontend.sp.index') }}">
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
                                        href="{{ url('page/preparacion-de-expediente-de-visdao') }}">Visa File
                                        Preparation</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.logements') }}">Accommodation</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.assurance') }}">Insurance</a></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.programmes') }}">Study Programs</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->


                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Study in Spain
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('page/estudiar-en-espana') }}">What can I study
                                        in Spain?</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/Estudiar-en-Espana-sin-Selectividad') }}">Study in Spain
                                        without Selectividad</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-el-idioma-en-espana') }}">Study the language in
                                        Spain</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-selectividad-en-espana') }}">Study Selectividad in
                                        Spain</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-la-licenciatura-en-espana') }}">Study a degree in
                                        Spain</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudia-el-master-en-espana') }}">Study a master's degree in
                                        Spain</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-el-grado-superior-en-espana') }}">Study a higher
                                        degree in Spain</a></li>

                            </ul>
                        </li>
                        <!-- dropdown end  -->

                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Immigration
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item dropdownB">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdownB"
                                        aria-expanded="false">
                                        Rooted Residency
                                    </a>
                                    <ul>
                                        <li><a class="dropdown-item" style="padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-para-la-formacion') }}">Rooted for
                                                Training</a></li>
                                        <li><a class="dropdown-item" style="padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-familiar') }}">Family Rooted Residency</a></li>
                                        <li><a class="dropdown-item" style="padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-laboral') }}">Labor Rooted Residency</a></li>
                                        <li><a class="dropdown-item" style="padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-social') }}">Social Rooted Residency</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/residencia-no-lucrativa') }}">Non-lucrative Residency</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/renovacion-de-la-tarjeta-de-residencia-nie') }}">Residence Card
                                        Renewal</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/autorizacion-de-estancia-por-estudios') }}">Student Visa for
                                        Spain</a></li>
                                <li><a class="dropdown-item" href="{{ url('page/apelacion-administrativa') }}">Administrative
                                        Appeal</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->


                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.quisommes_nous') }}">
                                About Us
                            </a>
                        </li>
                        <!-- nav link end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.nos_packs') }}">
                                Our Packages
                            </a>
                        </li>
                        <!-- nav link end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.blog') }}">
                                Blog
                            </a>
                        </li>
                        <!-- nav link end  -->


                    </ul>
                    <div class="languageItem align-self-center">
                        <ul>

                            <!-- dropdown start  -->
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="@if (isset($langLink)) {{ $langLink }} @else {{ route('frontend.index') }} @endif">
                                    <img src="{{ asset('img/GlobeWhite.png') }}" alt="img" class="img-fluid">
                                    English
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
