@extends('admin.layouts.main')

@section('css')
    <link rel="stylesheet" href="<?= asset('admin/css/vendors/slick.css') ?>">
@endsection

@section('content')
    <div class="row">
        <!-- chart caard section start -->
        <div class="col-sm-6 col-xxl-3 col-lg-6">
            <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                <div class="custome-1-bg b-r-4 card-body">
                    <div class="media align-items-center static-top-widget">
                        <div class="media-body p-0">
                            <span class="m-0">درامد کل</span>
                            <h4 class="mb-0 counter">{{ number_format($totalIncome) }} <small>تومان</small>
                                <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                            </h4>
                        </div>
                        <div class="align-self-center text-center">
                            <i class="ri-database-2-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xxl-3 col-lg-6">
            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                <div class="custome-2-bg b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="media-body p-0">
                            <span class="m-0">کل سفارشات</span>
                            <h4 class="mb-0 counter">{{ number_format($totalOrders) }}
                                <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                            </h4>
                        </div>
                        <div class="align-self-center text-center">
                            <i class="ri-shopping-bag-3-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xxl-3 col-lg-6">
            <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                <div class="custome-3-bg b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="media-body p-0">
                            <span class="m-0">مجموع محصولات</span>
                            <h4 class="mb-0 counter"> {{ number_format($totalProducts) }}
                                <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                    افزودن محصول جدید</a>
                            </h4>
                        </div>

                        <div class="align-self-center text-center">
                            <i class="ri-chat-3-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xxl-3 col-lg-6">
            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                <div class="custome-4-bg b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="media-body p-0">
                            <span class="m-0">کاربران شما</span>
                            <h4 class="mb-0 counter"> {{ number_format($totalUsers) }}
                                <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                            </h4>
                        </div>

                        <div class="align-self-center text-center">
                            <i class="ri-user-add-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Best Selling Product Start -->
        <div class="col-xl-6 col-md-12">
            <div class="card o-hidden card-hover">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <div class="card-header-title">
                        <h4>پرفروش ترین محصول</h4>
                    </div>

                    <div class="best-selling-box d-sm-flex d-none">
                        <span>براساس :</span>
                        <div class="dropdown">
                            <button class="btn p-0 dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    data-bs-auto-close="true">تاریخ
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">قیمت</a></li>
                                <li><a class="dropdown-item" href="#">تعداد</a></li>
                                <li><a class="dropdown-item" href="#">بروزرسانی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div>
                        <div class="table-responsive">
                            <table class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                <tbody>
                                @foreach($mostPurchased as $orderItem)
                                    <tr>
                                        <td>
                                            <div class="best-product-box">
                                                <div class="product-image">
                                                    <img src="{{ $orderItem->product()->featuredImageOrDefault() }}"
                                                         class="img-fluid" alt="Product">
                                                </div>
                                                <div class="product-name">
                                                    <h5>{{ $orderItem->product()->name }}</h5>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-detail-box">
                                                <h6>قیمت</h6>
                                                <h5>{{ $orderItem->product()->showPrice() }}</h5>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-detail-box">
                                                <h6>سفارشات</h6>
                                                <h5>{{ $orderItem->sum }}</h5>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-detail-box">
                                                <h6>موجودی</h6>
                                                <h5>{{ $orderItem->product()->stock }}</h5>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="product-detail-box">
                                                <h6>جمع کل</h6>
                                                <h5>{{ priceFormat($orderItem->total_price) }}</h5>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Selling Product End -->


        <!-- Recent orders start-->
        <div class="col-xl-6">
            <div class="card o-hidden card-hover">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <div class="card-header-title">
                        <h4>سفارشات اخیر</h4>
                    </div>

                    <div class="best-selling-box d-sm-flex d-none">
                        <span>بر اساس :</span>
                        <div class="dropdown">
                            <button class="btn p-0 dropdown-toggle" type="button"
                                    id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                    data-bs-auto-close="true">تاریخ
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#">قیمت</a></li>
                                <li><a class="dropdown-item" href="#">تعداد</a></li>
                                <li><a class="dropdown-item" href="#">بروزرسانی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div>
                        <div class="table-responsive">
                            <table class="best-selling-table table border-0">
                                <tbody>
                                    @foreach($recentOrderItems as $orderItem)
                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-name">
                                                        <h5>{{ $orderItem->product()->name }}</h5>
                                                        <h6>#{{ $orderItem->product()->id }}</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>تاریخ ثبت سفارش</h6>
                                                    <h5>{{ shamsi($orderItem->order()->create_at) }}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>{{ priceFormat($orderItem->unit_price) }}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت پرداخت</h6>
                                                    <h5>{!! $orderItem->order()->status() !!}</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت سفارش</h6>
                                                    <h5 class="text-danger">{{ $orderItem->order()->shipment()?->status() }}</h5>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom-slick.js') }}"></script>
@endsection