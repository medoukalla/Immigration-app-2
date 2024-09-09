<!-- header start  -->
<header>
    <nav class="navbar  navbar-expand-lg">
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
                                Servicios
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item"
                                        href="{{ url('page/preparacion-de-expediente-de-visdao') }}">Preparación
                                        de expediente de visado</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.logements') }}">Alojamiento</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.assurance') }}">Seguro</a></li>
                                <li><a class="dropdown-item" href="{{ route('frontend.sp.programmes') }}">Programas de
                                        estudio</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->


                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Estudiar en España
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('page/estudiar-en-espana') }}">Qué puedo
                                        estudiar en España ?</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/Estudiar-en-Espana-sin-Selectividad') }}">Estudiar en
                                        España sin selectividad</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-el-idioma-en-espana') }}">Estudiar el idioma en
                                        España</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-selectividad-en-espana') }}">Estudiar la
                                        selectividad en España</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-la-licenciatura-en-espana') }}">Estudiar un grado
                                        en España</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudia-el-master-en-espana') }}">Estudiar un máster en
                                        España</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/estudiar-el-grado-superior-en-espana') }}">Estudiar el Grado
                                        superior en España</a></li>

                            </ul>
                        </li>
                        <!-- dropdown end  -->

                        <!-- dropdown start  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Extranjería
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item dropdownB">
                                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdownB"
                                        aria-expanded="false">
                                        Arraigo
                                    </a>
                                    <ul>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-para-la-formacion') }}">Arraigo para la
                                                formación</a></li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-familiar') }}">Arraigo Familiar</a></li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-laboral') }}">Arraigo Laboral</a></li>
                                        <li><a class="dropdown-item" style=" padding-left: 40px !important; "
                                                href="{{ url('page/arraigo-social') }}">Arraigo Social</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/residencia-no-lucrativa') }}">Residencia no lucrativa</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/renovacion-de-la-tarjeta-de-residencia-nie') }}">Renovación
                                        del permiso de residencia</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('page/autorizacion-de-estancia-por-estudios') }}">Visado de
                                        estudios en España</a></li>
                                <li><a class="dropdown-item" href="{{ url('page/apelacion-administrativa') }}">Recurso
                                        administrativo</a></li>
                            </ul>
                        </li>
                        <!-- dropdown end  -->


                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.quisommes_nous') }}">
                                Sobre nosotros
                            </a>
                        </li>
                        <!-- nav link  end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.nos_packs') }}">
                                Nuestros paquetes
                            </a>
                        </li>
                        <!-- nav link  end  -->
                        <!-- nav link start  -->
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('frontend.sp.blog') }}">
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
                                    href="@if (isset($langLink)) {{ $langLink }} @else {{ route('frontend.index') }} @endif">
                                    <img src="{{ asset('img/GlobeWhite.png') }}" alt="img" class="img-fluid">
                                    Français
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
