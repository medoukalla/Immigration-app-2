<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                  
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="ti ti-menu-2 ti-sm"></i>
      </a>
    </div>
    

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item navbar-search-wrapper mb-0">
          <a class="nav-item nav-link  d-flex align-items-center px-0" style=" color: #e48c0d; font-weight: 500; " href="{{ route('frontend.index') }}" target="_blanck" >
            <i class="menu-icon tf-icons ti ti-brand-google-home"></i>
            Page d'accueil
          </a>
        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
     
        <!-- Notification -->
        @if ( Auth::user()->role->id == 1 )
          {{-- @livewire('notifications') --}}
        @endif
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              @if ( is_null( Voyager::setting('admin.icon_image') ))
                  <img src="{{ voyager_asset('images/logo-icon-light.png') }}" class="h-auto rounded-circle">
              @else
                  <img src="{{ asset('storage/'.Voyager::setting('admin.icon_image')) }}" class="h-auto rounded-circle">
              @endif
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="{{ route('voyager.profile') }}">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">

                      @if ( is_null( Voyager::setting('admin.icon_image') ))
                          <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt class="h-auto rounded-circle">
                      @else
                          <img src="{{ asset('storage/'.Voyager::setting('admin.icon_image')) }}" alt class="h-auto rounded-circle">
                      @endif
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                    <small class="text-muted">{{ Auth::user()->role->display_name }}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            
            @if ( Auth::user()->role->id != 2 )
                
              <li>
                <a class="dropdown-item" href="{{ route('voyager.settings.index') }}">
                  <i class="ti ti-settings me-2 ti-sm"></i>
                  <span class="align-middle">Paramètres</span>
                </a>
              </li>
              
              <li>
                <div class="dropdown-divider"></div>
              </li>
            @endif
            
            <li>
              <form action="{{ route('voyager.logout') }}" method="POST">
                  {{ csrf_field() }}
                  <button type="submit" class="dropdown-item ">
                      @if(isset($item['icon_class']) && !empty($item['icon_class']))
                      <i class="{!! $item['icon_class'] !!}"></i>
                      @endif
                      <i class="ti ti-logout me-2 ti-sm"></i>
                      <span class="align-middle">{{ __('voyager::generic.logout') }}</span>
                      
                  </button>
              </form>
              {{-- <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                
                <span class="align-middle">Log Out</span>
              </a> --}}
            </li>
          </ul>
        </li>
        <!--/ User -->
        


      </ul>
    </div>

    
    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
      <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
      <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
    
    

</nav>
<!-- / Navbar -->