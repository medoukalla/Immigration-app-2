<li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1" >
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
      <i class="ti ti-bell ti-md"></i>
      <span class="badge bg-danger rounded-pill badge-notifications">
        *
      </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end py-0" wire:ignore >
      <li class="dropdown-menu-header border-bottom">
        <div class="dropdown-header d-flex align-items-center py-3">
          <h5 class="text-body mb-0 me-auto">Notifications</h5>
        </div>
      </li>
      <li class="dropdown-notifications-list scrollable-container" >
        <ul class="list-group list-group-flush"  wire:poll.10s >

          @foreach ($notifications as $notification)
          
                @php
                    $notification_data = json_decode($notification->data)
                @endphp

                @if ( $notification_data->type == 'Achat' )

                  {{-- Order  --}}
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-shopping-cart"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                          <a class="text-light" wire:click="mark_as_read('{{ $notification->id() }}')" href="Javascript:;" >
                            <h6 class="mb-1">Vous avez une nouvelle commande</h6>
                            <p class="mb-0">Référence : {{ $notification_data->order_ref }}</p>
                            <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                          </a>
                        </div>
                      </div>
                  </li>

                @elseif ( $notification_data->type == 'Vendre' ) 

                  {{-- Vendre  --}}
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-warning"><i class="ti ti-gift"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                          <a class="text-light" wire:click="mark_as_read('{{ $notification->id() }}')" href="Javascript:;" >
                            <h6 class="mb-1">Vous avez une nouvelle offre</h6>
                            <p class="mb-0">Référence : {{ $notification_data->order_ref }}</p>
                            @if ( $notification->created_at->diffInSeconds() <= 60 )
                              {{-- Code for play notification sound  --}}
                            @endif
                            <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                          </a>
                        </div>
                      </div>
                  </li>

                @elseif ( $notification_data->type == 'Echange' ) 

                  {{-- Vendre  --}}
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger"><i class="ti ti-arrows-exchange"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                          <a class="text-light" wire:click="mark_as_read('{{ $notification->id() }}')" href="Javascript:;" >
                            <h6 class="mb-1">Vous avez une nouvelle echange</h6>
                            <p class="mb-0">Référence : {{ $notification_data->order_ref }}</p>
                            <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                          </a>
                        </div>
                      </div>
                  </li>

                @else

                  {{-- Others  --}}
                  <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0 me-3">
                        <div class="avatar">
                          <span class="avatar-initial rounded-circle bg-label-danger"><i class="ti ti-bell-ringing-filled"></i></span>
                        </div>
                      </div>
                      <div class="flex-grow-1">
                          <a class="text-light" href="{{ $notification_data->route }}" >
                            <h6 class="mb-1">Vous avez une nouvelle echange</h6>
                            <p class="mb-0">{{ $notification_data->notification }}</p>
                            <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                          </a>
                        </div>
                      </div>
                  </li>

                @endif

          @endforeach

        </ul>
      </li>
    </ul>


  <script>
      $wire.on('post-created', () => {
          alert('kwknsk');
      });
  </script>
</li>