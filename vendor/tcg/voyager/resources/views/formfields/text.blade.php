<div class="form-floating">
        <input type="text" class="form-control" @if($row->required == 1) required @endif 
        id="floatingInput" name="{{ $row->field }}" {!! isBreadSlugAutoGenerator($options) !!} placeholder="{{ old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name')) }}" aria-describedby="floatingInputHelp" value="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}">
        <label for="floatingInput">{{ $row->field }}</label>
</div>