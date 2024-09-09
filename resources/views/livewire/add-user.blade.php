<div>

    <div class="row g-4 mb-4">
      <div class="col-sm-6 col-xl-3">
          <div class="card">
              <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                  <div class="content-left">
                  <span>Session</span>
                  <div class="d-flex align-items-center my-2">
                      <h3 class="mb-0 me-2">{{ \App\Models\User::count() }}</h3>
                  </div>
                  <p class="mb-0">Nombre total d'utilisateurs</p>
                  </div>
                  <div class="avatar">
                  <span class="avatar-initial rounded bg-label-primary">
                      <i class="ti ti-user ti-sm"></i>
                  </span>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>

    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="row me-2 border-0 px-3 py-2">Filtre de recherche</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role">
                    <select wire:model="role_filter" id="UserRole" class="form-select text-capitalize">
                        <option value=""> Sélectionnez un rôle </option>
                        @foreach ( $roles as $role )
                            <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-8">
                    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button class="btn btn-secondary add-new btn-primary waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Nouveau</span></span></button> 
                    </div>
                    </div>
                </div>

            </div>
        </div>
    

        <div class="card-datatable table-responsive">
    
            <table class="datatables-users table">
                <thead class="border-top">
                <tr>
                    <th>Utilisateur</th>
                    <th>Rôle</th>
                    <th>Statut</th>
                    <th>Inscrivez-vous à</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                        
                        <tr class="odd 
                            @if( $role_filter != "" && $user->role_id != $role_filter ) d-none @endif 
                            @if( $role_filter != "" && $user->role_id != $role_filter ) d-none @endif 
                            @if( $plan_filter != "" && $user->role_id != $plan_filter ) d-none @endif  " >
                            <td class="sorting_1">
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-3"><img src="{{ asset('storage/'.Voyager::setting('admin.icon_image'))}}" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('seller.profile', $user) }}" class="text-body text-truncate">
                                            <span class="fw-medium">{{ $user->name }}</span>
                                        </a>
                                        <small class="text-muted">{{ $user->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-truncate d-flex align-items-center">
                                    <span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2">
                                        <i class="ti ti-chart-pie-2 ti-sm"></i>
                                    </span>
                                    {{ $user->role->display_name }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-label-success" text-capitalized="">Active</span>
                            </td>
                            <td>
                                <span class="fw-medium">{{ $user->created_at->diffForHumans() }}</span>
                            </td>
                            {{-- <td>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:;" class="text-body">
                                        <i class="ti ti-edit ti-sm me-2"></i>
                                    </a>
                                    <a href="javascript:;" class="text-body delete-record">
                                        <i class="ti ti-trash ti-sm mx-2"></i>
                                    </a>
                                    <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical ti-sm mx-1"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end m-0">
                                        <a href="{{ route('seller.profile', $user) }}" class="dropdown-item">
                                            Profile
                                        </a>
                                    </div>
                                </div>
                            </td> --}}
                        </tr>

                    @endforeach
                </tbody>
            </table>
            
        </div>
    
        <div wire:ignore.self class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
            <div class="offcanvas-header">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Ajouter un nouvel utilisateur</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
            <form class="add-new-user pt-0"  >
                <div class="mb-3">
                    <label class="form-label" for="add-user-fullname">Nom et prénom</label>
                    <input wire:model.lazy="user_name" type="text" class="form-control" placeholder="Full name" />
                    @error('user_name')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="add-user-email">E-mail</label>
                    <input wire:model.lazy="user_email" type="text" class="form-control" placeholder="john.doe@example.com" aria-label="user@example.com" />
                    @error('user_email')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="add-user-email">Mot de passe</label>
                    <input wire:model.lazy="password" type="password" class="form-control" placeholder="********" />
                    @error('password')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="add-user-contact">Numéro de téléphone</label>
                    <input wire:model.lazy="user_phone" type="number" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" />
                    @error('user_phone')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="add-user-company">Nom d'utilisateur dans le jeu</label>
                    <input wire:model.lazy="user_store" type="text" class="form-control" placeholder="Nom d'utilisateur dans le jeu" onkeydown="return /[a-zA-Z\-]/i.test(event.key)"  />
                    @error('user_store')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                <label class="form-label" for="user-role">User Role</label>
                <select wire:model="user_role_id" class="form-select">
                    @foreach ( $roles as $role )
                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
                </div>
                

                @if ( !is_null( $status ) )
                    <div class="alert alert-{{ $status }} alert-dismissible mt-2" role="alert">
                        {{ $status_message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <button wire:click="create_user()" type="button" class="btn btn-primary me-sm-3 me-1">Create user</button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>


            </form>
            </div>
        </div>
        
    </div>
</div>