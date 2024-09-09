<br>
<?php $checked = false; ?>
@if(isset($dataTypeContent->{$row->field}) || old($row->field))
    <?php $checked = old($row->field, $dataTypeContent->{$row->field}); ?>
@else
    <?php $checked = isset($options->checked) &&
        filter_var($options->checked, FILTER_VALIDATE_BOOLEAN) ? true: false; ?>
@endif

<?php $class = $options->class ?? "toggleswitch"; ?>

@if(isset($options->on) && isset($options->off))
    <div class="form-check form-switch mb-2 mt-2">
        <input class="form-check-input {{ $class }}" name="{{ $row->field }}"  type="checkbox" id="flexSwitchCheckChecked" data-on="{{ $options->on }}" {!! $checked ? 'checked="checked"' : '' !!} data-off="{{ $options->off }}" >
    </div>
@else
    <div class="form-check form-switch mb-2 mt-2">
        <input class="form-check-input {{ $class }}" name="{{ $row->field }}" type="checkbox" id="flexSwitchCheckChecked" @if($checked) checked @endif >
    </div>
@endif
