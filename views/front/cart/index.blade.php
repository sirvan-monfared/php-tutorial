@extends('front.layouts.main')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>سبد خرید</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">سبد خرید</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container-fluid-lg">

            @include('partials._alerts')

            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>

                                @if(! $items->count())
                                    <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <h3>هیچ آیتمی در سبد خرید شما وجود ندارد</h3>
                                            </div>
                                        </td>
                                    </tr>
                                @endif

                                @foreach($items as $item)
                                    <tr class="product-box-contain">
                                        <td class="product-detail">
                                            <div class="product border-0">
                                                <a href="{{ route('products.show', ['id' => $item['id']]) }}"
                                                   class="product-image">
                                                    <img src="{{ asset('front/images/vegetable/product/1.png') }}"
                                                         class="img-fluid blur-up lazyload" alt="{{ $item['name'] }}">
                                                </a>
                                                <div class="product-detail">
                                                    <ul>
                                                        <li class="name">
                                                            <a href="{{ route('products.show', ['id' => $item['id']]) }}">{{ str_limit($item['name'], 25) }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="price">
                                            <h4 class="table-title text-content">قیمت</h4>
                                            <h5>{{ priceFormat($item['price']) }}
                                                <del class="text-content">45.680</del>
                                            </h5>
                                            <h6 class="theme-color">سود شما : 20.680</h6>
                                        </td>

                                        <td class="quantity">
                                            <h4 class="table-title text-content">تعداد</h4>
                                            <div class="quantity-price">
                                                <div class="cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn qty-left-minus"
                                                                data-type="minus" data-field="">
                                                            <i class="fa fa-minus ms-0"></i>
                                                        </button>
                                                        <input class="form-control input-number qty-input" type="text"
                                                               name="quantity" value="{{ $item['qty'] }}">
                                                        <button type="button" class="btn qty-right-plus"
                                                                data-type="plus" data-field="">
                                                            <i class="fa fa-plus ms-0"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="subtotal">
                                            <h4 class="table-title text-content">جمع کل</h4>
                                            <h5>{{ priceFormat($item['qty'] * $item['price']) }}</h5>
                                        </td>

                                        <td class="save-remove">
                                            <h4 class="table-title text-content">عملیات</h4>
                                            <form action="{{ route('cart.delete', ['id' => $item['id']]) }}" method="POST">
                                                @method('DELETE')
                                                <button class="remove close_button">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box p-sticky">
                        <div class="summery-header">
                            <h3>صورت حساب</h3>
                        </div>

                        <div class="summery-contain">
                            <div class="coupon-cart">
                                <h6 class="text-content mb-2">کد تخفیف</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="کد تخفیف را وارد کنید">
                                    <button class="btn-apply">ثبت</button>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <h4>جمع کل</h4>
                                    <h4 class="price">{{ priceFormat(cart()->sum()) }}</h4>
                                </li>

                                <li>
                                    <h4>کد تخفیف</h4>
                                    <h4 class="price">(-) 0.00</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>هزینه پست</h4>
                                    <h4 class="price text-end">0 تومان</h4>
                                </li>
                            </ul>
                        </div>

                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>جمع نهایی</h4>
                                <h4 class="price theme-color">{{ priceFormat(cart()->sum()) }} </h4>
                            </li>
                        </ul>

                        <div class="button-group cart-button">
                            <ul>
                                <li>
                                    <a href="{{ route('checkout.pay') }}"
                                       class="btn btn-animation proceed-btn fw-bold">پرداخت
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('home') }}"
                                       class="btn btn-light shopping-button text-dark">
                                        <i class="fa-solid fa-arrow-right-long"></i>بازگشت به فروشگاه
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection