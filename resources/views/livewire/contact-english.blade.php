<div class="contacts-2-form-wrapper">
    <div class="form-block-contacts w-form">
        <form name="email-form" wire:submit.prevent="submit" method="post" >

            @csrf

            <h3 class="form-heading">Contact Us</h3>

            <!-- Name Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="First and Last Name" type="text" required wire:model.defer="name" />
            
            <!-- Email Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Email Address" type="email" required wire:model.defer="email" />
            
            <!-- Phone Input -->
            <input class="contacts-input white-style w-input" maxlength="256" placeholder="Phone Number" type="number" required wire:model.defer="phone" />
            
            <!-- Message Input -->
            <textarea class="contacts-textarea white-style w-input" placeholder="Your Message" maxlength="5000" id="field-2" required wire:model.defer="message"></textarea>
            
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
                <div>Thank you! Your message has been received.</div>
            </div>
    
            <!-- Error Message -->
            <div class="error-message w-form-fail" style="display: {{ $status === 'error' ? 'block' : 'none' }}">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>

            <br>


            <input type="hidden" value="{{ $service }}" >

            <!-- Submit Button -->
            <input type="submit" class="primary-button full-width-mobile w-button" value="Submit" />
        </form>

    </div>
</div>
