<x-sp.head title="{{ setting('site.title') . ' - ' . 'Seguro' }}" />

<div class="wrapper bg-dark">

    <x-sp.header_menu :langLink="$langLink" />

    <!-- Qui sommes start  -->
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.sp.index') }}">Bienvenida</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="{{ route('frontend.sp.index') }}">Servicios</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid">

                <a href="javascript:void(0)">Seguro
                </a>

            </p>
            <h2 class="text-center">Seguro</h2>
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
                                <p>SEGURO</p>
                            </div>
                        </div>
                        <!-- en espagne end  -->

                        <div class="wrppText wrppText2">
                            <p style="font-weight: bold;">En Immiworld, Nos comprometemos a ofrecer el mejor precio para
                                nuestros servicios de seguro obligatorio para extranjeros en España.
                                Entendemos que este servicio es esencial para los solicitantes de visado.</p>
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
                                        <p>Aceptamos todos los métodos de pago en Marruecos</p>
                                        <img src="{{ asset('img/payment.png') }}" alt="img" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <!-- paymentItem1 end  -->
                            <div class="paymentItem2">
                                <h2>Rellena los siguientes datos para calcular el precio de tu seguro</h2>
                                <form>
                                    <div class="InputItem">
                                        <label for="input1">Apellido y Nombre:</label>
                                        <input type="text" id="input1" class="form-control"
                                            placeholder="Nom complet">
                                    </div>

                                    <div class="InputItem">
                                        <label for="input9">Seleccionar seguro:</label>
                                        <select id="input9" class="form-control">
                                            <option value="DKV">DKV</option>
                                            <option value="SANITAS">SANITAS</option>
                                            <option value="MAPFRE">MAPFRE</option>
                                            <option value="ASISA">ASISA</option>
                                            <option value="ADESLAS">ADESLAS</option>
                                        </select>
                                    </div>
                                    <div class="InputItem ">
                                        <label for="input2">Fecha de nacimiento:</label>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div>
                                                <input type="number" min="1" max="31" id="input2"
                                                    class="form-control" placeholder="Día">
                                            </div>
                                            <div>
                                                <input type="number" min="1" max="12" id="input3"
                                                    class="form-control" placeholder="Mes">
                                            </div>
                                            <div>
                                                <input type="number" min="1950" max="2024" id="input4"
                                                    class="form-control" placeholder="Año">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" checkBox">
                                        <label for="">Sexo:</label>
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="maleRadio"
                                                    name="sex" value="male">
                                                <label class="form-check-label" for="maleRadio">
                                                    Hombre
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="femaleRadio"
                                                    name="sex" value="female">
                                                <label class="form-check-label" for="femaleRadio">
                                                    Mujer
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" id="submitBtn" disabled data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Calcular el precio del seguro</button>
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
                                                <h2>Rellena los siguientes datos para recibir el precio de tu seguro
                                                </h2>
                                                <form action="">
                                                    <div class="InputItem">
                                                        <label for="number">Número de teléfono:</label>
                                                        <input type="number" id="number" class="form-control"
                                                            placeholder="+000 000 000 000">
                                                    </div>
                                                    <div class="InputItem">
                                                        <label for="mail">Dirección de correo electrónico:</label>
                                                        <input type="mail" id="mail" class="form-control"
                                                            placeholder="exemple@domaine.com">
                                                    </div>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#SuccessModal">Recibe el premio</button>
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
                                                <p>Tu solicitud ha sido recibida, te enviaremos el precio del seguro por
                                                    email</p>

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


<x-sp.footer />
