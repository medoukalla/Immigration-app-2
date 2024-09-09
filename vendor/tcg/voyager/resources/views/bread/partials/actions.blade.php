@if($data)
    @php
        // need to recreate object because policy might depend on record data
        $class = get_class($action);
        $action = new $class($dataType, $data);
    @endphp
    @can ($action->getPolicy(), $data)
        @if ($action->shouldActionDisplayOnRow($data))
            @if ($action->getTitle() == 'Delete' )
            <button class="btn btn-sm btn-danger" onclick="alert({{ route('voyager.'.$dataType->slug.'.destroy', 1) }});$('form#delete_form').attr('action', 1)" data-route="{{ route('voyager.servers.destroy', $data->id) }}"  type="button" data-bs-toggle="offcanvas" data-bs-target="#deleteConvas" aria-controls="deleteConvas">
                {{ $action->getTitle() }}
            </button>
            @else
                <a href="{{ $action->getRoute($dataType->name) }}" title="{{ $action->getTitle() }}" {!! $action->convertAttributesToHtml() !!}>
                    <i class="{{ $action->getIcon() }}"></i> <span class="hidden-xs hidden-sm">{{ $action->getTitle() }}</span>
                </a>
            @endif
        @endif
    @endcan
@elseif (method_exists($action, 'massAction'))
    <form method="post" action="{{ route('voyager.'.$dataType->slug.'.action') }}" style="display:inline">
        {{ csrf_field() }}
        <button type="submit" {!! $action->convertAttributesToHtml() !!}><i class="{{ $action->getIcon() }}"></i>  {{ $action->getTitle() }}</button>
        <input type="hidden" name="action" value="{{ get_class($action) }}">
        <input type="hidden" name="ids" value="" class="selected_ids">
    </form>
@endif
