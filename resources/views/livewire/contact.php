<div class="contacts-2-form-wrapper">
    <div class="form-block-contacts w-form">
        <form id="email-form" name="email-form"  method="post" class="form" >
            <h3 class="form-heading">Contacta con nosotros</h3>an 

            <input wire:model="name" class="contacts-input white-style w-input" maxlength="256"  placeholder="Apellido y Nombre" type="text" required="" />

            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Dirección de correo electrónico" type="email" required="" />

            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Número de teléfono" type="number" required="" />

            <textarea placeholder="Tu mensaje" maxlength="5000" id="field-2" required="" class="contacts-textarea white-style w-input"></textarea>

            <input wire:click="submit()" type="button" class="primary-button full-width-mobile w-button" value="Entregar" />
        </form>
        <div class="success-message w-form-done" style="display: none;">
            <div>¡Gracias! ¡Tu mensaje ha sido recibido!</div>
        </div>
        <div class="error-message w-form-fail" style="display: none;">
            <div>¡Ups! Algo salió mal al enviar el formulario.</div>
        </div>
    </div>
</div>