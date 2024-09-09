@extends('voyager::auth.master')

@section('content')

    <!-- Logo -->
    <div class="app-brand justify-content-center mb-4 mt-2">

        
        <a href="{{ route('voyager.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo">
              
                {{-- <img src="{{ asset('assets/img/dk-1-logo.png') }}" alt="Logo Icon" style="max-width: 250px !important;"> --}}
                <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                @if($admin_logo_img == '')
                    <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon" style="max-width: 250px !important;">
                @else
                    <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon" style="max-width: 250px !important;">
                @endif
              
            </span>
        </a>
        
    </div>

    <!-- /Logo -->
    <h4 class="mb-1 pt-2">{{ __('voyager::login.signin_below') }} 👋</h4>
    <br>

    <form id="formAuthentication" class="mb-3" action="{{ route('voyager.login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('voyager::generic.email') }}</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" required autofocus>
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">{{ __('voyager::generic.password') }}</label>
                <a href="{{ route('password.request') }}">
                <small>Forgot Password?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="{{ __('voyager::generic.password') }}" aria-describedby="password" required />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
        </div>
        <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" >
            <label class="form-check-label" for="remember-me">
                {{ __('voyager::generic.remember_me') }}
            </label>
        </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">{{ __('voyager::generic.login') }}</button>
        </div>
    </form>

    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{ $err }} <br>
            @endforeach
        </div>
    @endif

@endsection

@section('post_js')

    <script>
        var btn = document.querySelector('button[type="submit"]');
        var form = document.forms[0];
        var email = document.querySelector('[name="email"]');
        var password = document.querySelector('[name="password"]');
        btn.addEventListener('click', function(ev){
            if (form.checkValidity()) {
                btn.querySelector('.signingin').className = 'signingin';
                btn.querySelector('.signin').className = 'signin hidden';
            } else {
                ev.preventDefault();
            }
        });
        email.focus();
        document.getElementById('emailGroup').classList.add("focused");

        // Focus events for email and password fields
        email.addEventListener('focusin', function(e){
            document.getElementById('emailGroup').classList.add("focused");
        });
        email.addEventListener('focusout', function(e){
            document.getElementById('emailGroup').classList.remove("focused");
        });

        password.addEventListener('focusin', function(e){
            document.getElementById('passwordGroup').classList.add("focused");
        });
        password.addEventListener('focusout', function(e){
            document.getElementById('passwordGroup').classList.remove("focused");
        });

    </script>
@endsection
