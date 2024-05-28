<div class="mb-4 row align-items-center">
    <label for="name" class="form-label-title col-sm-3 mb-0 required">نام دسته</label>
    <div class="col-sm-9">
        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $category->name) }}"
               placeholder="نام دسته بندی جدید">
        <div class="help-block text-danger fs-7 ">{{ $errors['name'] ?? null  }}</div>
    </div>
</div>

<div class="mb-4 row align-items-center">
    <label for="slug" class="form-label-title col-sm-3 mb-0 required">نامک</label>
    <div class="col-sm-9">
        <input class="form-control" type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}"
               placeholder="نام دسته بندی جدید">
        <div class="help-block text-danger fs-7 ">{{ $errors['slug'] ?? null  }}</div>
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">ذخیره</button>
</div>