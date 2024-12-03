<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

          
    <div class="app-brand demo ">
      <a href="{{ route('voyager.dashboard') }}" class="app-brand-link">
        <span class="app-brand-logo">
          <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
          @if($admin_logo_img == '')
              <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon" style="max-width: 35px !important;">
          @else
              <img src="{{ asset('storage/'.$admin_logo_img) }}" alt="Logo Icon" style="max-width: 35px !important;">
          @endif
        </span>
        <span class="app-brand-text demo menu-text fw-bold">{{Voyager::setting('admin.title', 'Dashboard')}}</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    
    @php
        $menu = menu('admin', '_json');
    @endphp

  <ul class="menu-inner py-1">

      @foreach ( $menu as $item )
        @if ( count( $item->children ) == 0 )
            <li class="menu-item">
                <a href="@if ( !is_null($item->route ) ) {{ route($item->route) }} @else {{ $item->url }} @endif" target="{{ $item->target }}" class="menu-link">
                  <i class="menu-icon tf-icons ti ti-{!! $item->icon_class !!}"></i>
                  <div data-i18n="{{ $item->title }}">{{ $item->title }}</div>
                </a>
            </li>
        @else
          <li class="menu-item">
            
            
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-{!! $item->icon_class !!}"></i>
                <div data-i18n="{{ $item->title }}">{{ $item->title }}</div>
                {{-- <div class="badge bg-primary rounded-pill ms-auto">5</div> --}}
              </a>

              <ul class="menu-sub">

                @foreach ( $item->children  as  $itemChilds )

                    @if ( count( $itemChilds->children ) == 0 )
                        <li class="menu-item">
                            <a href="{{ route($itemChilds->route) }}" class="menu-link">
                              <i class="menu-icon tf-icons ti ti-{!! $itemChilds->icon_class !!}"></i>
                              <div data-i18n="{{ $itemChilds->title }}">{{ $itemChilds->title }}</div>
                            </a>
                        </li>
                    @else

                      {{-- <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons ti ti-{!! $itemChilds->icon_class !!}"></i>
                          <div data-i18n="{{ $itemChilds->title }}">{{ $itemChilds->title }}</div>
                        </a>

                        <ul class="menu-sub">
                          @foreach ( $itemChilds->children as $smallChild )
                            <li class="menu-item">
                              <a href="@if ( !is_null($smallChild->route ) ) {{ route($smallChild->route) }} @endif" target="{{ $smallChild->target }}" class="menu-link">
                                <div data-i18n="Analytics">{{ $smallChild->title }}</div>
                              </a>
                            </li>
                          @endforeach
                        </ul>

                      </li> --}}

                    @endif

                @endforeach
                
              </ul>

              
          </li>
        @endif
      @endforeach
      
  </ul>
</aside>
<!-- / Menu -->