@extends('front.layouts.main')

@section('content')

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>خانه</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>دسته ها</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>جستجو</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>علاقه‌مندی</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>سبد خرید</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Home Section Start -->
    <section class="home-section home-section-ratio pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xxl-3 col-lg-4 col-sm-6 ratio_180 d-sm-block d-none">
                    <div class="home-contain rounded">
                        <div class="h-100">
                            <img src="{{ asset('front/images/cake/banner/1.jpg') }}" class="bg-img blur-up lazyload"
                                 alt="">
                        </div>
                        <div class="home-detail p-top-left home-p-medium">
                            <div>
                                <h6 class="text-danger mb-2 fw-bold">تازه و خوشمزه</h6>
                                <h2 class="theme-color fw-bold aviny">نان تازه</h2>
                                <p class="text-content">پخت ویژه با بروزترین دستگاهای اروپا در ایران</p>
                                <a href="shop-left-sidebar.html" class="shop-button">خرید آنلاین<i
                                            class="fa-solid fa-left-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-8 order-xxl-0 ratio_87">
                    <div class="home-contain rounded">
                        <div class="h-100">
                            <img src="{{ asset('front/images/cake/banner/2.jpg') }}" class="bg-img blur-up lazyload"
                                 alt="">
                        </div>
                        <div class="home-detail p-center-left home-p-sm">
                            <div class="home-top">
                                <h6>تخفیف ویژه<span>30% تخفیف</span></h6>
                                <h1 class="w-75 text-uppercase name-title poster-2 my-2">
                                    ما <span class="name">بیسکوییت های</span> خوشمزه
                                    <span class="name-2">می پزیم!</span>
                                </h1>
                                <p class="w-50">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                    از طراحان گرافیک است.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn text-white mt-xxl-4 mt-2 home-button mend-auto theme-bg-color">
                                    خرید آنلاین <i class="fa-solid fa-left-long icon ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-4 col-sm-6 ratio_180 custom-ratio d-xxl-block d-lg-none d-sm-block d-none">
                    <div class="home-contain rounded">
                        <img src="{{ asset('front/images/cake/banner/3.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="home-detail p-top-left home-p-medium">
                            <div>
                                <h6 class="text-danger mb-2 fw-bold">تازه و خوشمزه</h6>
                                <h2 class="theme-color fw-bold aviny">بیسکوییت</h2>
                                <p class="text-content">کرانچ کره بادام زمینی دانه های چیا جعفری قرمز ریحان سرریز..
                                </p>
                                <a href="shop-left-sidebar.html" class="shop-button">خرید آنلاین <i
                                            class="fa-solid fa-left-long ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Category Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-9">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark">
                                <div>
                                    <img src="{{ asset('front/svg/2/1.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>کیک</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.2s">
                                <div>
                                    <img src="{{ asset('front/svg/2/2.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>ساندویچ</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.3s">
                                <div>
                                    <img src="{{ asset('front/svg/2/3.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>بیسکوییت</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.4s">
                                <div>
                                    <img src="{{ asset('front/svg/2/4.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>کیک</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.5s">
                                <div>
                                    <img src="{{ asset('front/svg/2/5.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>نان</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.6s">
                                <div>
                                    <img src="{{ asset('front/svg/2/6.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>بیسکوییت</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.7s">
                                <div>
                                    <img src="{{ asset('front/svg/2/7.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>شیرینی</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.8s">
                                <div>
                                    <img src="{{ asset('front/svg/2/8.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>شیرینی های رولتی</h5>
                                </div>
                            </a>
                        </div>

                        <div>
                            <a href="shop-left-sidebar.html" class="category-box category-box-2 category-dark"
                               data-wow-delay="0.9s">
                                <div>
                                    <img src="{{ asset('front/svg/2/9.svg') }}" class="blur-up lazyload" alt="">
                                    <h5>کیک کوچک</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Discount Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain hover-effect">
                        <img src="{{ asset('front/images/cake/banner/4.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center p-sm-4 p-3 text-white text-center">
                            <div>
                                <h3 class="lh-base fw-bold text-white">
                                    دریافت 30 درصد تخفیف برای خرید بالای 300 تومان
                                </h3>
                                <h6 class="coupon-code code-2">کد تخفیف : GROCERY1920</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount Section End -->

    <!-- Banner Section Start -->
    <section class="ratio_60">
        <div class="container-fluid-lg">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('front/images/cake/banner/5.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% تخفیف</h6>
                                    <h4 class="mt-2">محصولات جدید</h4>
                                    <h6 class="mt-2 text-content">ملزومات روزانه</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('front/images/cake/banner/6.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% تخفیف</h6>
                                    <h4 class="mt-2">سود بیشتر</h4>
                                    <h6 class="mt-2 text-content">نان تست سوخاری شده</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('front/images/cake/banner/7.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% تخفیف</h6>
                                    <h4 class="mt-2">هر روز تازه!</h4>
                                    <h6 class="mt-2 text-content">تحویل فوری</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xxl-3 col-sm-6">
                    <a href="shop-left-sidebar.html" class="banner-contain-2 hover-effect">
                        <img src="{{ asset('front/images/cake/banner/8.jpg') }}" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-detail p-top-left">
                            <div>
                                <div class="banner-detail-box mb-md-3 mb-1">
                                    <h6 class="text-danger">5% تخفیف</h6>
                                    <h4 class="mt-2">پروفروش</h4>
                                    <h6 class="mt-2 text-content">کیک های خوشمزه</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row g-3">
                <div class="col-xxl-9 col-xl-8">
                    <div class="title title-flex">
                        <div>
                            <h2>محصولات ویژه امروز</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="assets/svg/leaf.svg#cake"></use>
                                </svg>
                            </span>
                        </div>
                        <div class="timing-box">
                            <div class="timing theme-bg-color">
                                <i data-feather="clock"></i>
                                <h6 class="name">اتمام در :</h6>
                                <div class="time" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                    <ul>
                                        <li>
                                            <div class="counter">
                                                <div class="seconds">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="minutes">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="hours">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="counter">
                                                <div class="days">
                                                    <h6></h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-box-slider-2 no-arrow">
                        @foreach($products as $product)
                            <div>
                                <div class="product-box product-box-bg wow fadeInUp">
                                    <div class="product-image">
                                        <a href="{{ $product->viewLink() }}">
                                            <img src="{{ $product->featuredImageOrDefault() }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="نمایش">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="مقایسه">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="لیست علاقه‌مندی">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <a href="{{ $product->viewLink() }}">
                                            <h6 class="name">
                                                {{ $product->name }}
                                            </h6>
                                        </a>

                                        <h5 class="sold text-content">
                                            <span class="theme-color price">{{ $product->showPrice() }} </span>
                                            @if($product->prev_price)
                                                <del>{{ number_format($product->prev_price) }}</del>
                                            @endif
                                        </h5>

                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>

                                            <h6 class="theme-color">
                                                {{ $product->stock > 0 ? 'موجود در ابنار' : 'ناموجود' }}
                                            </h6>
                                        </div>

                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">افزودن
                                                <span class="add-icon bg-light-orange">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group">
                                                    <button type="button" class="qty-left-minus" data-type="minus"
                                                            data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus" data-type="plus"
                                                            data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>

                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="position-sticky top-0">
                        <div class="ratio_209 rounded wow fadeIn">
                            <div class="banner-contain-2 rounded hover-effect">
                                <img src="{{ asset('front/images/cake/banner/10.jpg') }}"
                                     class="bg-img blur-up lazyload" alt="">
                                <div class="banner-detail p-top-left">
                                    <div>
                                        <h6 class="text-uppercase theme-color fw-500">غذای دریایی</h6>
                                        <h3 class="text-uppercase">
                                            برند <br><span class="brand-name">خاص</span>
                                        </h3>
                                        <p class="text-content fw-500 mt-3 lh-lg">لورم ایپسوم متن ساختگی با تولید سادگی
                                            نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>

                                        <div class="banner-detail-box banner-detail-box-2 mb-md-3 mb-1">
                                            <h4 class="text-uppercase">حداکثر تا</h4>
                                            <h2 class="mt-2">50%</h2>
                                            <h3 class="text-uppercase">تخفیف</h3>
                                        </div>

                                        <div>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                    class="btn text-white btn-md mt-xxl-4 mt-2 home-button mend-auto theme-bg-color">
                                                خرید آنلاین<i class="fa-solid fa-left-long icon ms-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ratio_125 section-t-space wow fadeIn">
                            <div class="banner-contain-2 rounded hover-effect">
                                <img src="{{ asset('front/images/cake/banner/9.jpg') }}" class="bg-img blur-up lazyload"
                                     alt="">
                                <div class="banner-detail p-top-left">
                                    <div>
                                        <h6 class="text-uppercase theme-color fw-500">هر روز تازه!</h6>
                                        <h3 class="text-pacifico mt-2 aviny">نان <span
                                                    class="theme-color aviny">لذیذ</span>
                                        </h3>
                                        <p class="text-content fw-500 mt-3 w-75 mend-auto">نان خوشمزه و نان تازه کاملاً
                                            جدید.</p>
                                        <button onclick="location.href = 'shop-left-sidebar.html';"
                                                class="btn text-white btn-md mt-2 home-button mend-auto theme-bg-color">
                                            خرید آنلاین <i class="fa-solid fa-left-long icon ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space wow fadeIn">
                            <div class="category-menu category-menu-2">
                                <h3>نظرات مشتریان</h3>

                                <div class="review-box">
                                    <div class="review-contain">
                                        <h5 class="w-75">ما به تجربه مشتری خود اهمیت می دهیم</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                            از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</p>
                                    </div>

                                    <div class="review-profile">
                                        <div class="review-image">
                                            <img src="{{ asset('front/images/vegetable/review/1.jpg') }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                        <div class="review-detail">
                                            <h5>تینا </h5>
                                            <h6>مدیر فروش</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="home-contain hover-effect">
                        <img src="{{ asset('front/images/cake/banner/11.jpg') }}" class="bg-img blur-up lazyload"
                             alt="">
                        <div class="home-detail p-center position-relative text-center">
                            <div>
                                <h3 class="text-danger text-uppercase fw-bold mb-0">
                                    آخرین پیشنهادات
                                </h3>
                                <h2 class="theme-color text-pacifico fw-normal mb-0 super-sale text-center aviny">
                                    فروش
                                </h2>
                                <h2 class="home-name text-uppercase aviny" style="text-align: center;">ویژه</h2>
                                <h3 class="text-pacifico fw-normal text-content text-center">
                                    www.your-site.com
                                </h3>
                                <ul class="social-icon">
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://www.whatsapp.com/">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Top Selling Section Start -->
    <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="slider-4-1">
                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>برترین محصولات</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/1.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک شکلاتی خامه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>10.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.5s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/2.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک سفید خامه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>40.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.5s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/3.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک گیلاس میوه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>$ 45.00</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>محصولات پرطرفدار</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/5.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک جشن بزرگ</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>10.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/6.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک شیرین</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>40.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/1.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک شکلاتی خامه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>85.000 تومان</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>جدیدترین</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/4.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک گیلاس میوه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>10.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/5.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک شکلاتی خامه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>40.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="product.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/6.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product.html">
                                            <h5>کیک سفید خامه ای</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>50.000 تومان</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="top-selling-box">
                                <div class="top-selling-title">
                                    <h3>برترین محصولات</h3>
                                </div>

                                <div class="top-selling-contain wow fadeInUp">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/3.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>نان برگر موفه</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>10.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.2s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/4.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>کیک جشن بزرگ</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>40.000 تومان</h6>
                                    </div>
                                </div>

                                <div class="top-selling-contain wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="product-left.html" class="top-selling-image">
                                        <img src="{{ asset('front/images/cake/pro/5.jpg') }}"
                                             class="img-fluid blur-up lazyload"
                                             alt="">
                                    </a>

                                    <div class="top-selling-detail">
                                        <a href="product-left.html">
                                            <h5>کیک شیرین</h5>
                                        </a>
                                        <div class="product-rating">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(34)</span>
                                        </div>
                                        <h6>45.000 تومان</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2 newsletter-box-3">
                <div class="newsletter-contain py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>عضویت در خبرنامه ...</h2>
                                    <h5>20 درصد تخفیف ویژه با عضویت در خبرنامه</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="ایمیل خود را وارد کنید">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">عضویت</span>
                                            <i class="fa-solid fa-arrow-left icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->

@endsection