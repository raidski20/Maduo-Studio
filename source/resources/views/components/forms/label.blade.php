<label for="{{ 'input_' . $field }}" class="form-label text-capitalize">
    @if($required)
        {{ $label }}
        <span class="text-danger">*</span>
    @else
        {{ $label }}
    @endif
</label>
