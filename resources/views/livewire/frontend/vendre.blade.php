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

    <section class="acheter-processing bg-not-white">
        <div class="container @if ($vendre_status == true) d-none @endif">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="kamas-settings">
                        <div class="selector" id="formule">
                            <label for="" class="mt-0">Serveur :</label>
                            <div id="selectField"
                                onclick="$('ul.serversList').toggle('slow'); $('.input-arrow-servers').toggleClass('active')">
    
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg" class="dofus-egg" />
                                    <p id="selectText">{{ $server->name }} - ( {{ $server->map->name }} )</p>
                                </div>
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-servers" />
                            </div>
                            <ul id="list" class="mt-3 serversList">
    
                                @foreach ($servers as $the_server)
                                    @if ( $the_server->active == true )     
                                        <li class="options @if ($the_server->id == $server->id) d-none @endif"
                                            wire:click="change_server({{ $the_server->id }})">
                                            <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg"
                                                class="dofus-egg" />
                                            <p>{{ $the_server->name }} - ( {{ $the_server->map->name }} )</p>
                                        </li>
                                    @endif
                                @endforeach
    
                            </ul>
                        </div>
                        <div class="input">
                            <label for="">Nom en jeu : </label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="nom_en_jeu" type="text" id="normalInput"
                                    onkeydown="return /[a-zA-Z\-]/i.test(event.key)" /> <br>
                            </div>
                            @error('nom_en_jeu')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="selector">
                            <label for="">Methodes de paiement :</label>
    
                            
    
                            <div id="selectField"
                                onclick="$('ul.paymentsList').toggle('slow'); $('.input-arrow-payments').toggleClass('active')">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/payments/' . $payment->svg_name . '.svg') }}"
                                        alt="{{ $payment->name }}" class="currency ps-2" />
                                    
                                        <p id="selectText">{{ $payment->name }}</p>
                                </div>
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-payments" />
                            </div>
    
                            <ul id="list" class="mt-3 paymentsList">
    
                                @foreach ($payments as $paym)
                                    <li class="options @if ($paym->id == $active_payment_id) d-none @endif"
                                        wire:click="change_payment({{ $paym->id }})">
                                        <img src="{{ asset('frontend/images/payments/' . $paym->svg_name . '.svg') }}"
                                            alt="{{ $paym->name }}" class="currency" />
                                            <p>{{ $paym->name }}</p>
                                    </li>
                                @endforeach
    
                            </ul>
    
                        </div>
    
                        <div class="input mt-3">
                            <label for="">Quantité de kamas :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="quantity" type="number" min="1" step="0.1" id="normalInput"
                                    placeholder="100M" />
                            </div>
                            @error('quantity')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            <p class="w-75 mt-2">
                                Quantité de kamas | (en millions, par exemple
                                <span class="text-danger">10.3</span> =
                                <span class="text-danger">10 300 000</span> )
                            </p>
                        </div>
                        <hr />
    
                        {{ $payment->svg_name }}
    
                        @if ( $payment->svg_name == 'cih'  )
                            <div class="">
                                <p>
                                    Prix par million : <span class="text-danger">{{ $server->cih_price }} DH</span>
                                </p>
                                <p>Montant total : <span class="text-danger">
                                    @if ( $quantity > 0 )
                                        {{ $quantity * $server->cih_price }} DH
                                    @else
                                        {{ 0 }} DH                               
                                    @endif
                                </span></p>
                            </div>
                        @elseif ( $payment->svg_name == 'paypal' )
                            <div class="">
                                <p>
                                    Prix par million : <span class="text-danger">{{ $server->paypal_price }} €</span>
                                </p>
                                <p>Montant total : <span class="text-danger">
                                    @if ( $quantity > 0)
                                        {{ $quantity * $server->paypal_price }} €
                                    @else                                
                                        0 €
                                    @endif
                                </span></p>
                            </div>
                        @elseif ( $payment->svg_name == 'usdt' )
                            <div class="">
                                <p>
                                    Prix par million : <span class="text-danger">{{ $server->price }} $</span>
                                </p>
                                <p>Montant total : <span class="text-danger">
                                    @if ( $quantity > 0)
                                        {{ $quantity * $server->price }} $
                                    @else                                
                                        0 $
                                    @endif
                                </span></p>
                            </div>
                        @elseif ( $payment->svg_name == 'skrill' )
                            <div class="">
                                <p>
                                    Prix par million : <span class="text-danger">{{ $server->skrill_price }} €</span>
                                </p>
                                <p>Montant total : <span class="text-danger">
                                    @if ($quantity > 0 ) 
                                        {{ $quantity * $server->skrill_price }} €
                                    @else
                                        0 €
                                    @endif
                                    </span></p>
                            </div>
                        @else
                            <div class="">
                                <p>
                                    Prix par million : <span class="text-danger">{{ $server->skrill_price }} €</span>
                                </p>
                                <p>Montant total : <span class="text-danger">
                                    @if ($quantity > 0 ) 
                                    {{ $quantity * $server->skrill_price }} €
                                    @else
                                    0 €
                                    @endif
                                    </span></p>
                            </div>
                        @endif
    
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="kamas-settings w-100 sticky-top">
                        <div class="input">
                            <label for="">Email du contact :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="email" type="email" id="normalInput"
                                    placeholder="Your-email@email.com" />
                            </div>
                            @error('email')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input">
                            <label for="">Nom et prenoms :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="nom_et_prenom" type="text" id="normalInput"
                                    placeholder="Your nom et prenoms" />
                            </div>
                            @error('nom_et_prenom')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
    
                        {{-- paypal  --}}
                        <div class="input @if ($payment->svg_name != 'paypal') d-none @endif">
                            <label for="">Adresse e-mail Paypal :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="paypal_email" type="text" id="normalInput"
                                    placeholder="Paypal mail ..." />
                            </div>
                            @error('paypal_email')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
    
                        {{-- Skrill  --}}
                        <div class="input @if ($payment->svg_name != 'skrill') d-none @endif">
                            <label for="">Adresse e-mail Skrill :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="skrill_email" type="text" id="normalInput"
                                    placeholder="Skrill mail ..." />
                            </div>
                            @error('skrill_email')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
    
                        {{-- Usdt  --}}
                        <div class="input @if ($payment->svg_name != 'usdt') d-none @endif">
                            <label for="">Adresse usdt (TRX) :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="usdt_adresse" type="text" id="normalInput"
                                    placeholder="Adresse usdt ..." />
                            </div>
                            @error('usdt_adresse')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
    
                        {{-- Virment bancaire --}}
                        <div class="input @if ($payment->svg_name != 'bank-transfer') d-none @endif">
                            <label for="">Le nom de votre banque :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="bank_nom" type="text" id="normalInput"
                                    placeholder="Nom de banque ..." />
                            </div>
                            @error('bank_nom')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
    
                            <label for="">Votre numéro de compte bancaire :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="bank_numero" type="number" id="normalInput"
                                    placeholder="Numéro de compte ..." />
                            </div>
                            @error('bank_numero')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Cih --}}
                        <div class="input @if ($payment->svg_name != 'cih') d-none @endif">
                            
                            <label for="">Votre numéro de compte bancaire Marocaine (RIB) :</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="cih_rib" type="number" id="normalInput"
                                    placeholder="Numéro de compte ..." />
                            </div>
                            @error('cih_rib')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="alert alert-info mt-2">
                            Le paiement de vos commandes de vente kamas est instantané
                        </div>

                        @auth
                            <div wire:loading.remove wire:click="save_order()" class="main-btn mt-3 py-4"
                                style="cursor: pointer">Suivant</div>
                            <div wire:loading wire:target="save_order" class="main-btn mt-3 py-4 w-100"
                                style="cursor: pointer">
                                <div class="loading-animation">
                                    <img src="{{ asset('frontend/images/svg/loading-animation.svg') }}"
                                        alt="Loading animation">
                                </div>
                            </div>
                        @endauth
                        @guest
                            <div class="alert alert-warning mt-2">
                                Veuillez vous <a href="{{ route('login') }}">connecter</a> pour lancer une demande de vente. <br>
                                Si vous n'êtes pas inscrit, veuillez <a href="{{ route('register') }}">créer un compte</a> avant de pouvoir passer vos demandes de vente.
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container @if ($vendre_status == false) d-none @endif">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="vendre-steps">
                        <div class="vendre-step">
                            <div class="number">
                                1
                            </div>
                            <div class="vendre-paragraph">
                                <p>
                                    Une fois votre demande de vendre des kamas a été passé sur le site
                                    avec succès, connecter vous sur le jeu et patientez entre 10 à 15 minutes.
                                </p>
                            </div>
                        </div>
                        <div class="vendre-step">
                            <div class="number">
                                2
                            </div>
                            <div class="vendre-paragraph">
                                <p>
                                    Après 10-15 minutes, un de nos agents va vous contacter en jeu
                                    avec un message qui indique la position de l’échange et le numéro
                                    de votre commande. Veuillez bien vérifier le numéro de commande
                                    reçu, et faite bien attention aux arnaqueurs.
                                </p>
                            </div>
                        </div>
                        <div class="vendre-step">
                            <div class="number">
                                3
                            </div>
                            <div class="vendre-paragraph">
                                <p>
                                    Dans le cas où vous n’avez pas reçu un message sur le jeu,
                                    contacter nous via le Live Chat ou bien rejoignez le Discord
                                    <a href="{{ setting('site.discord') }}" target="_blank"><span>Dropkamas</span></a> et
                                    ouvrir un
                                    ticket au salon Support et envoyer un message avec le numéro de votre commande.
                                </p>
                            </div>
                        </div>
                        <div class="vendre-step">
                            <div class="number">
                                4
                            </div>
                            <div class="vendre-paragraph">
                                <p>
                                    Nous vous payons avec la solution que vous désirez apres la confirmation de votre
                                    demande et la
                                    reception de vos kamas
                                    Nous vous payons dans <span>30 Min</span> jusqu'a <span>4 heures</span> après la prise
                                    de vos
                                    kamas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="vendre-steps sticky-top">
                        <div class="confirmation">
                            <div class="confirmation_title">
                                <h2>Confirmation</h2>
                            </div>
                            <p>
                                Il est important que vous lisiez attentivement les étapes d'une
                                transaction afin que vous ne rencontriez aucun soucis lors de la
                                vente de vos kamas.
                            </p>
                            <form>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        required checked disabled />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        J'ai lu les etapes de dropkamas et je suis d'accord.
                                    </label>
                                </div>
                            </form>
                            <a href="{{ route('voyager.offers.index') }}">
                                <div wire:click="confirm_vendre()" class="main-btn mt-3 py-4" style="cursor: pointer">
                                    Confirm</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- Tables start --}}
        <div class="container mt-4 @if ($vendre_status == true ) d-none @endif">
            <div class="row">
                {{-- Classique --}}
                <div class="all-ventes-tables col-12 col-md-12 col-lg-12">
                    <div class="kamas-settings mb-3">
                        <div class="table-title">
                            Classique
                        </div>
    
                        <div class="table-content" >
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Serveur</th>
                                        <th scope="col">Paypal</th>
                                        <th scope="col">Skrill</th>
                                        <th scope="col">Mad</th>
                                        <th scope="col">Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $servers->where('map_id', 1) as $server )    
                                        <tr @if ( $server->active == true ) style="cursor:pointer;" wire:click="change_server({{ $server->id }})" onclick="$('html, body').animate({scrollTop: $('div#formule').offset().top}, 50);" @endif >
                                            <th scope="row">{{ $server->name }} </th>
                                            <td>{{ $server->paypal_price }}€</td>
                                            <td>{{ $server->skrill_price }}€</td>
                                            <td>{{ $server->cih_price }}dh</td>
                                            @if ( $server->active == true )
                                                <td class="incomplet">Incomplet</td>
                                            @else 
                                                <td class="complet">Complété</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Touch --}}
                <div class="all-ventes-tables col-12 col-md-12 col-lg-12">
                    <div class="kamas-settings mb-3">
                        <div class="table-title">
                            Touch
                        </div>
    
                        <div class="table-content" >
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Serveur</th>
                                        <th scope="col">Paypal</th>
                                        <th scope="col">Skrill</th>
                                        <th scope="col">Mad</th>
                                        <th scope="col">Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $servers->where('map_id', 2) as $server )    
                                        <tr @if ( $server->active == true ) style="cursor:pointer;" wire:click="change_server({{ $server->id }})" onclick="$('html, body').animate({scrollTop: $('div#formule').offset().top}, 50);" @endif >
                                            <th scope="row">{{ $server->name }} </th>
                                            <td>{{ $server->paypal_price }}€</td>
                                            <td>{{ $server->skrill_price }}€</td>
                                            <td>{{ $server->cih_price }}dh</td>
                                            @if ( $server->active == true )
                                                <td class="incomplet">Incomplet</td>
                                            @else 
                                                <td class="complet">Complété</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Retro --}}
                <div class="all-ventes-tables col-12 col-md-12 col-lg-12">
                    <div class="kamas-settings mb-3">
                        <div class="table-title">
                            Retro
                        </div>
    
                        <div class="table-content" >
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Serveur</th>
                                        <th scope="col">Paypal</th>
                                        <th scope="col">Skrill</th>
                                        <th scope="col">Mad</th>
                                        <th scope="col">Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $servers->where('map_id', 3) as $server )    
                                        <tr @if ( $server->active == true ) style="cursor:pointer;" wire:click="change_server({{ $server->id }})" onclick="$('html, body').animate({scrollTop: $('div#formule').offset().top}, 50);" @endif >
                                            <th scope="row">{{ $server->name }} </th>
                                            <td>{{ $server->paypal_price }}€</td>
                                            <td>{{ $server->skrill_price }}€</td>
                                            <td>{{ $server->cih_price }}dh</td>
                                            @if ( $server->active == true )
                                                <td class="incomplet">Incomplet</td>
                                            @else 
                                                <td class="complet">Complété</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tablas end --}}
    
    </section>
    
</div>