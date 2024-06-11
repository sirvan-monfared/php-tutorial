<div id="filters">
    <form method="GET" action="{{ route('admin.product.index') }}">

        <div class="d-flex align-items-start gap-4">
            <label>نام محصول :
                <input type="text" class="form-control" name="name" aria-controls="table_id" value="{{ $_GET['name'] ?? null }}">
            </label>
            <div class="d-flex flex-column gap-1">
                <label>قیمت از : <input type="text" class="form-control" placeholder="" name="price_from"
                                        aria-controls="table_id"  value="{{ $_GET['price_from'] ?? null }}"></label>
                <label>تا : <input type="text" class="form-control" placeholder="" aria-controls="table_id" name="price_to" value="{{ $_GET['price_to'] ?? null }}"></label>
            </div>
            <div class="d-flex flex-column gap-1">
                <label>تعداد در انبار از : <input type="text" class="form-control" placeholder="" name="stock_from"  value="{{ $_GET['stock_from'] ?? null }}"
                                                  aria-controls="table_id"></label>
                <label>تا : <input type="text" class="form-control" placeholder="" aria-controls="table_id" name="stock_to"  value="{{ $_GET['stock_to'] ?? null }}"></label>
            </div>
            <label>دسته بندی :
                <select name="category_id" class="js-example-basic-single w-100">
                    <option value="">همه دسته ها</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @selected((int) ($_GET['category_id'] ?? null) === $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
            </label>
            <div type="submit" class=" mt-4 mx-auto d-flex flex-column gap-1">
                <button class="btn btn-info d-flex align-items-center gap-2">
                    <i class="fa fa-search"></i>
                    <span>اعمال فیلترها</span>
                </button>
                <a href="{{ route('admin.product.index') }}" class="d-block text-center">حذف فیلترها</a>
            </div>
        </div>
    </form>
</div>