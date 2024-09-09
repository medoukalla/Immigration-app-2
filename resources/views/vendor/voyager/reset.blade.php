@extends('voyager::auth.master')

@section('content')

    <!-- Logo -->
    <div class="app-brand justify-content-center mb-4 mt-2">

        <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#e28a0c" />
            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#e28a0c" />
        </svg>
        </span>
        <span class="app-brand-text demo text-body fw-bold ms-1">{{ setting('site.title') }}</span>
        </a>
        
    </div>

    <!-- /Logo -->
    

    @if ( isset( Request::toArray()['email'] ) && isset( Request::toArray()['token'] ) )

        <h4 class="mb-1 pt-2">{{ __('generic.set-new-password') }}</h4>
        <br>
        
        <form id="formAuthentication" class="mb-3" action="{{ route('password.update') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('voyager::generic.email') }}</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ Request::toArray()['email'] }}"  required >
                <input type="hidden" name="token" value="{{ Request::toArray()['token'] }}">
            </div>

            <div class="mb-3 form-password-toggle">
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="{{ __('voyager::generic.password') }}" aria-describedby="password" required />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
                
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password_confirmation" placeholder="{{ __('voyager::generic.password') }}" aria-describedby="password" required />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
            </div>
            
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('generic.reset') }}</button>
            </div>
        </form>
    @else

        <h4 class="mb-1 pt-2">{{ __('generic.reset-password') }}</h4>
        <br>

        <form id="formAuthentication" class="mb-3" action="{{ route('password.reset') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('voyager::generic.email') }}</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="{{ __('voyager::generic.email') }}" required autofocus>
            </div>
            
            
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">{{ __('generic.reset') }}</button>
            </div>
        </form>
    @endif

    @if(!$errors->isEmpty())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{ $err }} <br>
            @endforeach
        </div>
    @endif
    @if ( Session::has('status') )
        <div class="alert alert-warning">
            {{ Session::get('status') }}
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
