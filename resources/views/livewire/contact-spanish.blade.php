<div class="contacts-2-form-wrapper">
    <div class="form-block-contacts w-form">
        <form name="email-form" wire:submit.prevent="submit" method="post" >

            @csrf

            <h3 class="form-heading">Contacta con nosotros</h3>

            <!-- Name Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Nombre y Apellido" type="text" required wire:model.defer="name" />
            
            <!-- Email Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Dirección de Correo Electrónico" type="email" required wire:model.defer="email" />
            
            <!-- Phone Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Número de Teléfono" type="number" required wire:model.defer="phone" />
            
            <!-- Message Input -->
            <textarea class="contacts-textarea white-style w-input" placeholder="Deja tu mensaje" maxlength="5000" id="field-2" required wire:model.defer="message"></textarea>
            
            @error('name') 
                <div class="error-message w-form-fail"><div>{{ $message }}</div></div>
            @enderror
            @error('email') 
                <div class="error-message w-form-fail"><div>{{ $message }}</div></div>
            @enderror
            @error('phone') 
                <div class="error-message w-form-fail"><div>{{ $message }}</div></div>
            @enderror
            @error('message') 
                <div class="error-message w-form-fail"><div>{{ $message }}</div></div>
            @enderror
            

            <!-- Success Message -->
            <div class="success-message w-form-done" style="display: {{ $status === 'success' ? 'block' : 'none' }}">
                <div>¡Gracias! Hemos recibido tu mensaje y te responderemos pronto.</div>
            </div>
    
            <!-- Error Message -->
            <div class="error-message w-form-fail" style="display: {{ $status === 'error' ? 'block' : 'none' }}">
                <div>Lo sentimos, hubo un error al enviar el formulario. Por favor, inténtalo de nuevo más tarde.</div>
            </div>

            <br>

            <input type="hidden" value="{{ $service }}" >

            <!-- Submit Button -->
            <input type="submit" class="primary-button full-width-mobile w-button" value="Enviar Mensaje" />
        </form>

    </div>
</div>
