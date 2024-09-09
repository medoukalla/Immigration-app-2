<x-frontend.head />
<div class="authentication login-section">
    <div class="auth-body">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="auth-section">
                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas logo" />
                    </a>
                </div>
                <div class="auth-heading">Créer un nouveau mot de passe !</div>


                <div class="auth-inputs">
                    <div class="email">
                        <x-input-label for="email" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                </div>


                <div class="auth-inputs">
                    <div class="email">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                </div>

                <div class="auth-inputs">
                    <div class="email">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                    </div>
                </div>


                <button class="main-btn px-0 py-4 w-50" role="button" type="submit">
                    {{ __('Reset Password') }}
                </button>

                <a href="{{ route('login') }}">
                    <p class="create-acc">Connectez-vous !</p>
                </a>
            </div>
        </form>
    </div>
</div>

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