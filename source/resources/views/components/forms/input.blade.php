<div>
    <x-forms.label :label="$label" :field="$field" :required="$required"/>

    <input type="{{ $type }}"
           name="{{ $field }}"
           id="{{ 'input_' . $field }}"
           @class([
                'form-control',
                'is-invalid' => $errors->has($field),
           ])
           value="{{ old($field, '') }}"
           {{ $required ? 'required' : '' }}
    >
</div>
