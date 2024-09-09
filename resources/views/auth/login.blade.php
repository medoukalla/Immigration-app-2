<x-frontend.head />
<div class="authentication login-section">
    <div class="auth-body">
        <form method="post" action="{{ route('login') }}">
            @csrf



            <div class="auth-section">
                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas logo" />
                    </a>
                </div>
                <div class="auth-heading">Se connecter</div>

                <div class="auth-inputs">
                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" id="email" name="email" :value="old('email')" required autofocus
                            class="mt-2 mb-3" />
                    </div>
                    <div class="password">
                        <label for="">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="mt-2" />
                    </div>
                </div>

                <div class="alert alert-danger w-100 @if ($errors->count() == 0) d-none @endif ">
                    {{ $errors->first() }}
                </div>

                <div class="remember-me d-flex align-items-center justify-content-between w-100">
                    <div>
                        <input id="remember_me" type="checkbox" name="remember" checked />
                        <label for="huey">Se souvenir de moi</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-pass">
                            <p>Vous avez oublié votre mot de passe ?</p>
                        </a>
                    @endif
                </div>

                <button class="main-btn px-0 py-4 w-50" role="button" type="submit">
                    SE CONNECTER
                </button>




                <a href="{{ route('register') }}">
                    <p class="create-acc">Pas de compte ? Créez-en un</p>
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