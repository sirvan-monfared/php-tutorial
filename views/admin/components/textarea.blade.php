<div class="row">
    <label for="{{ $name }}" class="form-label-title col-sm-3 mb-0 {{ $required ? 'required' : null }}">{{ $label }}</label>
    <div class="col-sm-{{ $size ?? '9' }}">
        <textarea class="ckeditor" name="{{ $name }}" id="{{ $name }}" style="width: 100%">{{ $slot }}</textarea>
        <p class="help-block fs-6 text-danger">{{ $errors[$name] ?? null }}</p>
    </div>
</div>