<div class="form-group">
    <label for="{{ $name }}"  class="control-label mb-1"> {{ $label ?? '' }}  </label>

    <select 
        {{ $atributo ?? '' }}
        name="{{ $name }}" 
        id="{{ $id ?? '' }}" 
        class="form-control {{ $class ?? '' }}"
        {{ isset($disabled) && $disabled ? 'disabled' : '' }}>
        @if (isset($vue_option))
            {{ $vue_option }}
        @else
            @foreach ($object as $element)
                @php
                    $a = old($name, $value);
                @endphp

            <option 
            {{$a == $element[$option_value ??  'id'] ? 'selected' : '' }} 
            value="{{ $element[$option_value ?? 'id'] }}"> 
                @isset($option_description)
                    @if (is_array($option_description))
                        @foreach ($option_description as $opt)
                            {{ $element[$opt] }} - 
                        @endforeach
                    @else
                        {{ $element[$option_description] }}
                    @endif
                @endisset
                {{ $element['descripcion'] }}
            </option>
            @endforeach
        @endif
    </select>
    @if ($errors->has($name))
        <span class="help-block text-danger">{{ $errors->first($name) }}</span>
    @endif
</div>
