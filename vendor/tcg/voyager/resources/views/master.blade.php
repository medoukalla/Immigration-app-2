<!DOCTYPE html>

<html lang="{{ config('app.locale') }}" dir="{{ Session::get('lang') == 'ar' ? 'rtl' : 'ltr' }}" class="dark-style layout-navbar-fixed layout-menu-fixed layout-compact "  data-theme="theme-default" data-assets-path="{{ asset('dashboard').'/' }}" data-template="vertical-menu-template-dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="assets-path" content="{{ route('voyager.voyager_assets') }}"/>

    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>

    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core-dark.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default-dark.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">

    @yield('css')
    @if(__('voyager::generic.is_rtl') == 'true')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
        <link rel="stylesheet" href="{{ voyager_asset('css/rtl.css') }}">
    @endif

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>


    @if(!empty(config('voyager.additional_css')))<!-- Additional CSS -->
        @foreach(config('voyager.additional_css') as $css)<link rel="stylesheet" type="text/css" href="{{ asset($css) }}">@endforeach
    @endif

    @yield('head')
    
    @livewireStyles

</head>

<?php
if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
    $user_avatar = Auth::user()->avatar;
} else {
    $user_avatar = Voyager::image(Auth::user()->avatar);
}
?>

<body>
  
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
        

            {{-- Sidebar  --}}
            @include('voyager::dashboard.sidebar')

            <!-- Layout container -->
            <div class="layout-page">

                {{-- Navbar  --}}
                @include('voyager::dashboard.navbar')



                {{-- PAGE CONTENT  --}}
                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="page-content container-fluid">
                            @yield('page_header')
                        </div>

                        @yield('content')
                    </div>
                    
                </div>
                <!-- / Content wrapper -->


            </div>
            <!-- / Layout container -->


        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->



  

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('assets/js/app-ecommerce-dashboard.js') }}"></script>

    <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>

    <script>
        @if(Session::has('alerts'))
            let alerts = {!! json_encode(Session::get('alerts')) !!};
            helpers.displayAlerts(alerts, toastr);
        @endif
    
        @if(Session::has('message'))
    
        // TODO: change Controllers to use AlertsMessages trait... then remove this
        var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
        var alertMessage = {!! json_encode(Session::get('message')) !!};
        var alerter = toastr[alertType];
    
        if (alerter) {
            alerter(alertMessage);
        } else {
            toastr.error("toastr alert-type " + alertType + " is unknown");
        }
        @endif
    </script>
    @include('voyager::media.manager')
    @yield('javascript')
    @stack('javascript')
    @if(!empty(config('voyager.additional_js')))<!-- Additional Javascript -->
        @foreach(config('voyager.additional_js') as $js)<script type="text/javascript" src="{{ asset($js) }}"></script>@endforeach
    @endif

    @livewireScripts

</body>

</html>