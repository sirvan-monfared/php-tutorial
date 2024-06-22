@extends('dashboard.layouts.main')

@section('dashboard-content')
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg p-0">
            <div class="row">
                @include('partials._alerts')

                @include('dashboard.order._payment_success')
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <div class="order-detail">
        @include('admin.order._shipment_tracking')
    </div>

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg p-0">
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