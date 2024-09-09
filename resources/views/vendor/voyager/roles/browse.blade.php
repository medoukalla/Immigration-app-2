@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')

    <p class="mb-5 mt-4">
        Un rôle permettait d'accéder à des menus et à des fonctionnalités prédéfinis afin qu'en fonction du rôle attribué, un administrateur puisse avoir accès à ce dont l'utilisateur a besoin.
    </p>
    <!-- Role cards -->
    <div class="row g-4">

        @foreach ( $dataTypeContent as $role )
            
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                    <h6 class="fw-normal mb-2">Total {{ App\Models\User::where('role_id', $role->id)->count()  }} utilisateurs</h6>
                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                        <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar avatar-sm pull-up">
                        <img class="rounded-circle" src="../../assets/img/avatars/12.png" alt="Avatar">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar avatar-sm pull-up">
                        <img class="rounded-circle" src="../../assets/img/avatars/6.png" alt="Avatar">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kaith D'souza" class="avatar avatar-sm pull-up">
                        <img class="rounded-circle" src="../../assets/img/avatars/3.png" alt="Avatar">
                        </li>
                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="John Doe" class="avatar avatar-sm pull-up">
                        <img class="rounded-circle" src="../../assets/img/avatars/1.png" alt="Avatar">
                        </li>
                    </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mt-1">
                    <div class="role-heading">
                        <h4 class="mb-1">{{ $role->display_name }}</h4>
                        <a href="{{ route('voyager.roles.edit', $role->id) }}" class="">Modifier</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        @endforeach
        
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100">
            <div class="row h-100">
                <div class="col-sm-5">
                <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                    <img src="../../assets/img/illustrations/add-new-roles.png" class="img-fluid mt-sm-4 mt-md-0" alt="add-new-roles" width="83">
                </div>
                </div>
                <div class="col-sm-7">
                <div class="card-body text-sm-end text-center ps-sm-0">
                    <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-2 text-nowrap add-new-role">Ajouter un nouveau rôle</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    </div>
    <!--/ Role cards -->

    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-add-new-role">
        <div class="modal-content p-3 p-md-5">
        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
            <div class="text-center mb-4">
                <h3 class="role-title mb-2">Ajouter un nouveau rôle</h3>
                <p class="text-muted">Définir les autorisations de rôle</p>
            </div>
            <!-- Add role form -->
            <form @if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif method="POST" enctype="multipart/form-data" id="addRoleForm" class="row g-3" >

                <!-- CSRF TOKEN -->
                {{ csrf_field() }}

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endforeach
                @endif

                
                <div class="form-floating">
                    <input type="text" class="form-control" required="" id="floatingInput" name="name" placeholder="Name" aria-describedby="floatingInputHelp" value="">
                        <label for="floatingInput">Nom de rôle</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control" required="" id="floatingInput" name="display_name" placeholder="Display Name" aria-describedby="floatingInputHelp" value="">
                    <label for="floatingInput">Afficher un nom</label>
                </div>

                
                <div class="col-12 ">
                    <h5>Role Permissions</h5>
                    <!-- Permission table -->
                    <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                        
                            <?php
                                // dd( $dataTypeContent );
                                // $role_permissions = (isset($dataTypeContent)) ? $dataTypeContent->permissions->pluck('key')->toArray() : [];
                            ?>
                            @foreach(Voyager::model('Permission')->all()->groupBy('table_name') as $table => $permission)

                                <tr>
                                    <td class="text-nowrap fw-medium">{{\Illuminate\Support\Str::title(str_replace('_',' ', $table))}}</td>
                                    <td>
                                        <div class="d-flex">
                                            @foreach($permission as $perm)
                                                <div class="form-check me-3 me-lg-2">
                                                    <input class="form-check-input" type="checkbox"  id="permission-{{$perm->id}}" name="permissions[{{$perm->id}}]" value="{{$perm->id}}"  />
                                                    <label class="form-check-label" for="permission-{{$perm->id}}" >
                                                        {{\Illuminate\Support\Str::title(str_replace('_', ' ', $perm->key))}}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                    <!-- Permission table -->
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </form>
            <!--/ Add role form -->
        </div>
        </div>
    </div>
    </div>
    <!-- / Add Role Modal -->


    @livewire('edit-rules')

@stop