<section class="payment-section bg-not-white">

    <!-- Step A  -->
    <div class="container @if ( $step == 'B') d-none @endif">
        <div class="payment-heading">Payment</div>
        <div class="payment-banner mt-3">
            <div class="chosen-payment d-flex align-items-center justify-content-between">
                <div class="chosen-method gap-3">
                    <img class="chosen-payment-img" src="{{ asset('frontend/images/svg/logos_paypal.svg') }}" alt="Paypal"
                        height="20" />
                    <span class="method">Paypal</span>
                </div>
                <div class="payment-fees">3% frais</div>
            </div>
            <div class="order-heading d-flex align-items-center gap-2 mt-4 mb-4">
                <img src="{{ asset('frontend/images/svg/Oder-icon.svg') }}" alt="Order icon" class="oder-icon" height="30" />
                <p>Récapitulatif de commande</p>
            </div>
            <div class="quantities d-flex align-items-center justify-content-between">
                <p class="chosen-game">Dofus Touch</p>
                <p class="kamas-quantities">100 M Kamas</p>
                <p class="kamas-total">€ 186.00</p>
            </div>
            <div class="mt-3">
                <div class="r-payment d-flex align-items-center justify-content-between">
                    <p class="subtotal">Sous-total</p>
                    <p class="result">€ 1.86</p>
                </div>
                <div class="r-payment d-flex align-items-center justify-content-between mt-2">
                    <p class="fees-subtotal">Frais de paiement</p>
                    <p class="result">€ 1.86</p>
                </div>
                <div class="r-payment d-flex align-items-center justify-content-between mt-2">
                    <p class="fees-service">Frais de service</p>
                    <p class="result">Gratuit</p>
                </div>
            </div>
        </div>
        <div class="payment-total d-flex justify-content-between align-items-center mt-3">
            <div>Total à payer</div>
            <div>€ 187.86</div>
        </div>
        <a href="Javascript:;" wire:click="confirm_first_step()">
            <div class="main-btn mt-3">Confirmer et Payer</div>
        </a>
    </div>


    <!-- Step B -->
    <div class="container @if ( $step == 'A') d-none @endif">
        <div class="payment-heading">Payment</div>
        <div class="payment-banner mt-3">
            <div class="d-flex align-items-center justify-content-between">
                <div class="ruturn-btn d-flex align-items-center gap-2" wire:click="back_to_first_step()">
                    <img class="chosen-payment-img" src="{{ asset('frontend/images/svg/arrow-back.svg') }}" alt="arrow-back"
                        height="10" />
                    <span class="method">Retour</span>
                </div>
                <div class="payment-fees d-flex align-items-center gap-2">
                    <img src="{{ asset('frontend/images/svg/logos_paypal.svg') }}" alt="paypal logo" height="20" />
                    Paypal
                </div>
            </div>
            <div class="steps-line mt-5 mb-5">
                <div class="step">
                    <div class="step-head">
                        Étape 1
                    </div>
                    <div class="step-content">
                        Veuillez envoyer $ 187.86 (nos frais inclus) - cliquez ici pour recevoir les informations de
                        paiement (un message automatique sera envoyé à notre support en ligne)
                    </div>
                </div>
                <div class="step">
                    <div class="step-head">
                        Étape 2
                    </div>
                    <div class="step-content">
                        Veuillez envoyer $ 187.86 (nos frais inclus) - cliquez ici pour recevoir les informations de
                        paiement (un message automatique sera envoyé à notre support en ligne)
                    </div>
                </div>
            </div>
        </div>
        <div class="main-btn mt-3">Confirmer et Payer</div>
        </a>
    </div>

</section>