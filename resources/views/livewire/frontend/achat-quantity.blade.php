<div>
    <div class="shine-light">
        <img src="{{ asset('frontend/images/svg/shine-light.svg') }}" alt="Shine light" />
    </div>
    <header class="second-header">
        <div class="container">
            <div class="hero-section">
    
                <!-- Mobile menu -->
                <x-frontend.mobile-menu />
    
                <!-- Desktop menu -->
                <x-frontend.desktop-menu />
    
    
                <div class="row hero-banner align-items-star" style="z-index: 100">
                    <div class="col-12 col-md-6">
                        <div class="page-title">
                            {{ $title }}
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="client-notifs">
                            <p>
                                {!! $message !!}
                            </p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </header>

    <section class="acheter-processing payment-section bg-not-white">
    
        {{-- First step quantity  --}}
        <div class="container @if ($step != 'quantity') d-none @endif">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="sticky-top">
                        <div class="processing-heading">
                            Acheter Kamas<br />
                            <span>Dofus Retro</span> Sécurisé, <br />
                            Rapide avec
                            <span>Meilleur Prix</span>
                        </div>
                        <div class="processing-image">
                            <img src="{{ asset('frontend/images/acheter-character.svg') }}" alt="Acheter Character" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="kamas-settings">
                        <div class="selector">
                            <label for="" class="mt-0">Sélectionnez le jeu</label> {{ $order_reference }}
                            <div id="selectField"
                                onclick="$('ul.mapsList').toggle('slow'); $('.input-arrow-maps').toggleClass('active')">
                                @foreach ($maps as $map)
                                    @if ($map->id == $active_map_id)
                                        <div class="d-flex align-items-center gap-2">
                                            @if ( $map->name == 'Classique' || $map->name == 'classique' )
                                                <img src="{{ asset('frontend/images/classice_servers.png') }}" alt="Dofus {{ $map->name}}" class="dofus-egg" />
                                            @elseif ( $map->name == 'Retro' || $map->name == 'retro' )
                                                <img src="{{ asset('frontend/images/retro_servers.png') }}" alt="Dofus retro {{ $map->name}}" class="dofus-egg" />
                                            @elseif ( $map->name == 'Touch' || $map->name == 'touch')
                                                <img src="{{ asset('frontend/images/touche_servers.png') }}" alt="Dofus touche {{ $map->name}}" class="dofus-egg" />
                                            @endif
                                            <p id="selectText">Dofus {{ $map->name }}</p>
                                        </div>
                                    @endif
                                @endforeach
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-maps" />
                            </div>
                            <ul id="list" class="mt-3 mapsList">
                                @foreach ($maps as $map)
                                    @if ($map->id != $active_map_id)
                                        <li class="options" wire:click="change_map({{ $map->id }})">
                                            @if ( $map->name == 'Classique' || $map->name == 'classique' )
                                                <img src="{{ asset('frontend/images/classice_servers.png') }}" alt="dofus {{ $map->name }}" class="dofus-egg" />
                                            @elseif ( $map->name == 'Retro' || $map->name == 'retro' )
                                                <img src="{{ asset('frontend/images/retro_servers.png') }}" alt="dofus {{ $map->name }}" class="dofus-egg" />
                                            @elseif ( $map->name == 'Touch' || $map->name == 'touch')
                                                <img src="{{ asset('frontend/images/touche_servers.png') }}" alt="dofus {{ $map->name }}" class="dofus-egg" />
                                            @endif
                                            <p>Dofus {{ $map->name }}</p>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="selector">
                            <label for="">Sélectionnez le serveur</label>
                            <div id="selectField"
                                onclick="$('ul.serversList').toggle('slow'); $('.input-arrow-servers').toggleClass('active')">
    
    
                                {{-- @foreach ($servers as $the_server) --}}
                                @if ($server->map_id == $active_map_id && $server->id == $active_server_id)
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('storage/'.$server->image) }}" alt="Dofus {{ $server->name }} serveur" class="dofus-egg" />
                                        <p id="selectText">{{ $server->name }}</p>
                                    </div>
                                @endif
                                {{-- @endforeach --}}
    
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-servers" />
                            </div>
                            <ul id="list" class="mt-3 serversList">
    
                                @foreach ($servers as $the_server)
                                    @if ($the_server->map_id == $active_map_id && $the_server->id != $active_server_id)
                                        <li class="options" wire:click="change_server({{ $the_server->id }})">
                                            <img src="{{ asset('storage/'.$the_server->image) }}" alt="Dofus {{ $the_server->name }} serveur" class="dofus-egg" />
                                            <p>{{ $the_server->name }}</p>
                                        </li>
                                    @endif
                                @endforeach
    
                            </ul>
                        </div>
                        <div class="input">
                            <label for="">Combien de kamas avez-vous besoin ?</label>
                            <div class="d-flex align-items-center justify-content-start gap-3">
                                <div id="inputField">
                                    <input wire:model="quantity" type="number" min="{{ $server->min }}"
                                        max="{{ $server->max }}" value="{{ $quantity }}" />
                                    <span>M Kamas</span>
                                </div>
    
                                <span>+</span>
                                <div id="inputField">
                                    <input wire:model="bonus_quantity" step="0.001" type="number" placeholder="0"
                                        @if ($bonus > 0) value="0" @endif disabled />
                                    <span>
                                        <img src="{{ asset('frontend/images/svg/bonus-icon.svg') }}" alt="Bonus icon"
                                            class="bonus-icon" />
                                    </span>
                                </div>
    
                            </div>
                            @error('quantity')
                                <div class="alert alert-danger mt-3 @if ( $quantity > 0 ) d-none @endif ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input">
                            <label for="">Votre nom dans le jeu
                                <img src="{{ asset('frontend/images/svg/aide-icon.svg') }}" alt="aide-icon"
                                    class="aide-icon" />
                            </label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="nom_dans_jeu" type="text" id="normalInput"
                                    onkeydown="return /[a-zA-Z\-]/i.test(event.key)" />
                            </div>
                            @error('nom_dans_jeu')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="selector">
                            <label for="">Sélectionnez votre méthode de paiement</label>
                            <div id="selectField" class="mb-2"
                                onclick="$('ul.paymentsList').toggle('slow'); $('.input-arrow-payments').toggleClass('active')">
                                {{-- @foreach ($payments as $payment) --}}
                                @if ($payment->id == $active_payment_id)
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('frontend/images/payments/' . $payment->svg_name . '.svg') }}"
                                                alt="{{ $payment->name }}" class="currency ps-2" />
                                        <p id="selectText">{{ $payment->name }}</p>
                                    </div>
                                @endif
                                {{-- @endforeach --}}
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-payments" />
                            </div>
                            <ul id="list" class="mt-3 paymentsList">
    
                                @foreach ($payments as $paym)
                                    <li class="options @if ($paym->id == $active_payment_id) d-none @endif"
                                        wire:click="change_payment({{ $paym->id }})">
                                        <img src="{{ asset('frontend/images/payments/' . $paym->svg_name . '.svg') }}"
                                                alt="{{ $payment->name }}" class="currency" />
                                        <p>{{ $paym->name }}</p>
                                    </li>
                                @endforeach
    
                            </ul>

                            @if ( $payment_name == 'Paypal' )
                                <div class="alert alert-danger">Assurez-vous d'utiliser l'option "Paypal entre proches" Paiement sans description</div>
                            @endif
                            
                            <p class="w-75">
                                Vous avez sélectionné
                                <span style="font-weight: 700">{{ $payment_name }}</span> comme méthode de
                                paiement. Des <span class="text-danger">frais</span> de
                                <span class="text-danger">{{ $fees }}%</span> s'appliqueront.
                            </p>
                        </div>
                        <hr />
                        <div class="d-flex align-items-center justify-content-between">
                            <span style="font-weight: 700; font-size: 22px">Total</span>
                            @if ( $payment->svg_name == 'cih' )
                                <span style="font-size: 22px">{{ $total_with_fees }} {{ $currency_symb }}</span>
                            @else
                                <span style="font-size: 22px">{{ $currency_symb }}{{ $total_with_fees }}</span>
                            @endif
                        </div>
    
                        @auth
                            <a wire:loading.remove wire:click="confirm_quantity()" href="Javascript:;" class="">
                                <div class="main-btn mt-3 w-100">Suivant</div>
                            </a>
                            <a wire:loading wire:target="confirm_quantity" href="Javascript:;" class="w-100">
                                <div class="main-btn mt-3 w-100">
                                    <div class="loading-animation">
                                        <img src="{{ asset('frontend/images/svg/loading-animation.svg') }}"
                                            alt="Loading animation">
                                    </div>
                                </div>
                            </a>
                        @endauth
                        @guest
                            <div class="alert alert-warning mt-2">
                                Veuillez vous <a href="{{ route('login') }}">connecter</a> ou <a
                                    href="{{ route('register') }}">créer un compte</a> pour achater vos kamas immédiatement!
                            </div>
                        @endguest
    
    
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Second step the payment  --}}
        <!-- Step A  -->
        <div class="container @if ($step != 'A') d-none @endif">
            <div class="payment-heading" id="stepA">Payment</div>
            <div class="payment-banner mt-3">
                <div class="top-banner">
                    <div class="ruturn-btn d-flex align-items-center gap-2" wire:click="back_to_quantity()">
                        <img class="chosen-payment-img" src="{{ asset('frontend/images/svg/arrow-back.svg') }}"
                            alt="arrow-back" height="10" />
                        <span class="method">Retour</span>
                    </div>
                    <div class="chosen-payment d-flex align-items-center justify-content-between">
                        <div class="chosen-method gap-3">
                            <img class="chosen-payment-img"
                                src="{{ asset('frontend/images/payments/' . $payment->svg_name . '.svg') }}"
                                alt="Paypal" height="30" />
                        </div>
                        <div class="payment-fees">{{ $fees }}% frais</div>
                    </div>
                </div>
                <div class="order-heading d-flex align-items-center gap-2 mt-4 mb-4">
                    <img src="{{ asset('frontend/images/svg/Oder-icon.svg') }}" alt="Order icon" class="oder-icon"
                        height="30" />
                    <p>Récapitulatif de commande</p>
                </div>
                <div class="quantities d-flex align-items-center justify-content-between">
                    <p class="chosen-game">Dofus {{ $server->map->name }}</p>
                    <p class="kamas-quantities">{{ $quantity }} M Kamas</p>
                    @if ( $payment->svg_name == 'cih' )
                        <p class="kamas-total">{{ $total_with_fees }} {{ $currency_symb }}</p>
                    @else
                        <p class="kamas-total">{{ $currency_symb }} {{ $total_with_fees }}</p>
                    @endif
                </div>
                <div class="mt-3">
                    <div class="r-payment d-flex align-items-center justify-content-between">
                        <p class="subtotal">Sous-total</p>
                        @if ( $payment->svg_name == 'cih' )
                            <p class="result">{{ $total }} {{ $currency_symb }}</p>
                        @else
                            <p class="result">{{ $currency_symb }} {{ $total }}</p>
                        @endif
                    </div>
                    <div class="r-payment d-flex align-items-center justify-content-between mt-2">
                        <p class="fees-subtotal">Frais de paiement</p>
                        @if ( $payment->svg_name == 'cih' )
                            <p class="result">{{ $fees_amount }} {{ $currency_symb }}</p>
                        @else
                            <p class="result">{{ $currency_symb }} {{ $fees_amount }}</p>
                        @endif
                    </div>
                    <div class="r-payment d-flex align-items-center justify-content-between mt-2">
                        <p class="fees-service">Frais de service</p>
                        <p class="result">Gratuit</p>
                    </div>
                </div>
            </div>
            <div class="payment-total d-flex justify-content-between align-items-center mt-3">
                <div>Total à payer</div>
                @if ( $payment->svg_name == 'cih' )
                    <div>{{ $total_with_fees }} {{ $currency_symb }}</div>
                @else
                    <div>{{ $currency_symb }} {{ $total_with_fees }}</div>
                @endif
                
            </div>
            <a href="Javascript:;" wire:click="confirm_first_step()">
                <div class="main-btn mt-3">Suivant</div>
            </a>
    
            @if ($step == 'A')
                <script>
                    $(document).ready(function() {
                        $('html, body').animate({
                            scrollTop: $("div#stepA").offset().top
                        }, 250);
                    })
                </script>
            @endif
        </div>
    
    
        <!-- Step B -->
        <div class="container @if ($step != 'B') d-none @endif">
            <div class="payment-heading" id="stepB">Payment</div>
            <div class="payment-banner mt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="ruturn-btn d-flex align-items-center gap-2" wire:click="back_to_first_step()">
                        <img class="chosen-payment-img" src="{{ asset('frontend/images/svg/arrow-back.svg') }}"
                            alt="arrow-back" height="10" />
                        <span class="method">Retour</span>
                    </div>
                    <div class="payment-fees d-flex align-items-center gap-2">  
                        <img src="{{ asset('frontend/images/payments/' . $payment->svg_name . '.svg') }}" alt=""
                        height="40" style="border-radius: 10px; border: 1px solid #0000001f" />
                    </div>
                </div>
    
                {{-- Include the payments steps  --}}
                @include('components/frontend/payments//' . $payment->svg_name)
    
            </div>
    
            @auth
            
                <a wire:loading.remove href="Javascript:;" wire:click="save_order()" class="w-25">
                    @if ( in_array($payment->svg_name, ['bancontact', 'ideal', 'giropay', 'visa', 'mastercard', 'revolute', 'stripe']) == true )
                        <div class="main-btn mt-3">Redirection vers Stripe</div>
                    @else
                        <div class="main-btn mt-3">J'ai effectué le paiement</div>
                    @endif
                </a>
    
                <a wire:loading wire:target="save_order" href="Javascript:;" class="w-25">
                    <div class="main-btn mt-3 w-100">
                        <div class="loading-animation">
                            <img src="{{ asset('frontend/images/svg/loading-animation.svg') }}" alt="Loading animation">
                        </div>
                    </div>
                </a>
            @endauth
            @guest
                <div class="alert alert-warning mt-2">
                    Veuillez vous <a href="{{ route('login') }}">connecter</a> ou <a href="{{ route('register') }}">créer un
                        compte</a> pour achater vos kamas immédiatement!
                </div>
            @endguest
    
            @if ($step == 'B')
                <script>
                    $(document).ready(function() {
                        $('html, body').animate({
                            scrollTop: $("div#stepB").offset().top
                        }, 250);
                    })
                </script>
            @endif
    
        </div>
    
    </section>

</div>
