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

                                            @foreach($product->galleryImages() as $image)
                                                <div>
                                                    <div class="slider-image">
                                                        <img src="{{ $image->path() }}"
                                                             data-zoom-image="{{ $image->path() }}"
                                                             class="
                                                            img-fluid image_zoom_cls-1 blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            @endforeach




                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="left-slider-image left-slider no-arrow slick-top">

                                            <div>
                                                <div class="sidebar-image">
                                                    <img src="{{ $product->featuredImageOrDefault() }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </div>
                                            </div>


                                            @foreach($product->galleryImages() as $image)
                                                <div>
                                                    <div class="sidebar-image">
                                                        <img src="{{ $image->path() }}"
                                                             class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                </div>
                                            @endforeach
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
                                        @if ($product->averageRating())
                                            <ul class="rating">
                                                @component('front.components.rating', ['stars' => $product->averageRating()])
                                                @endcomponent
                                            </ul>

                                            <span class="review">{{ $product->commentsCount() }} دیدگاه </span>
                                        @endif
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

                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="review-box">
                                    @include('front.products._comments')
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