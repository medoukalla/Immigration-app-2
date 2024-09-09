<div class="col-12 col-md-4">
    <div class="logo-col">
      <div class="footer-logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas logo" class="w-100" />
      </div>
      <data class="input d-flex position-relative">
        <input wire:model="email" type="email" class="email-sub" placeholder="Écrivez votre email ici" />
        <img wire:click="save_email()" src="{{ asset('frontend/images/svg/email-arrow-footer.svg') }}" alt="Email arrow footer" />
      </data>
      @error('email')        
        <div class="alert alert-danger rounded-0 mt-3">{{ $message }}</div>
      @enderror

      @if ( $this->status == true)
        <div class="alert alert-success rounded-0 mt-3">Merci de vous être inscrit à notre newsletter</div>
      @endif

    </div>
</div>