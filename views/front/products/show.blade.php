@extends('front.layouts.main')

@section('content')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>{{ $product->name }}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>

                                <li class="breadcrumb-item active">{{ $product->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row">

                @include('partials._alerts')

                <div class="col-sm-12 wow fadeInUp">
                    <div class="row g-4">
                        <div class="col-xl-5 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-sm-4 g-2">
                                    <div class="col-12">
                                        <div class="product-main no-arrow">
                                            <div>
                                                <div class="slider-image">

                                                    <img src="{{ $product->featuredImageOrDefault() }}"
                                                         id="img-1"
                                                         data-zoom-image="{{ $product->featuredImageOrDefault() }}"
                                                         class="
                                                        img-fluid image_zoom_cls-0 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         data-zoom-image="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         class="
                                                        img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('front/images/fashion/product/25.jpg') }}"
                                                         data-zoom-image="{{ asset('front/images/fashion/product/25.jpg') }}"
                                                         class="
                                                        img-fluid image_zoom_cls-2 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('front/images/fashion/product/26.jpg') }}"
                                                         data-zoom-image="{{ asset('front/images/fashion/product/26.jpg') }}"
                                                         class="
                                                        img-fluid image_zoom_cls-3 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('front/images/fashion/product/23.jpg') }}"
                                                         data-zoom-image="{{ asset('front/images/fashion/product/23.jpg') }}"
                                                         class="
                                                        img-fluid image_zoom_cls-4 blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="slider-image">
                                                    <img src="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         data-zoom-image="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         class="
                                                        img-fluid image_zoom_cls-5 blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="left-slider-image left-slider no-arrow slick-top">
                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/23.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/25.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/26.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/23.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ asset('front/images/fashion/product/24.jpg') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-7 wow fadeInUp">
                            <div class="right-box-contain">
                                @if($product->discount())
                                    <h6 class="offer-top">{{ $product->discount() }}% تخفیف</h6>
                                @endif
                                <h2 class="name">{{ $product->name }}</h2>
                                <div class="price-rating">
                                    <h3 class="theme-color price">{{ $product->showPrice() }}
                                        @if($product->prev_price)
                                            <del class="text-content">{{ number_format($product->prev_price) }}</del>
                                        @endif
                                        @if($product->discount())
                                            <span class="offer theme-color">({{ $product->discount() }}% تخفیف)</span>
                                        @endif
                                    </h3>
                                    <div class="product-rating custom-rate">
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
                                        <span class="review">23 بازخورد</span>
                                    </div>
                                </div>

                                <div class="dynamic-checkout">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        @include('partials._csrf')

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <button class="border-theme-color btn btn-md scroll-button" type="submit">
                                            <div><i class="ri-shopping-cart-line me-1"></i> افزودن به سبد خرید</div>
                                        </button>
                                    </form>
                                </div>

                                <div class="buy-box d-flex justify-content-between">
                                    <div class="d-flex">
                                        <a href="wishlist.html">
                                            <i data-feather="heart"></i>
                                            <span>علاقه‌مندی‌ها</span>
                                        </a>

                                        <a href="compare.html">
                                            <i data-feather="shuffle"></i>
                                            <span>مقایسه</span>
                                        </a>
                                    </div>

                                    <div>
                                        آخرین ویرایش: {{ jdate($product->updated_at)->format('Y/m/d') }}
                                    </div>
                                </div>

                                <div class="pickup-box">
                                    <div class="product-title">
                                        <h4>اطلاعات فروشگاه</h4>
                                    </div>

                                    <div class="pickup-detail">
                                        <h4 class="text-content w-100">کیک آب نبات چوبی کیک شکلاتی کیک شکلاتی دسر عناب.
                                            شیرینی کوتاه آلو شکر پودر دسر کوکی براونی شیرین.</h4>
                                    </div>

                                    <div class="product-info">
                                        <ul class="product-info-list product-info-list-2">
                                            <li>نوع : <a href="javascript:void(0)">آستین بلند</a></li>
                                            <li>تاریخ : <a href="javascript:void(0)">1 اردیبهشت 1403</a></li>
                                            <li>موجودی : <a href="javascript:void(0)">5</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Left Sidebar End -->


    <!-- Nav Tab Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="product-section-box m-0">
                        <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" type="button" role="tab">توضیحات
                                </button>
                            </li>

                            @if($product->customFields())
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                            type="button" role="tab">اطلاعات محصول
                                    </button>
                                </li>
                            @endif

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care"
                                        type="button" role="tab">ویژگی محصول
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                        type="button" role="tab">بازخورد
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content custom-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="product-description">
                                    {!! $product->description !!}
                                </div>
                            </div>

                            @if($product->customFields())
                                <div class="tab-pane fade" id="info" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table info-table">
                                            <tbody>
                                            @foreach($product->customFields() as $field)
                                                <tr>
                                                    <td>{{ $field->name }}</td>
                                                    <td>{{ $field->value }}</td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endif

                            <div class="tab-pane fade" id="care" role="tabpanel">
                                <div class="information-box">
                                    <ul>
                                        <li>کیک های خامه ای را در یخچال نگهداری کنید. کیک های فوندانت باید در محیطی با
                                            تهویه مطبوع نگهداری شوند.
                                        </li>

                                        <li>کیک را برش بزنید و در دمای اتاق سرو کنید و مطمئن شوید که در معرض حرارت
                                            نباشد.
                                        </li>

                                        <li>از یک چاقوی دندانه دار برای برش کیک فوندانت استفاده کنید.</li>

                                        <li>عناصر مجسمه سازی و مجسمه ها ممکن است حاوی تکیه گاه های سیمی یا خلال دندان یا
                                            سیخ های چوبی برای حمایت باشند.
                                        </li>

                                        <li>لطفاً محل قرارگیری این اقلام را قبل از ارائه به کودکان کوچک بررسی کنید.</li>

                                        <li>کیک باید ظرف 24 ساعت مصرف شود.</li>

                                        <li>از کیک خود لذت ببرید!</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="review-box">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="product-rating-box">
                                                <div class="row">
                                                    @if(auth()->check())
                                                        @include('front.partials._comment')
                                                    @else
                                                        <div class="col-xs-12">
                                                            <p>برای ارسال دیدگاه باید وارد حساب کاربری خود شوید</p>
                                                            <a href="{{ route('auth.login') }}" class="btn btn-xs fw-bold text-light theme-bg-color">ورود به حساب کاربری</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="review-people">
                                                <ul class="review-list">
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{ asset('front/images/review/1.jpg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a
                                                                            href="javascript:void(0)"
                                                                            class="name">جک داو</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 اردیبهشت 1403
                                                                            06:40 : عصر
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                        سطرآنچنان که لازم است</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{ asset('front/images/review/2.jpg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a
                                                                            href="javascript:void(0)"
                                                                            class="name">جیسیکا میلر</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 اردیبهشت 1403
                                                                            06:34 : عصر
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i
                                                                                                data-feather="star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                                                                        شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                                                        نرم افزارها شناخت بیشتری را برای طراحان رایانه
                                                                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                                                                        فارسی ایجاد کرد.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{ asset('front/images/review/3.jpg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a
                                                                            href="javascript:void(0)"
                                                                            class="name">ایلان ماسک</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 فروردین 1403
                                                                            06:18 : صبح
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                        سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                                                        مورد نیاز و کاربردهای متنوع با هدف بهبود
                                                                        ابزارهای کاربردی می باشد.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{ asset('front/images/review/4.jpg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a
                                                                            href="javascript:void(0)"
                                                                            class="name">علی صادقی</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 5 مهر 1403
                                                                            05:58 : عصر
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                        سطرآنچنان که لازم است.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{ asset('front/images/review/5.jpg') }}">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a
                                                                            href="javascript:void(0)"
                                                                            class="name">ایلان ماسک</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 مهر 1402
                                                                            05:22 : عصر
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                                        صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                                                        سطرآنچنان که لازم است.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
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
    <!-- Nav Tab Section End -->

    <!-- Related Product Section Start -->
    <section class="product-list-section section-b-space">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>محصولات مرتبط</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-6_1 product-wrapper">

                        @foreach($related_products as $related_product)
                            @component('front.components.product', ['product' => $related_product])

                            @endcomponent
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
@endsection