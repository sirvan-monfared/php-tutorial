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
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>ویژگی محصول</h5>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">نوع ویژگی</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="state">
                    <option>رنگ</option>
                    <option>سایز</option>
                    <option>جنس</option>
                    <option>استایل</option>
                </select>
            </div>
        </div>

        <div class="row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title">مقدار</label>
            <div class="col-sm-9">
                <div class="bs-example">
                    <input type="text" class="form-control"
                           placeholder="تایپ کنید سپس اینتر را بزنید" id="#inputTag"
                           data-role="tagsinput">
                </div>
            </div>
        </div>

        <a href="#" class="add-option"><i class="ri-add-line me-2"></i> افزودن ویژگی جدید</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>تنظیمات ارسال</h5>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">وزن
                (kg)</label>
            <div class="col-sm-9">
                <input class="form-control" type="number" placeholder="وزن محصول">
            </div>
        </div>

        <div class="row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title">ابعاد
                (cm)</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="state">
                    <option>طول</option>
                    <option>عرض</option>
                    <option>ارتفاع</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>موجودی انبار</h5>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">کد بارکد محصول</label>
            <div class="col-sm-9">
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="mb-4 row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title">وضعیت انبار</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="state">
                    <option>موجود</option>
                    <option>در حال اتمام</option>
                    <option>عدم موجودی</option>
                </select>
            </div>
        </div>
        <table class="table variation-table table-responsive-sm">
            <thead>
            <tr>
                <th scope="col">نوع</th>
                <th scope="col">قیمت</th>
                <th scope="col">کد بارکد</th>
                <th scope="col">تعداد</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>قرمز</td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <ul class="order-option">
                        <li><a href="javascript:void(0)" data-toggle="modal"
                               data-target="#deleteModal"><i
                                        class="ri-delete-bin-line"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>آبی</td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <input class="form-control" type="number" placeholder="0">
                </td>
                <td>
                    <ul class="order-option">
                        <li><a href="javascript:void(0)" data-toggle="modal"
                               data-target="#deleteModal"><i
                                        class="ri-delete-bin-line"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>لینک محصولات</h5>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">بیش فروش</label>
            <div class="col-sm-9">
                <input class="form-control" type="search">
            </div>
        </div>

        <div class="row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">فروش مکمل</label>
            <div class="col-sm-9">
                <input class="form-control" type="search">
            </div>
        </div>
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