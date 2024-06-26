<ul class="category-list">
    @foreach($categories as $category)
        <li class="onhover-category-list">
            <a href="{{ $category->viewLink() }}" class="category-name">
                <img src="{{ asset('front/svg/1/vegetable.svg') }}" alt="">
                <h6>{{ $category->name }}</h6>
                <i class="fa-solid fa-angle-left"></i>
            </a>

            <div class="onhover-category-box">
                <div class="list-1">
                    <div class="category-title-box">
                        <h5>سبزیجات ارگانیک</h5>
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">سیب زمینی و گوجه فرنگی</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">خیار و فلفل دلمه ای</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">سبزیجات برگ دار</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">ریشه سبزیجات</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">لوبیا و بامیه</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">کلم و گل کلم</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">کدو و چوب طبل</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">سبزیجات</a>
                        </li>
                    </ul>
                </div>

                <div class="list-2">
                    <div class="category-title-box">
                        <h5>میوه تازه</h5>
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0)">موز</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">کیوی</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">سیب</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">میوه استوایی</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">آواکادوو</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">دراگون فروت</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    @endforeach
</ul>