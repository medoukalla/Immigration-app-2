<x-frontend.head />
<div class="authentication login-section">
    <div class="auth-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="auth-section">
                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas logo" />
                    </a>
                </div>
                <div class="auth-heading">Mot de passe oublié?</div>
                <p class="text-light">
                    Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un
                    lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.
                </p>
                <div class="auth-inputs">
                    <div class="email">
                        <x-input-label for="email" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required
                            autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                </div>
                <div class="alert alert-danger w-100 @if ($errors->count() == 0) d-none @endif ">
                    {{ $errors->first() }}
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <button class="main-btn px-0 py-4 w-50" role="button" type="submit">
                    {{ __('Email Password Reset Link') }}
                </button>

                <a href="javascript:void(Tawk_API.toggle())">
                    <p class="create-acc">Connectez-vous !</p>
                </a>
            </div>
        </form>
    </div>
</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Swipper script

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
</script>
<!-- Bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/669e98e6becc2fed692906f3/1i3doahae';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->
@livewireScripts
</body>

</html>