@section('database-table-editor-template')

<div class="panel panel-bordered">
    <div class="panel-body">
        <div class="row">
        @if($db->action == 'update')
            <div class="col-md-12">
        @else
            <div class="col-md-6">
        @endif
                <label for="name">{{ __('voyager::database.table_name') }}</label><br>
                <input v-model.trim="table.name" type="text" class="form-control" placeholder="{{ __('voyager::database.table_name') }}" required pattern="{{ $db->identifierRegex }}">
            </div>

        @if($db->action == 'create')
            <div class="col-md-3 col-sm-4 col-xs-6">
                <label for="create_model">{{ __('voyager::database.create_model_table') }}</label><br>
                <input type="checkbox" name="create_model" data-toggle="toggle"
                       data-on="{{ __('voyager::generic.yes_please') }}" data-off="{{ __('voyager::generic.no_thanks') }}">
            </div>
            {{--
                Hide migration button until feature is available.
                 <div class="col-md-3 col-sm-4 col-xs-6">
                    <label for="create_migration">{{ __('voyager::database.create_migration') }}</label><br>
                    <input disabled type="checkbox" name="create_migration" data-toggle="toggle"
                           data-on="{{ __('voyager::generic.yes_please') }}" data-off="{{ __('voyager::generic.no_thanks') }}">
                </div>
            --}}
        @endif
        </div><!-- .panel-body .row -->

        <div v-if="compositeIndexes.length" v-once class="alert alert-danger">
            <p>{{ __('voyager::database.no_composites_warning') }}</p>
        </div><br>

        <div id="alertsContainer"></div>

        <template v-if="tableHasColumns">
            <p>{{ __('voyager::database.table_columns') }}</p>

            <table class="table table-bordered" style="width:100%;">
                <thead>
                <tr>
                    <th>{{ __('voyager::generic.name') }}</th>
                    <th>{{ __('voyager::generic.type') }}</th>
                    <th>{{ __('voyager::generic.length') }}</th>
                    <th>{{ __('voyager::generic.not_null') }}</th>
                    <th>{{ __('voyager::generic.unsigned') }}</th>
                    <th>{{ __('voyager::generic.auto_increment') }}</th>
                    <th>{{ __('voyager::generic.index') }}</th>
                    <th>{{ __('voyager::generic.default') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <database-column
                        v-for="(column, index) in table.columns"
                        :column="column"
                        :index="getColumnsIndex(column.name)"
                        :key="index"
                        @columnNameUpdated="renameColumn"
                        @columnDeleted="deleteColumn"
                        @indexAdded="addIndex"
                        @indexDeleted="deleteIndex"
                        @indexUpdated="updateIndex"
                        @indexChanged="onIndexChange"
                    ></database-column>
                </tbody>
            </table>
        </template>
        <div v-else>
          <p>{{ __('voyager::database.table_no_columns') }}</p>
        </div>

        <div style="text-align:center" class="mt-3">
            <database-table-helper-buttons
                @columnAdded="addColumn"
            ></database-table-helper-buttons>
        </div>

    </div><!-- .panel-body -->

    <div class="panel-footer">
        <input type="submit" class="btn btn-primary pull-right"
               value="@if($db->action == 'update'){{ __('voyager::database.update_table') }}@else{{ __('voyager::database.create_new_table') }}@endif"
               :disabled="!tableHasColumns">
        <div style="clear:both"></div>
    </div>
</div><!-- .panel -->


@endsection

@include('voyager::tools.database.vue-components.database-column')
@include('voyager::tools.database.vue-components.database-table-helper-buttons')

<script>
    Vue.component('database-table-editor', {
        props: {
            table: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                emptyIndex: {
                    type: '',
                    name: ''
                },
                compositeIndexes: []
            };
        },
        template: `@yield('database-table-editor-template')`,
        mounted() {
            // Add warning to columns that are part of a composite index
            this.compositeIndexes = this.getCompositeIndexes();
            let compositeColumns = this.getIndexesColumns(this.compositeIndexes);

            for (col in compositeColumns) {
                this.getColumn(compositeColumns[col]).composite = true;
            }

            // Display errors
            @if(Session::has('alerts'))
                helpers.displayAlerts(alerts, helpers.bootstrapAlerter({dismissible: true}), 'error');
            @endif
        },
        computed: {
            tableHasColumns() {
                return this.table.columns.length;
            }
        },
        methods: {
            addColumn(column) {
                column.name = column.name.trim();

                if (column.name && this.hasColumn(column.name)) {
                    return toastr.error("{{ __('voyager::database.column') }} " + column.name + " {{ __('voyager::database.already_exists') }}");
                }

                this.table.columns.push(
                    JSON.parse(JSON.stringify(column))
                );
            },
            getColumn(name) {
                name = name.toLowerCase().trim();

                return this.table.columns.find(function (column) {
                    return name == column.name.toLowerCase();
                });
            },
            hasColumn(name) {
                return !!this.getColumn(name);
            },
            renameColumn(column) {
                let newName = column.newName.trim();
                column = column.column;

                let existingColumn;
                if ((existingColumn = this.getColumn(newName)) && (existingColumn !== column)) {
                    return toastr.error("{{ __('voyager::database.column') }} " + newName + " {{ __('voyager::database.already_exists') }}");
                }

                let index = this.getColumnsIndex(column.name);
                if (index !== this.emptyIndex) {
                    index.columns = [newName];
                }

                column.name = newName;
            },
            deleteColumn(column) {
                var columnPos = this.table.columns.indexOf(column);

                if (columnPos !== -1) {
                    this.table.columns.splice(columnPos, 1);

                    // Delete associated index
                    this.deleteIndex(this.getColumnsIndex(column.name));
                }
            },
            getColumnsIndex(columns) {
                // todo: detect if a column has a composite index
                //  if so, maybe disable its Index input, and tell the user to go to special Index form (advanced view)?
                if (!Array.isArray(columns)) {
                    columns = [columns];
                }

                let index = null;

                for (i in this.table.indexes) {
                    // if there is no difference between columns
                    if (!($(this.table.indexes[i].columns).not(columns).get().length)) {
                        index = this.table.indexes[i];
                        break;
                    }
                }

                if (!index) {
                    index = this.emptyIndex;
                }

                index.table = this.table.name;
                return index;
            },
            onIndexChange(index) {
                if (index.old === this.emptyIndex) {
                    return this.addIndex({
                        columns: index.columns,
                        type: index.newType
                    });
                }

                if (index.newType == '') {
                    return this.deleteIndex(index.old);
                }

                return this.updateIndex(index.old, index.newType);
            },
            addIndex(index) {
                if (index.type == 'PRIMARY') {
                    if (this.table.primaryKeyName) {
                        return toastr.error("{{ __('voyager::database.table_has_index') }}");
                    }

                    this.table.primaryKeyName = 'primary';
                }

                this.setIndexName(index);
                this.table.indexes.push(index);
            },
            deleteIndex(index) {
                var indexPos = this.table.indexes.indexOf(index);

                if (indexPos !== -1) {
                    if (index.type == 'PRIMARY') {
                        this.table.primaryKeyName = false;
                    }

                    this.table.indexes.splice(indexPos, 1);
                }
            },
            updateIndex(index, newType) {
                if (index.type == 'PRIMARY') {
                    this.table.primaryKeyName = false;
                } else if (newType == 'PRIMARY') {
                    if (this.table.primaryKeyName) {
                        return toastr.error("{{ __('voyager::database.table_has_index') }}");
                    }

                    this.table.primaryKeyName = 'primary';
                }

                index.type = newType;
                this.setIndexName(index);
            },
            setIndexName(index) {
                if (index.type == 'PRIMARY') {
                    index.name = 'primary';
                } else {
                    // the name will be set on the server by PHP
                    index.name = '';
                }
            },
            getCompositeIndexes() {
                let composite = [];

                for (i in this.table.indexes) {
                    if (this.table.indexes[i].isComposite) {
                        composite.push(this.table.indexes[i]);
                    }
                }

                return composite;
            },
            getIndexesColumns(indexes) {
                let columns = [];

                for (i in indexes) {
                    for (col in indexes[i].columns) {
                        columns.push(indexes[i].columns[col]);
                    }
                }

                return [...new Set(columns)];
            }
        }
    });
</script>
<style>
    .checkbox label .toggle,.checkbox-inline .toggle{margin-left:-20px;margin-right:5px}.toggle{overflow:hidden;position:relative}.toggle input[type=checkbox]{display:none}.toggle-group{bottom:0;left:0;position:absolute;top:0;transition:left .35s;-webkit-transition:left .35s;-moz-user-select:none;-webkit-user-select:none;width:200%}.toggle.off .toggle-group{left:-100%}.toggle-on{left:0;right:50%}.toggle-off,.toggle-on{border:0;border-radius:0;bottom:0;margin:0;position:absolute;top:0}.toggle-off{left:50%;right:0}.toggle-handle{border-width:0 1px;height:100%;margin:0 auto;padding-bottom:0;padding-top:0;position:relative;width:0}.toggle.btn{min-height:34px;min-width:59px}.toggle-on.btn{padding-right:24px}.toggle-off.btn{padding-left:24px}.btn-group-lg>.toggle.btn,.toggle.btn-lg{min-height:45px;min-width:79px}.btn-group-lg>.toggle-on.btn,.toggle-on.btn-lg{padding-right:31px}.btn-group-lg>.toggle-off.btn,.toggle-off.btn-lg{padding-left:31px}.btn-group-lg>.toggle-handle.btn,.toggle-handle.btn-lg{width:40px}.btn-group-sm>.toggle.btn,.toggle.btn-sm{min-height:30px;min-width:50px}.btn-group-sm>.toggle-on.btn,.toggle-on.btn-sm{padding-right:20px}.btn-group-sm>.toggle-off.btn,.toggle-off.btn-sm{padding-left:20px}.btn-group-xs>.toggle.btn,.toggle.btn-xs{min-height:22px;min-width:35px}.btn-group-xs>.toggle-on.btn,.toggle-on.btn-xs{padding-right:12px}.btn-group-xs>.toggle-off.btn,.toggle-off.btn-xs{padding-left:12px}.icheckbox_flat,.iradio_flat{background:url(flat.png) no-repeat;border:none;cursor:pointer;display:inline-block;*display:inline;height:20px;margin:0;padding:0;vertical-align:middle;width:20px}.icheckbox_flat{background-position:0 0}.icheckbox_flat.checked{background-position:-22px 0}.icheckbox_flat.disabled{background-position:-44px 0;cursor:default}.icheckbox_flat.checked.disabled{background-position:-66px 0}.iradio_flat{background-position:-88px 0}.iradio_flat.checked{background-position:-110px 0}.iradio_flat.disabled{background-position:-132px 0;cursor:default}.iradio_flat.checked.disabled{background-position:-154px 0}@media (-webkit-min-device-pixel-ratio:1.25),(min-resolution:120dpi){.icheckbox_flat,.iradio_flat{background-image:url(flat@2x.png);background-size:176px 22px}}
    .toggle.btn.btn-default, 
    .toggle.btn.btn-default.off, 
    .toggle.btn.btn-primary {
        max-height: 36px !important;
    }
</style>