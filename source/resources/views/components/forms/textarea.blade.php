<div>
    <x-forms.label :label="$label" :field="$field" :required="$required"/>

    <textarea
        name="{{ $field }}"
        id="{{ 'input_' . $field }}"
        @class([
            'form-control',
            'is-invalid' => $errors->has($field),
        ])
        rows="10"
        {{ $required ? 'required' : '' }}
    >{{ old($field, '') }}</textarea>
</div>
