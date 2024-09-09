<x-frontend.head />

<div class="authentication signup-section">
    <div class="auth-body">
        <form action="{{ route('register') }}" method="POST">

            @csrf

            <div class="auth-section">

                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas logo" />
                    </a>
                </div>

                <div class="auth-heading">S'inscrire</div>
                <div class="auth-inputs">
                    <div class="email">
                        <label for="">Nom du personnage *</label>
                        <input name="username" type="text" class="mt-2 mb-3" value="{{ old('username') }}" onkeydown="return /[a-zA-Z\-]/i.test(event.key)" />
                    </div>
                    <div class="email">
                        <label for="">Nom et Prenom *</label>
                        <input type="text" name="name" class="mt-2" value="{{ old('name') }}" required />
                    </div>
                    <div class="email mt-3">
                        <label for="">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 mb-3" />
                    </div>
                    <div class="password">
                        <label for="">Mot de passe *</label>
                        <input type="password" id="password" name="password" required autocomplete="new-password"
                            class="mt-2" />
                    </div>
                    <div class="password mt-3">
                        <label for="">Confirmez votre mot de passe*</label>
                        <input type="password" id="password_confirmation" class="mt-2" name="password_confirmation"
                            required autocomplete="new-password" />
                    </div>
                </div>
                <div class="remember-me d-flex align-items-center justify-content-between w-100">
                    <div>
                        <input id="remember_me" type="checkbox" name="remember" checked required />
                        <label for="huey">J'ai lu les conditions de DropKamas et je suis d'accord.</label>
                    </div>
                </div>

                <div class="alert alert-danger w-100 @if ($errors->count() == 0) d-none @endif ">
                    {{ $errors->first() }}
                </div>

                <button class="main-btn w-50 py-4" type="submit">S'INSCRIRE</button>

                <a href="{{ route('login') }}">
                    <p class="create-acc">
                        Vous avez déjà un compte ? Connectez-vous !
                    </p>
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