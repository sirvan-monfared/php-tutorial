@extends('front.layouts.main')

@section('content')
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                @include('partials._alerts')

                <div class="col-12">
                    <div class="breadcrumb-contain breadcrumb-order">
                        <div class="order-box">
                            <div class="order-image">
                                <div class="checkmark {{ $order->isPaid() ? 'order-success' : 'order-failed' }}">
                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>

                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>
                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>
                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>
                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>
                                    <svg class="star" height="19" viewBox="0 0 19 19" width="19"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M8.296.747c.532-.972 1.393-.973 1.925 0l2.665 4.872 4.876 2.66c.974.532.975 1.393 0 1.926l-4.875 2.666-2.664 4.876c-.53.972-1.39.973-1.924 0l-2.664-4.876L.76 10.206c-.972-.532-.973-1.393 0-1.925l4.872-2.66L8.296.746z">
                                        </path>
                                    </svg>
                                    @if($order->isPaid())
                                        <svg class="checkmark__check" height="36" viewBox="0 0 48 36" width="48"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    d="M47.248 3.9L43.906.667a2.428 2.428 0 0 0-3.344 0l-23.63 23.09-9.554-9.338a2.432 2.432 0 0 0-3.345 0L.692 17.654a2.236 2.236 0 0 0 .002 3.233l14.567 14.175c.926.894 2.42.894 3.342.01L47.248 7.128c.922-.89.922-2.34 0-3.23">
                                            </path>
                                        </svg>
                                    @else
                                        <svg class="checkmark__check" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 18 18 6M6 6l12 12"/>
                                        </svg>
                                    @endif

                                    <svg class="checkmark__background" height="115" viewBox="0 0 120 115" width="120"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M107.332 72.938c-1.798 5.557 4.564 15.334 1.21 19.96-3.387 4.674-14.646 1.605-19.298 5.003-4.61 3.368-5.163 15.074-10.695 16.878-5.344 1.743-12.628-7.35-18.545-7.35-5.922 0-13.206 9.088-18.543 7.345-5.538-1.804-6.09-13.515-10.696-16.877-4.657-3.398-15.91-.334-19.297-5.002-3.356-4.627 3.006-14.404 1.208-19.962C10.93 67.576 0 63.442 0 57.5c0-5.943 10.93-10.076 12.668-15.438 1.798-5.557-4.564-15.334-1.21-19.96 3.387-4.674 14.646-1.605 19.298-5.003C35.366 13.73 35.92 2.025 41.45.22c5.344-1.743 12.628 7.35 18.545 7.35 5.922 0 13.206-9.088 18.543-7.345 5.538 1.804 6.09 13.515 10.696 16.877 4.657 3.398 15.91.334 19.297 5.002 3.356 4.627-3.006 14.404-1.208 19.962C109.07 47.424 120 51.562 120 57.5c0 5.943-10.93 10.076-12.668 15.438z">
                                        </path>
                                    </svg>
                                </div>
                            </div>

                            <div class="order-contain">
                                @if ($order->isPaid())
                                    <h3 class="text-success">خرید موفق</h3>
                                    <h5 class="text-content">پرداخت شما با موفقیت انجام شد</h5>
                                @else
                                    <h3 class="text-danger">خرید ناموفق</h3>
                                    <h5 class="text-content">مشکلی در عملیات پرداخت بوجود آمده است</h5>
                                @endif
                                <h6>کد رهگیری : {{ $order->track_id }}</h6>
                                <h6>زمان پرداخت  : {{ jdate($order->updated_at)->format('Y/m/d ساعت H:i') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-9 col-lg-8">
                    <div class="cart-table order-table order-table-2">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>

                                @foreach($order->items() as $item)
                                    <tr>
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="{{ route('products.show', ['id' => $item->product_id]) }}" class="product-image">
                                                    <img src="{{ asset('front/images/vegetable/product/1.png') }}"
                                                         class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        <li class="name">
                                                            <a href="{{ route('products.show', ['id' => $item->product_id]) }}">{{ str_limit($item->product_name, 25) }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <h4 class="table-title text-content">قیمت</h4>
                                            <h6 class="theme-color">{{ priceFormat($item->unit_price) }}</h6>
                                        </td>

                                        <td class="quantity">
                                            <h4 class="table-title text-content">تعداد</h4>
                                            <h4 class="text-title">{{ $item->quantity }}</h4>
                                        </td>

                                        <td class="subtotal">
                                            <h4 class="table-title text-content">جمع کل</h4>
                                            <h5>{{ priceFormat($item->quantity * $item->unit_price) }}</h5>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-lg-4">
                    <div class="row g-4">
                        <div class="col-lg-12 col-sm-6">
                            <div class="summery-box">
                                <div class="summery-header">
                                    <h3>جزئیات خرید</h3>
                                    <h5 class="ms-auto theme-color">({{ count($order->items()) }} آیتم)</h5>
                                </div>

                                <ul class="summery-contain">
                                    <li>
                                        <h4>جمع خرید</h4>
                                        <h4 class="price">{{ priceFormat($order->amount) }}</h4>
                                    </li>

                                    <li>
                                        <h4>سود شما</h4>
                                        <h4 class="price theme-color">0 تومان</h4>
                                    </li>

                                    <li>
                                        <h4>کد تخفیف</h4>
                                        <h4 class="price text-danger">0 تومان</h4>
                                    </li>
                                </ul>

                                <ul class="summery-total">
                                    <li class="list-total">
                                        <h4>جمع کل (تومان)</h4>
                                        <h4 class="price">{{ priceFormat($order->amount) }}</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        @if($order->isPaid())

                        <div class="col-lg-12 col-sm-6">
                            <div class="summery-box">
                                <div class="summery-header d-block">
                                    <h3>آدرس تحویل</h3>
                                </div>

                                <ul class="summery-contain pb-0 border-bottom-0">
                                    <li class="d-block">
                                        <h4>{{ $order->shipment()?->address }}</h4>
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection