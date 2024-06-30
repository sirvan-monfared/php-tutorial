<div class="mb-4 row align-items-center">
    <label for="slug" class="form-label-title col-sm-3 mb-0 {{ $required ? 'required' : null }}">{{ $label }}</label>
    <div class="col-sm-{{ $size ?? '9' }}">
        <input class="form-control" type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}" value="{{ $slot }}"
               placeholder="{{ $placeholder ?? null }}">
        <div class="help-block text-danger fs-7 ">{{ $errors[$name] ?? null  }}</div>
    </div>
</div>