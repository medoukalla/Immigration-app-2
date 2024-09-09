@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')

<section class="section-py first-section-pt">
    <div class="container">

        <div class="col-12 mb-4">
            <div class="card h-100">
               <div class="card-header">
                  <div class="d-flex justify-content-between mb-3">
                     <h5 class="card-title mb-0">Statistiques</h5>
                     <small class="text-muted">Mis à jour il y a 5 secondes</small>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row gy-3">
                     <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                           <div class="card-info">
                              <h5 class="mb-0">{{ \TCG\Voyager\Models\Page::count() }}</h5>
                              <small>Nombre total de pages</small>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-access-point-off ti-sm"></i></div>
                           <div class="card-info">
                              <h5 class="mb-0">{{ \TCG\Voyager\Models\Page::where('active', false)->count() }}</h5>
                              <small>Pages inactives</small>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 col-6">
                        <div class="d-flex align-items-center">
                           <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-access-point ti-sm"></i></div>
                           <div class="card-info">
                              <h5 class="mb-0">{{ \TCG\Voyager\Models\Page::where('active', true)->count() }}</h5>
                              <small>Pages actives</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>

        <div class="row mx-0 gy-3">


         <div class="card">
            <div class="card-datatable table-responsive pt-0">
              <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header flex-column flex-md-row">
                  <div class="head-label text-center">
                    <h5 class="card-title mb-0">Pages </h5>
                  </div>
                  <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                      <button class="btn btn-secondary create-new btn-primary waves-effect waves-light" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                        <a class="text-white" href="{{ route('voyager.pages.create') }}">
                           <span>
                             <i class="ti ti-plus me-sm-1"></i>
                             <span class="d-none d-sm-inline-block">Créer une nouvelle page</span>
                           </span>
                        </a>
                      </button>
                    </div>
                  </div>
                </div>
                <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1394px;">
                  <thead>
                    <tr>
                      <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                      
                      <th rowspan="1" colspan="1" >Titre de la page</th>
                      <th rowspan="1" colspan="1" >Limace de page</th>
                      <th rowspan="1" colspan="1" >Statut</th>
                      <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 94px;" aria-label="Actions">Actes</th>
                    </tr>

                  </thead>
                  <tbody>
                     @foreach ( $dataTypeContent as $page )    
                        <tr class="odd">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="d-flex flex-column">
                                    <span class="emp_name text-truncate">{{ $page->title }}</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $page->slug }}
                            </td>
                            <td>
                            @switch( $page->active )
                                @case(true)
                                    <span class="badge  bg-label-success">Actif</span>
                                    @break
                                @case(false)
                                    <span class="badge  bg-label-danger">Inactif</span>
                                    @break
                                @default
                                    
                            @endswitch
                            </td>
                            <td>
                            <a href="{{ route('voyager.pages.edit', $page) }}" class="btn btn-sm btn-icon item-edit">
                                <i class="text-primary ti ti-pencil"></i>
                            </a>
                            </td>
                        </tr>
                     @endforeach
                  </tbody>
                </table>
                <div style="width: 1%;"></div>
              </div>
            </div>
          </div>

        </div>

    </div>
</section>


@stop