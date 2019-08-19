<div class="form-group">
    <label for="{{ $id ?? '' }}">{!! $label !!}</label>
        <input 
            {{ isset($disabled) && $disabled ? 'disabled' : '' }}
            {{ isset($readonly) && $readonly ? 'readonly' : '' }}
            name="{{ $name ?? '' }}" 
            type="{{ $type ?? 'text' }}" 
            class="form-control" 
            value="{{ $value ?? '' }}"
            id="{{ $id ?? '' }}"
            step="{{ $step ?? '' }}" 
            placeholder="{{ $placeholder ?? '' }}">
</div>