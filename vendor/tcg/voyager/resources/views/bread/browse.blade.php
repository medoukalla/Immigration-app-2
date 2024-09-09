@php
    $edit = false;
    $add  = true;
@endphp
@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                    <span>Session</span>
                    <div class="d-flex align-items-center my-2">
                        <h3 class="mb-0 me-2">{{ $dataTypeContent->count() }}</h3>
                    </div>
                    <p class="mb-0">Total {{ $dataType->getTranslatedAttribute('display_name_plural') }}</p>
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
        {{-- Search  --}}
        <div class="card-header border-bottom">
            <form method="get" class="form-search">
                <h5 class="row me-2 border-0 px-3 py-2">Search Filter</h5>
                <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                    <div class="col user_role">
                        <select id="search_key" name="key" class="form-select text-capitalize">
                            @foreach($searchNames as $key => $name)
                                <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col user_plan">
                        <select id="filter" name="filter" class="form-select text-capitalize">
                            <option value="contains" @if($search->filter == "contains") selected @endif>{{ __('voyager::generic.contains') }}</option>
                            <option value="equals" @if($search->filter == "equals") selected @endif>=</option>
                        </select>
                    </div>
                    <div class="col user_status">
                        <input type="text" class="form-control" placeholder="{{ __('voyager::generic.search') }}" name="s" value="{{ $search->value }}">
                    </div>
                    <div class="col ">
                        <button class="btn btn-secondary add-new btn-primary waves-effect waves-light" type="submit" >
                            <span><i class="ti ti-search me-0 me-sm-1 ti-xs"></i></span>
                        </button>
                        <button class="btn btn-secondary add-new btn-primary waves-effect waves-light" tabindex="0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                            <span>
                                <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Nouvelle</span>
                            </span>
                        </button> 
                    </div>

                    
                </div>
            </form>
        </div>
        
        <div class="card-datatable table-responsive">
            <table class="datatables-users table">
                <thead class="border-top">
                    <tr>
                        @foreach($dataType->browseRows as $row)
                        <th>
                            @if ($isServerSide && in_array($row->field, $sortableColumns))
                                <a href="{{ $row->sortByUrl($orderBy, $sortOrder) }}">
                            @endif
                            {{ $row->getTranslatedAttribute('display_name') }}
                            @if ($isServerSide)
                                @if ($row->isCurrentSortField($orderBy))
                                    @if ($sortOrder == 'asc')
                                        <i class="voyager-angle-up pull-right"></i>
                                    @else
                                        <i class="voyager-angle-down pull-right"></i>
                                    @endif
                                @endif
                                </a>
                            @endif
                        </th>
                        @endforeach
                        <th class="actions text-end dt-not-orderable">{{ __('voyager::generic.actions') }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($dataTypeContent as $data)
                        <tr>
                            @foreach($dataType->browseRows as $row)
                                @php
                                if ($data->{$row->field.'_browse'}) {
                                    $data->{$row->field} = $data->{$row->field.'_browse'};
                                }
                                @endphp
                                <td>
                                    @if (isset($row->details->view_browse))
                                        @include($row->details->view_browse, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $data->{$row->field}, 'view' => 'browse', 'options' => $row->details])
                                    @elseif (isset($row->details->view))
                                        @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $data->{$row->field}, 'action' => 'browse', 'view' => 'browse', 'options' => $row->details])
                                    @elseif($row->type == 'image')
                                        <div class="avatar-wrapper">
                                            <div class="avatar me-3"><img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif" class="rounded-circle"></div>
                                        </div>
                                    @elseif($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', ['view' => 'browse','options' => $row->details])
                                    @elseif($row->type == 'select_multiple')
                                        @if(property_exists($row->details, 'relationship'))

                                            @foreach($data->{$row->field} as $item)
                                                {{ $item->{$row->field} }}
                                            @endforeach

                                        @elseif(property_exists($row->details, 'options'))
                                            @if (!empty(json_decode($data->{$row->field})))
                                                @foreach(json_decode($data->{$row->field}) as $item)
                                                    @if (@$row->details->options->{$item})
                                                        {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                                    @endif
                                                @endforeach
                                            @else
                                                {{ __('voyager::generic.none') }}
                                            @endif
                                        @endif

                                        @elseif($row->type == 'multiple_checkbox' && property_exists($row->details, 'options'))
                                            @if (@count(json_decode($data->{$row->field}, true)) > 0)
                                                @foreach(json_decode($data->{$row->field}) as $item)
                                                    @if (@$row->details->options->{$item})
                                                        {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                                    @endif
                                                @endforeach
                                            @else
                                                {{ __('voyager::generic.none') }}
                                            @endif

                                    @elseif(($row->type == 'select_dropdown' || $row->type == 'radio_btn') && property_exists($row->details, 'options'))

                                        {!! $row->details->options->{$data->{$row->field}} ?? '' !!}

                                    @elseif($row->type == 'date' || $row->type == 'timestamp')
                                        @if ( property_exists($row->details, 'format') && !is_null($data->{$row->field}) )
                                            {{ \Carbon\Carbon::parse($data->{$row->field})->formatLocalized($row->details->format) }}
                                        @else
                                            {{ $data->{$row->field} }}
                                        @endif
                                    @elseif($row->type == 'checkbox')
                                        @if(property_exists($row->details, 'on') && property_exists($row->details, 'off'))
                                            @if($data->{$row->field})
                                                <span class="badge  bg-label-success">{{ $row->details->on }}</span>
                                            @else
                                                <span class="badge  bg-label-warning">{{ $row->details->off }}</span>
                                            @endif
                                        @else
                                        {{ $data->{$row->field} }}
                                        @endif
                                    @elseif($row->type == 'color')
                                        <span class="badge badge-lg" style="background-color: {{ $data->{$row->field} }}">{{ $data->{$row->field} }}</span>
                                    @elseif($row->type == 'text')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( $data->{$row->field} ) > 200 ? mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}</div>
                                    @elseif($row->type == 'text_area')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( $data->{$row->field} ) > 200 ? mb_substr($data->{$row->field}, 0, 200) . ' ...' : $data->{$row->field} }}</div>
                                    @elseif($row->type == 'file' && !empty($data->{$row->field}) )
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        @if(json_decode($data->{$row->field}) !== null)
                                            @foreach(json_decode($data->{$row->field}) as $file)
                                                <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}" target="_blank">
                                                    {{ $file->original_name ?: '' }}
                                                </a>
                                                <br/>
                                            @endforeach
                                        @else
                                            <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($data->{$row->field}) }}" target="_blank">
                                                {{ __('voyager::generic.download') }}
                                            </a>
                                        @endif
                                    @elseif($row->type == 'rich_text_box')
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <div>{{ mb_strlen( strip_tags($data->{$row->field}, '<b><i><u>') ) > 200 ? mb_substr(strip_tags($data->{$row->field}, '<b><i><u>'), 0, 200) . ' ...' : strip_tags($data->{$row->field}, '<b><i><u>') }}</div>
                                    @elseif($row->type == 'coordinates')
                                        @include('voyager::partials.coordinates-static-image')
                                    @elseif($row->type == 'multiple_images')
                                        @php $images = json_decode($data->{$row->field}); @endphp
                                        @if($images)
                                            @php $images = array_slice($images, 0, 3); @endphp
                                            @foreach($images as $image)
                                                <img src="@if( !filter_var($image, FILTER_VALIDATE_URL)){{ Voyager::image( $image ) }}@else{{ $image }}@endif" style="width:50px">
                                            @endforeach
                                        @endif
                                    @elseif($row->type == 'media_picker')
                                        @php
                                            if (is_array($data->{$row->field})) {
                                                $files = $data->{$row->field};
                                            } else {
                                                $files = json_decode($data->{$row->field});
                                            }
                                        @endphp
                                        @if ($files)
                                            @if (property_exists($row->details, 'show_as_images') && $row->details->show_as_images)
                                                @foreach (array_slice($files, 0, 3) as $file)
                                                <img src="@if( !filter_var($file, FILTER_VALIDATE_URL)){{ Voyager::image( $file ) }}@else{{ $file }}@endif" style="width:50px">
                                                @endforeach
                                            @else
                                                <ul>
                                                @foreach (array_slice($files, 0, 3) as $file)
                                                    <li>{{ $file }}</li>
                                                @endforeach
                                                </ul>
                                            @endif
                                            @if (count($files) > 3)
                                                {{ __('voyager::media.files_more', ['count' => (count($files) - 3)]) }}
                                            @endif
                                        @elseif (is_array($files) && count($files) == 0)
                                            {{ trans_choice('voyager::media.files', 0) }}
                                        @elseif ($data->{$row->field} != '')
                                            @if (property_exists($row->details, 'show_as_images') && $row->details->show_as_images)
                                                <img src="@if( !filter_var($data->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $data->{$row->field} ) }}@else{{ $data->{$row->field} }}@endif" style="width:50px">
                                            @else
                                                {{ $data->{$row->field} }}
                                            @endif
                                        @else
                                            {{ trans_choice('voyager::media.files', 0) }}
                                        @endif
                                    @else
                                        @include('voyager::multilingual.input-hidden-bread-browse')
                                        <span>{{ $data->{$row->field} }}</span>
                                    @endif
                                </td>
                            @endforeach
                            <td class="no-sort no-click bread-actions" dir="rtl">
                                @foreach($actions as $action)
                                    @if (!method_exists($action, 'massAction'))
                                        @include('voyager::bread.partials.actions', ['action' => $action])
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        @if ($isServerSide)
            <div class="pull-left px-3">
                <div role="status" class="show-res" aria-live="polite">{{ trans_choice(
                    'voyager::generic.showing_entries', $dataTypeContent->total(), [
                        'from' => $dataTypeContent->firstItem(),
                        'to' => $dataTypeContent->lastItem(),
                        'all' => $dataTypeContent->total()
                    ]) }}</div>
            </div>
            <div class="pull-right mt-3 px-3">
                {{ $dataTypeContent->links('vendor.pagination.bootstrap-4') }}
            </div>
        @endif

    </div>


    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button> --}}
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-label-danger waves-effect pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-top" tabindex="-1" id="deleteConvas" aria-labelledby="deleteConvasLabel">
        <div class="offcanvas-header">
            <h5 id="deleteConvasLabel" class="offcanvas-title">
                {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }} ?
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form  id="delete_form" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <p>{{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }} ?</p><br>
                <button type="submit"  class="btn btn-primary me-2 delete-confirm">Continue</button>
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>

    {{-- Add New resource   --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add new {{ $dataType->getTranslatedAttribute('display_name_plural') }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
        <form role="form" class="add-new-user pt-0 form-edit-add" method="POST" enctype="multipart/form-data"
                action="{{  route('voyager.'.$dataType->slug.'.store') }}" >

            <!-- CSRF TOKEN -->
            {{ csrf_field() }}

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @php
                $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
            @endphp
                @foreach($dataTypeRows as $row)
                    <!-- GET THE DISPLAY OPTIONS -->
                    @php
                        // $display_options = $row->details->display ?? NULL;
                        // if ($dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')}) {
                        //     $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_'.($edit ? 'edit' : 'add')};
                        // }
                    @endphp
                    @if (isset($row->details->legend) && isset($row->details->legend->text))
                        <legend class="text-{{ $row->details->legend->align ?? 'center' }}" style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">{{ $row->details->legend->text }}</legend>
                    @endif

                    <div class="form-group @if($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}" @if(isset($display_options->id)){{ "id=$display_options->id" }}@endif>
                        {{ $row->slugify }}
                        <label class="control-label" for="name">{{ $row->getTranslatedAttribute('display_name') }}</label>
                        @include('voyager::multilingual.input-hidden-bread-edit-add')
                        @if ($add && isset($row->details->view_add))
                            @include($row->details->view_add, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'view' => 'add', 'options' => $row->details])
                        @elseif ($edit && isset($row->details->view_edit))
                            @include($row->details->view_edit, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'view' => 'edit', 'options' => $row->details])
                        @elseif (isset($row->details->view))
                            @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => ($edit ? 'edit' : 'add'), 'view' => ($edit ? 'edit' : 'add'), 'options' => $row->details])
                        @elseif ($row->type == 'relationship')
                            @include('voyager::formfields.relationship', ['options' => $row->details])
                        @else
                            @if ( $row->type == 'color' )
                                <input type="color" class="form-control" name="{{ $row->field }}"  value="#fff">                     
                            @else
                                {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                            @endif
                        @endif

                        @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                            {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                        @endforeach
                        @if ($errors->has($row->field))
                            @foreach ($errors->get($row->field) as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                @endforeach

                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                    Save {{ $dataType->getTranslatedAttribute('display_name_plural') }}
                </button>
                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>


        </form>
        </div>
    </div>
@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function () {
            @if (!$dataType->server_side)
                var table = $('#dataTable').DataTable({!! json_encode(
                    array_merge([
                        "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                        "columnDefs" => [
                            ['targets' => 'dt-not-orderable', 'searchable' =>  false, 'orderable' => false],
                        ],
                    ],
                    config('voyager.dashboard.data_tables', []))
                , true) !!});
            @else
                $('#search-input select').select2({
                    minimumResultsForSearch: Infinity
                });
            @endif

            @if ($isModelTranslatable)
                $('.side-body').multilingual();
                //Reinitialise the multilingual features when they change tab
                $('#dataTable').on('draw.dt', function(){
                    $('.side-body').data('multilingual').init();
                })
            @endif
            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('td').on('click', '.deleteResourceBtn', function (e) {
            alert();
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        @if($usesSoftDeletes)
            @php
                $params = [
                    's' => $search->value,
                    'filter' => $search->filter,
                    'key' => $search->key,
                    'order_by' => $orderBy,
                    'sort_order' => $sortOrder,
                ];
            @endphp
            $(function() {
                $('#show_soft_deletes').change(function() {
                    if ($(this).prop('checked')) {
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 1]), true)) }}"></a>');
                    }else{
                        $('#dataTable').before('<a id="redir" href="{{ (route('voyager.'.$dataType->slug.'.index', array_merge($params, ['showSoftDeleted' => 0]), true)) }}"></a>');
                    }

                    $('#redir')[0].click();
                })
            })
        @endif
        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
