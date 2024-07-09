<form action="{{ route('search') }}" method="GET">
    <div class="show-button">
        <div class="top-filter-menu-2">
            <div class="sidebar-filter-menu" data-bs-toggle="collapse"
                 data-bs-target="#collapseExample">
                <a href="javascript:void(0)"><i class="fa-solid fa-filter"></i> منوی فیلتر</a>
            </div>

            <div class="ms-auto d-flex align-items-center">
            </div>
        </div>
    </div>

    <div class="top-filter-category" id="collapseExample">
        <div class="row g-sm-4 g-3">
            <div class="col-xl-3 col-md-6">
                <div class="category-title">
                    <h3>دسته ها</h3>
                </div>
                <ul class="category-list custom-padding custom-height">
                    @foreach($categories as $category)
                        <li>
                            <div class="form-check ps-0 m-0 category-list-box">
                                <input class="checkbox_animated" name="category_id[]"
                                       @checked(in_array($category->id, $_GET['category_id'] ?? [])) id="category_id_{{ $category->id }}"
                                       value="{{ $category->id }}" type="checkbox">
                                <label class="form-check-label" for="category_id_{{ $category->id }}">
                                    <span class="name">{{ $category->name }}</span>
                                </label>
                            </div>
                        </li>
                    @endforeach


                </ul>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="category-title">
                    <h3>قیمت</h3>
                </div>
                <div class="range-slider">
                    <label>از: </label>
                    <input type="text" name="price_from" class="form-control" value="{{ $_GET['price_from'] ?? null }}">
                </div>
                <div class="range-slider mt-2">
                    <label>تا: </label>
                    <input type="text" name="price_to" class="form-control" value="{{ $_GET['price_to'] ?? null }}">
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="category-title">
                    <h3> کلمه کلیدی</h3>
                </div>

                <div>
                    <label for="">جستجو کنید ...</label>
                    <input type="text" class="form-control" name="keyword" value="{{ $_GET['keyword'] ?? null }}">
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex flex-column justify-content-between">
                <div>
                    <div class="category-title">
                        <h3>مرتب سازی</h3>
                    </div>

                    <div>
                        <label for="order">بر اساس:</label>
                        <select name="order" id="order" class="form-control">
                            <option value="default" selected>پیش فرض</option>
                            <option value="price_desc" @selected($_GET['order'] === 'price_desc')>بالاترین قیمت</option>
                            <option value="price_asc" @selected($_GET['order'] === 'price_asc')>پایین ترین قیمت</option>
                            <option value="date_desc" @selected($_GET['order'] === 'date_desc')>تاریخ نزولی</option>
                            <option value="date_asc" @selected($_GET['order'] === 'date_asc')>تاریخ صعودی</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn theme-bg-color btn-xs">فیلتر</button>
            </div>
        </div>
    </div>


</form>