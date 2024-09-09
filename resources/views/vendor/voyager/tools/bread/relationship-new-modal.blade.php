<!-- !!! Add form action below -->
<form role="form" action="{{ route('voyager.bread.relationship') }}" method="POST">

	<div class="offcanvas offcanvas-end" tabindex="-1" id="modalRelationship" aria-labelledby="modalRelationshipLabel">
		<div class="offcanvas-header">
			<h5 id="modalRelationshipLabel" class="offcanvas-title">
				{{ \Illuminate\Support\Str::singular(ucfirst($table)) }}
				{{ __('voyager::database.relationship.relationships') }}
			</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body my-auto mx-0 flex-grow-0">
		  
		  
		  
			@if(isset($dataType->id))
				<div class="col-md-12 relationship_details">
					<p class="relationship_table_select">{{ \Illuminate\Support\Str::singular(ucfirst($table)) }}</p>
					<select class="relationship_type select2 form-control mb-2 mt-1" name="relationship_type">
						<option value="hasOne" @if(isset($relationshipDetails->type) && $relationshipDetails->type == 'hasOne') selected="selected" @endif>{{ __('voyager::database.relationship.has_one') }}</option>
						<option value="hasMany" @if(isset($relationshipDetails->type) && $relationshipDetails->type == 'hasMany') selected="selected" @endif>{{ __('voyager::database.relationship.has_many') }}</option>
						<option value="belongsTo" @if(isset($relationshipDetails->type) && $relationshipDetails->type == 'belongsTo') selected="selected" @endif>{{ __('voyager::database.relationship.belongs_to') }}</option>
						<option value="belongsToMany" @if(isset($relationshipDetails->type) && $relationshipDetails->type == 'belongsToMany') selected="selected" @endif>{{ __('voyager::database.relationship.belongs_to_many') }}</option>
					</select>
					<select class="relationship_table select2 form-control mb-2 mt-1" name="relationship_table">
						@foreach($tables as $tbl)
							<option value="{{ $tbl }}" @if(isset($relationshipDetails->table) && $relationshipDetails->table == $tbl) selected="selected" @endif>{{ \Illuminate\Support\Str::singular(ucfirst($tbl)) }}</option>
						@endforeach
					</select>
					<span><input type="text" class="form-control" name="relationship_model" placeholder="{{ __('voyager::database.relationship.namespace') }}" value="{{ $relationshipDetails->model ?? ''}}"></span>
				</div>
				<div class="col-md-12 relationship_details relationshipField">
					<div class="belongsTo">
						<label>{{ __('voyager::database.relationship.which_column_from') }} <span>{{ \Illuminate\Support\Str::singular(ucfirst($table)) }}</span> {{ __('voyager::database.relationship.is_used_to_reference') }} <span class="label_table_name"></span>?</label>
						<select name="relationship_column_belongs_to" class="new_relationship_field select2 form-control mb-2 mt-1">
							@foreach($fieldOptions as $data)
								<option value="{{ $data['field'] }}">{{ $data['field'] }}</option>
							@endforeach
						</select>
					</div>
					<div class="hasOneMany flexed">
						<label>{{ __('voyager::database.relationship.which_column_from') }} <span class="label_table_name"></span> {{ __('voyager::database.relationship.is_used_to_reference') }} <span>{{ \Illuminate\Support\Str::singular(ucfirst($table)) }}</span>?</label>
						<select name="relationship_column" class="new_relationship_field select2 form-control mb-2 mt-1 rowDrop" data-table="{{ $tables[0] }}" data-selected="">
						</select>
					</div>
				</div>
				<div class="col-md-12 relationship_details relationshipPivot">
					<label>{{ __('voyager::database.relationship.pivot_table') }}:</label>
					<select name="relationship_pivot" class="select2 form-control mb-2 mt-1">
						@foreach($tables as $tbl)
							<option value="{{ $tbl }}" @if(isset($relationshipDetails->table) && $relationshipDetails->table == $tbl) selected="selected" @endif>{{ \Illuminate\Support\Str::singular(ucfirst($tbl)) }}</option>
						@endforeach
					</select>
				</div>
				<div class="col-md-12 relationship_details_more">
					<div class="well">
						<label>{{ __('voyager::database.relationship.selection_details') }}</label>
						<p><strong>{{ __('voyager::database.relationship.display_the') }} <span class="label_table_name"></span>: </strong>
							<select name="relationship_label" class="rowDrop select2 form-control mb-2 mt-1" data-table="{{ $tables[0] }}" data-selected="" style="width: 100%">
							</select>
						</p>
						<p class="relationship_key belongsToShow belongsToManyShow"><strong>{{ __('voyager::database.relationship.store_the') }}
							<span class="label_table_name"></span>: </strong>
							<select name="relationship_key" class="rowDrop select2 form-control mb-2 mt-1" data-table="{{ $tables[0] }}" data-selected="" style="width: 100%">
							</select>
						</p>
						<p class="relationship_key hasOneShow hasManyShow"><strong>{{ __('voyager::database.relationship.store_the') }}
							<span>{{ \Illuminate\Support\Str::singular(ucfirst($table)) }}</span>: </strong>
							<select name="relationship_key" class="select2 form-control mb-2 mt-1" style="width: 100%">
								@foreach($fieldOptions as $data)
									<option value="{{ $data['field'] }}">{{ $data['field'] }}</option>
								@endforeach
							</select>
						</p>
						<p class="relationship_taggable"><strong>{{ __('voyager::database.relationship.allow_tagging') }}:</strong> <br>
							<input type="checkbox" name="relationship_taggable" class="toggleswitch" data-on="{{ __('voyager::generic.yes') }}" data-off="{{ __('voyager::generic.no') }}">
						</p>
					</div>
				</div>
			@else
				<div class="col-md-12">
					<h5><i class="voyager-rum-1"></i> {{ __('voyager::database.relationship.easy_there') }}</h5>
					<p class="relationship-warn">{!! __('voyager::database.relationship.before_create') !!}</p>
				</div>
			@endif

			<input type="hidden" value="{{ $dataType->id ?? '' }}" name="data_type_id">
			{{ csrf_field() }}

			@if(isset($dataType->id))
				<button class="btn btn-primary mb-2 d-grid w-100 waves-effect waves-light btn-relationship">
					<i class="voyager-plus"></i> <span>{{ __('voyager::database.relationship.add_new') }}</span>
				</button>
			@endif
		  <button type="button" class="btn btn-label-secondary d-grid w-100 waves-effect" data-bs-dismiss="offcanvas">
			{{ __('voyager::database.relationship.cancel') }}
		  </button>
		</div>
	</div>
</form>
