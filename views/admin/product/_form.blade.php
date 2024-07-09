<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>{{ $title ?? '' }}</h5>
        </div>

        @component('admin.components.input', ['name' => 'name', 'label' => 'نام محصول', 'required' => true, 'placeholder' => 'نام محصول را وارد کنید'])
            {{ old('name', $product->name) }}
        @endcomponent

        @component('admin.components.input', ['name' => 'slug', 'label' => 'نامک', 'required' => true])
            {{ old('slug', $product->slug) }}
        @endcomponent

        <div class="mb-4 row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title required" for="category_id">دسته بندی</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="category_id" id="category_id">
                    <option disabled>انتخاب کنید</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected($category->id === $product->category_id)>{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="help-block text-danger fs-7 ">{{ $errors['category_id'] ?? null  }}</div>
            </div>
        </div>


        <div class="row align-items-center">
            <label
                    class="col-sm-3 col-form-label form-label-title">بازگشت وجه</label>
            <div class="col-sm-9">
                <label class="switch">
                    <input type="checkbox" checked=""><span
                            class="switch-state"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>قیمت محصول</h5>
        </div>


        @component('admin.components.input', ['name' => 'price', 'label' => 'قیمت نهایی', 'required' => true])
            {{ old('price', $product->price) }}
        @endcomponent

        @component('admin.components.input', ['name' => 'prev_price', 'label' => 'قیمت قبل از تخفیف'])
            {{ old('prev_price', $product->prev_price) }}
        @endcomponent

        @component('admin.components.input', ['name' => 'stock', 'label' => 'تعداد در انبار', 'size' => 5])
            {{ old('stock', $product->stock) }}
        @endcomponent

    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>توضیحات</h5>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <label for="description" class="form-label-title col-sm-3 mb-0">توضیحات محصول</label>
                    <div class="col-sm-9">
                        <textarea class="ckeditor" name="description"
                                  id="description">{{ old('description', $product->description) }}</textarea>
                        <p class="help-block fs-6 text-danger">{{ $errors['description'] ?? null }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>تصویر محصول</h5>
        </div>

        <div class="row align-items-center">
            <label for="image" class="col-sm-3 col-form-label form-label-title">تصویر شاخص</label>
            <div class="col-sm-9">
                <input type="file" class="form-control form-choose" name="image" id="image">
            </div>
            @if($product->hasFeaturedImage())
                <img src="{{ $product->featuredImage() }}" alt="" height="200" style="width: auto">
            @endif
        </div>


        <div class="row align-items-center mt-5">
            <label for="gallery" class="col-sm-3 col-form-label form-label-title">گالری تصاویر</label>
            <div class="col-sm-9">
                <input type="file" class="form-control form-choose" name="gallery[]" id="gallery" multiple>
            </div>

            @foreach($product->galleryImages() as $image)
                <img src="{{ $image->path() }}" alt="" height="200" style="width: auto">
            @endforeach
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>ویژگی های محصول</h5>
        </div>

        <div id="custom-fields-placeholder">
            @foreach($product->customFields() as $field)
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <label class="col-sm-3 col-form-label form-label-title">عنوان ویژگی</label>
                        <div class="bs-example">
                            <input type="text" name="custom_field_key[]" value="{{ $field->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="col-sm-3 col-form-label form-label-title">مقدار ویژگی</label>
                        <div class="bs-example">
                            <input type="text" name="custom_field_value[]" value="{{ $field->value }}" class="form-control">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="javascript:" id="add-custom-fields" class="add-option">
            <i class="ri-add-line me-2"></i> افزودن ویژگی جدید
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>سئو و موتور جستجو</h5>
        </div>

        <div class="seo-view">
            <span class="link">https://laraplus.ir</span>
            <h5>فلش 64 گیگ sandisk با گارانتی 18 ماهه متین</h5>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک است. </p>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">عنوان صفحه</label>
            <div class="col-sm-9">
                <input class="form-control" type="search"
                       placeholder="فلش 64 گیگ sandisk با گارانتی 18 ماهه متین">
            </div>
        </div>

        <div class="mb-4 row">
            <label class="form-label-title col-sm-3 mb-0">توضیحات متا</label>
            <div class="col-sm-9">
                <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="row">
            <label class="form-label-title col-sm-3 mb-0">لینک شما</label>
            <div class="col-sm-9">
                <input class="form-control" type="search"
                       placeholder="">
            </div>
        </div>


    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2 d-flex justify-content-end mb-0">
            <button type="submit" class="btn btn-theme">ذخیره</button>
        </div>
    </div>
</div>

<template id="custom-fields-template">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <label class="col-sm-3 col-form-label form-label-title">عنوان ویژگی</label>
            <div class="bs-example">
                <input type="text" name="custom_field_key[]" class="form-control">
            </div>
        </div>

        <div class="col-sm-6">
            <label class="col-sm-3 col-form-label form-label-title">مقدار ویژگی</label>
            <div class="bs-example">
                <input type="text" name="custom_field_value[]" class="form-control">
            </div>
        </div>
    </div>
</template>