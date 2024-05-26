@extends('admin.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <!-- chart caard section start -->
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">درامد کل</span>
                                    <h4 class="mb-0 counter">580 تومان
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
                                    <h4 class="mb-0 counter">9856
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
                                    <h4 class="mb-0 counter">893
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
                                    <h4 class="mb-0 counter">4.6k
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

                <div class="col-12">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 pb-1">
                            <div class="card-header-title p-0">
                                <h4>دسته ها</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="category-slider no-arrow">
                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/vegetable.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>سبزیجات و میوه جات</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/cup.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>نوشیدنی ها</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/meats.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>گوشت و غذاهای دریایی</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/breakfast.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>صبحانه</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/frozen.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>غذای یخ زده</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/milk.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>شیر و لبنیات</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/pet.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>مواد غذایی حیوان خانگی</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/vegetable.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>سبزیجات و میوه جات</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/cup.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>نوشیدنی ها</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/meats.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>گوشت و غذاهای دریایی</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/breakfast.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>صبحانه</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/frozen.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>غذای یخ زده</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/milk.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>شیر و لبنیات</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/pet.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>غذای حیوانات</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart card section End -->


                <!-- Earning chart star-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 pb-1">
                            <div class="card-header-title">
                                <h4>گزارش درآمد</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="report-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Earning chart  end-->


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
                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-image">
                                                        <img src="assets/images/product/1.png"
                                                             class="img-fluid" alt="Product">
                                                    </div>
                                                    <div class="product-name">
                                                        <h5>بیسکویت عطا</h5>
                                                        <h6>26 اردیبهشت 1402</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>29.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>سفارشات</h6>
                                                    <h5>62</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>موجودی</h6>
                                                    <h5>510</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>جمع کل</h6>
                                                    <h5>17.850 تومان</h5>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-image">
                                                        <img src="assets/images/product/2.png"
                                                             class="img-fluid" alt="Product">
                                                    </div>
                                                    <div class="product-name">
                                                        <h5>دلستر</h5>
                                                        <h6>26 اردیبهشت 1402</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>29.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>سفارشات</h6>
                                                    <h5>62</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>موجودی</h6>
                                                    <h5>510</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>جمع کل</h6>
                                                    <h5>17.850 تومان</h5>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-image">
                                                        <img src="assets/images/product/3.png"
                                                             class="img-fluid" alt="Product">
                                                    </div>
                                                    <div class="product-name">
                                                        <h5>کیک</h5>
                                                        <h6>26 اردیبهشت 1402</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>29.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>سفارشات</h6>
                                                    <h5>62</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>موجودی</h6>
                                                    <h5>510</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>جمع کل</h6>
                                                    <h5>17.850 تومان</h5>
                                                </div>
                                            </td>
                                        </tr>
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
                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-name">
                                                        <h5>بیسکویت عطا</h5>
                                                        <h6>#64548</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>تاریخ انتشار</h6>
                                                    <h5>5 اردیبهشت 1400</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>250.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت سفارش</h6>
                                                    <h5>تکمیل شده</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت پرداخت</h6>
                                                    <h5 class="text-danger">پرداخت نشده</h5>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-name">
                                                        <h5>دلستر سیب</h5>
                                                        <h6>#64546</h6>
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>تاریخ انتشار</h6>
                                                    <h5>5 اردیبهشت 1400</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>250.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت سفارش</h6>
                                                    <h5>تکمیل شده</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت پرداخت</h6>
                                                    <h5 class="theme-color">پرداخت شده</h5>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-name">
                                                        <h5>دلستر لیمو</h5>
                                                        <h6>#645465</h6>
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>تاریخ انتشار</h6>
                                                    <h5>5 اردیبهشت 1400</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>250.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت سفارش</h6>
                                                    <h5>تکمیل شده</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت پرداخت</h6>
                                                    <h5 class="theme-color">پرداخت شده</h5>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="best-product-box">
                                                    <div class="product-name">
                                                        <h5>سی انرژی</h5>
                                                        <h6>#65648</h6>
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>تاریخ انتشار</h6>
                                                    <h5>5 اردیبهشت 1400</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>قیمت</h6>
                                                    <h5>250.000 تومان</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت سفارش</h6>
                                                    <h5>تکمیل شده</h5>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="product-detail-box">
                                                    <h6>وضعیت پرداخت</h6>
                                                    <h5 class="theme-color">پرداخت شده</h5>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent orders end-->

                <!-- Earning chart star-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 mb-0">
                            <div class="card-header-title">
                                <h4>درآمد</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="bar-chart-earning"></div>
                        </div>
                    </div>
                </div>
                <!-- Earning chart end-->


                <!-- Transactions start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0">
                            <div class="card-header-title">
                                <h4>میانگین حساب</h4>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div>
                                <div class="table-responsive">
                                    <table class="user-table transactions-table table border-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="transactions-icon">
                                                    <i class="ri-shield-line"></i>
                                                </div>
                                                <div class="transactions-name">
                                                    <h6>کیف پول</h6>
                                                    <p>استارباکس</p>
                                                </div>
                                            </td>

                                            <td class="lost">740.000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td class="td-color-1">
                                                <div class="transactions-icon">
                                                    <i class="ri-check-line"></i>
                                                </div>
                                                <div class="transactions-name">
                                                    <h6>حواله بانکی</h6>
                                                    <p>بانک ملی</p>
                                                </div>
                                            </td>

                                            <td class="success">125.000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td class="td-color-2">
                                                <div class="transactions-icon">
                                                    <i class="ri-exchange-dollar-line"></i>
                                                </div>
                                                <div class="transactions-name">
                                                    <h6>پی پل</h6>
                                                    <p>حساب آنلاین</p>
                                                </div>
                                            </td>

                                            <td class="lost">50.000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td class="td-color-3">
                                                <div class="transactions-icon">
                                                    <i class="ri-bank-card-line"></i>
                                                </div>
                                                <div class="transactions-name">
                                                    <h6>مسترکارت</h6>
                                                    <p>حساب شما</p>
                                                </div>
                                            </td>

                                            <td class="lost">40.000 تومان</td>
                                        </tr>
                                        <tr>
                                            <td class="td-color-4 pb-0">
                                                <div class="transactions-icon">
                                                    <i class="ri-bar-chart-grouped-line"></i>
                                                </div>
                                                <div class="transactions-name">
                                                    <h6>حواله</h6>
                                                    <p>بازپرداخت</p>
                                                </div>
                                            </td>

                                            <td class="success pb-0">90.000 تومان</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Transactions end-->

                <!-- visitors chart start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="h-100">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="card-header-title">
                                        <h4>بازدید کنندگان</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="pie-chart">
                                    <div id="pie-chart-visitors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- visitors chart end-->


                <!-- To Do List start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0">
                            <div class="card-header-title">
                                <h4></h4>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <ul class="to-do-list">
                                <li class="to-do-item">
                                    <div class="form-check user-checkbox">
                                        <input class="checkbox_animated check-it" type="checkbox" value=""
                                               id="flexCheckDefault">
                                    </div>
                                    <div class="to-do-list-name">
                                        <strong>بچه ها را از مدرسه ببرید</strong>
                                        <p>8 ساعت</p>
                                    </div>
                                </li>
                                <li class="to-do-item">
                                    <div class="form-check user-checkbox">
                                        <input class="checkbox_animated check-it" type="checkbox" value=""
                                               id="flexCheckDefault1">
                                    </div>
                                    <div class="to-do-list-name">
                                        <strong>ارائه خدمات فروش</strong>
                                        <p>8 ساعت</p>
                                    </div>
                                </li>
                                <li class="to-do-item">
                                    <div class="form-check user-checkbox">
                                        <input class="checkbox_animated check-it" type="checkbox" value=""
                                               id="flexCheckDefault2">
                                    </div>
                                    <div class="to-do-list-name">
                                        <strong>ایجاد فاکتور</strong>
                                        <p>8 ساعت</p>
                                    </div>
                                </li>
                                <li class="to-do-item">
                                    <div class="form-check user-checkbox">
                                        <input class="checkbox_animated check-it" type="checkbox" value=""
                                               id="flexCheckDefault3">
                                    </div>
                                    <div class="to-do-list-name">
                                        <strong>حساب کاربری جدید</strong>
                                        <p>8 ساعت</p>
                                    </div>
                                </li>

                                <li class="to-do-item">
                                    <form class="row g-2">
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="افزودن یادداشت جدید">
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary w-100 h-100">افزودن</button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- To Do List end-->


            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">راست چین شده توسط : ایلان ماسک</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End-->
    </div>
@endsection