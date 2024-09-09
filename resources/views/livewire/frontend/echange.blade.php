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
        <div class="container @if ($echange_status == true) d-none @endif ">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="kamas-settings w-100">
                        <div class="selector">
                            <label for="" class="mt-0">Serveur à échanger <span>*</span></label>
                            <div id="selectField"
                                onclick="$('ul.fromList').toggle('slow'); $('.input-arrow-servers-from').toggleClass('active')">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg"
                                        class="dofus-egg" />
                                    <p id="selectText">{{ $server_from->name }} - ( {{ $server_from->map->name }} )</p>
                                </div>
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-servers-from" />
                            </div>
                            <ul id="list" class="mt-3 fromList">
                                @foreach ($servers as $the_server)
                                    <li class="options @if ($the_server->id == $server_from->id || $the_server->id == $server_to->id) d-none @endif"
                                        wire:click="change_server_from({{ $the_server->id }})">
                                        <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg"
                                            class="dofus-egg" />
                                        <p>{{ $the_server->name }} - ( {{ $the_server->map->name }} )</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="input">
                            <label for="">Quantité à donner <span>*</span></label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="quantite_a_donner" wire:change="calculate()" type="number"
                                    min="0" step="0.1" id="normalInput" />
                            </div>
                            @error('quantite_a_donner')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input mt-3">
                            <label for="">Nom de personnage sur ({{ $server_from->name }}) <span>*</span></label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="nom_en_jeu" type="text" id="normalInput"
                                    onkeydown="return /[a-zA-Z\-]/i.test(event.key)" />
                            </div>
                            @error('nom_en_jeu')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="selector mt-3">
                            <label for="" class="mt-0">Serveur souhaité <span>*</span></label>
                            <div id="selectField"
                                onclick="$('ul.toList').toggle('slow'); $('.input-arrow-servers-to').toggleClass('active')">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg"
                                        class="dofus-egg" />
                                    <p id="selectText">{{ $server_to->name }} - ( {{ $server_to->map->name }} )</p>
                                </div>
                                <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow"
                                    class="input-arrow input-arrow-servers-to" />
                            </div>
                            <ul id="list" class="mt-3 toList">
                                @foreach ($servers as $the_server)
                                    <li class="options @if ($the_server->id == $server_to->id || $the_server->id == $server_from->id) d-none @endif"
                                        wire:click="change_server_to({{ $the_server->id }})">
                                        <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="DropKamas dofus egg"
                                            class="dofus-egg" />
                                        <p>{{ $the_server->name }} - ( {{ $the_server->map->name }} )</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="input mt-3">
                            <label for="">Nom de personnage sur ({{ $server_to->name }}) <span>*</span></label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="nom_en_jeu_deuxieme" type="text" id="normalInput"
                                    onkeydown="return /[a-zA-Z\-]/i.test(event.key)" />
                            </div>
                            @error('nom_en_jeu_deuxieme')
                                <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input mt-3">
                            <label for="">Quantité à recevoir(Million) <span>*</span></label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="quantite_a_recevoir" type="text" id="normalInput" disabled />
                            </div>
                        </div>
                        <hr />
    
                        @auth
                            <div wire:loading.remove wire:click="save_echange()" class="main-btn mt-3 py-4"
                                style="cursor: pointer;">Échangez la demande</div>
    
                            <div wire:loading wire:target="save_echange" class="main-btn mt-3 py-4 w-100"
                                style="cursor: pointer;">
                                <div class="loading-animation">
                                    <img src="{{ asset('frontend/images/svg/loading-animation.svg') }}"
                                        alt="Loading animation">
                                </div>
                            </div>
                        @endauth
    
                        @guest
                            <div class="alert alert-warning mt-2">
                                Veuillez vous <a href="{{ route('login') }}">connecter</a> ou <a
                                    href="{{ route('register') }}">créer un compte</a> pour terminer cet échange
                                immédiatement!
                            </div>
                        @endguest
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="echnage-infos-side sticky-top">
                        <div class="echange-infos">
                            <div class="hint">
                                <img src="{{ asset('frontend/images/svg/question_animation.svg') }}"
                                    alt="Question animation">
                                Nous vous enverrons un message privé en jeu contenant le numéro de référence de l'échange
                                généré automatiquement par notre système. Ceci afin de confirmer que le destinataire avec
                                lequel vous échangez fait bien partie de notre équipe.
                            </div>
                            <div class="info-danger">
                                <img src="{{ asset('frontend/images/svg/danger-icon.svg') }}" alt="Danger icon">
                                <span>Attention:</span> Ne dites à personne d'autre votre Code. Si quelqu'un vous donne un
                                Code
                                incorrecte, bloquez le!!
                            </div>
                        </div>
                        <div class="get-support">
                            <span>Avez-vous le moindre problème ? Contactez-nous! ...</span>
                            <a href="javascript:void(Tawk_API.toggle())">
                                <div class="main-btn">
                                    Besoin d'aide
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container @if ($echange_status == false) d-none @endif">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2" id="echangeAlert">
                    @if (!is_null($exchange))
                        <div class="kamas-settings after-echange w-100 sticky-top">
                            <h3 class="mb-2"><span style="color: #e74c3c">Attention :</span> vigilance
                                face aux faux comptes !</h3>
                            <img src="{{ asset('frontend/images/svg/red-danger-icon.svg') }}" alt="Red Danger Icon"
                                class="mb-2" height="40">
                            <ul>
                                <li>Connectez-vous sur <span class="blue">{{ $exchange->exchange_from->name }}
                                        ({{ $exchange->from_name }})</span>, allez à <span
                                        class="blue">{{ setting('localisation-dans-le-jeu.echange-localisation-first') }}</span>
                                    et attendez
                                    notre livreur qui vous
                                    contactera avec le code d'échange. Remettez-lui (<span
                                        class="red">{{ $exchange->quantity }}M
                                        kama</span>).
                                    S'il n'est pas sur
                                    la MAP,
                                    patientez un moment.
                                </li>
                                <li>
                                    Ensuite, connectez-vous sur <span class="blue">{{ $exchange->exchange_to->name }}
                                        ({{ $exchange->to_name }})</span> et attendez le livreur à
                                    <span
                                        class="blue">{{ setting('localisation-dans-le-jeu.echange-localisation-second') }}</span>.
                                    Il vous remettra
                                    (<span class="red">{{ $exchange->quantity_get }}M kama</span>). S'il n'est pas sur
                                    la MAP,
                                    patientez un moment.
                                </li>
    
                            </ul>
    
                            <p class="text-start">Votre échange référence : <span
                                    class="blue">{{ $exchange->orderId }}</span></p>
    
    
    
                            <a href="{{ route('voyager.exchanges.index') }}">
                                <div wire:click="confirm_echange()" class="main-btn mt-3 py-4" style="cursor: pointer">
                                    Confirm
                                </div>
                            </a>
    
    
                        </div>
                    @endif
                </div>
            </div>
        </div>
    
        @if ( $echange_status == true )    
            <script>
                $(document).ready(function() {
                    $('html, body').animate({
                        scrollTop: $("div#echangeAlert").offset().top
                    }, 250);
                })
            </script>
        @endif
    </section>

</div>