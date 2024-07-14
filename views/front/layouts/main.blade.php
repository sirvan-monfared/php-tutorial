<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $page_description ?? 'لارااکامرس یکگ فروشگاه ساخته شده با php است که در دوره php مدرسن سایت لاراپلاس توسعه داده شده است' }}">
    <meta name="keywords" content="{{ $page_keywords ?? 'فروشگاه,طراحی سایت,آموزش برنامه نویسی' }}">
    <meta name="author" content="https://laraplus.ir">
    <link rel="icon" href="{{ asset('front/images/logo/2.png') }}" type="image/x-icon">
    <title>{{ $page_title ?? 'لاراکامرس - فروشگاهی برای همه چیز' }}</title>

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('front/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font/iranyekan.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font/aviny.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/rtl.css') }}">
</head>

<body class="theme-color-1" style="--theme-color: #0da487; --theme-color-rgb: #0da487">

<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header class="pb-md-4 pb-0">
    <div class="header-top bg-dark">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="iconly-Location icli text-white"></i>
                        <span class="text-white">تهران بلوار آزادی</span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6>
                                        60 درصد تخفیف روی همه محصولات تا آخر هفته
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </div>

    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a href="{{ route('home') }}" class="web-logo nav-logo">
                            <img src="{{ asset('front/images/logo/2.png') }}" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="middle-box">
                            <form method="GET" action="{{ route('search') }}">
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="search" name="keyword" class="form-control"
                                               placeholder="جستجو برای ..." value="{{ $_GET['keyword'] ?? null }}">
                                        <button type="submit" class="btn search-button-2" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                    <input type="text" class="form-control search-type" placeholder="جستجو کنید ...">
                                    <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a href="#" class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="phone-call"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>پشتیبانی 24 ساعته</h6>
                                            <h5>0123-456-7891</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <a href="#" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    @include('front.layouts._cart_widget')
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        @if(auth()->check())
                                            <div class="delivery-detail">
                                                <h6>سلام,</h6>
                                                <h5>{{ auth()->user()->fullName() }}</h5>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            @if (! auth()->check())
                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="{{ route('auth.login') }}">ورود</a>
                                                </li>

                                                <li class="product-box-contain">
                                                    <a href="{{ route('auth.register') }}">عضویت</a>
                                                </li>
                                            @endif
                                            @if (auth()->check())

                                                <li class="product-box-contain">
                                                    <i></i>
                                                    <a href="{{ route('dashboard.order.index') }}">سفارش های من</a>
                                                </li>

                                                <form method="POST" action="{{ route('auth.logout') }}">
                                                    @include('partials._csrf')
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-default">خروج</button>
                                                </form>
                                            @endif
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left">
                        <button class="dropdown-category dropdown-category-2">
                            <i data-feather="align-left"></i>
                            <span>دسته بندی ها</span>
                        </button>

                        <div class="category-dropdown">
                            <div class="category-title">
                                <h5>دسته بندی</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            @include('front.layouts._top_categories')
                        </div>
                    </div>

                    <div class="header-nav-middle">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>منو</h5>
                                    <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('home') }}">خانه</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('home') }}">تخفیف ها و پیشنهادها</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="{{ route('home') }}">سوالی دارید؟</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="https://laraplus.ir" target="_blank">لاراپلاس</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-right">
                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                            <i data-feather="zap"></i>
                            <span>پرفروش ترین ها</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')

<!-- Footer Section Start -->
<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/product.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>محصولات تازه و اورگانیک</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/delivery.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>ارسال رایگان برای خرید بالای 500 تومان</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/discount.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>تخفیف های ویژه روزانه</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/market.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>بهترین قیمت در سراسر وب</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="index.html">
                                <img src="{{ asset('front/images/logo/1.png') }}" class="blur-up lazyload" alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="javascript:void(0)">تهران - برج میلاد</a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="javascript:void(0)">support@test.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>دسته بندی</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            @foreach((new \App\Models\Category)->all(6) as $category)
                                <li>
                                    <a href="{{ $category->viewLink() }}" class="text-content">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>دسترسی سریع</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="text-content">خانه</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">فروشگاه</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">درباره ما</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">وبلاگ</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>لینک های مهم</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="#" class="text-content">خرید راحت</a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard.order.index') }}" class="text-content">حساب کاربری</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">پیگیری سفارش</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">لیست علاقه‌مندی</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">جستجو</a>
                            </li>
                            <li>
                                <a href="#" class="text-content">سوالات متداول</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>تماس با ما</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">پشتیبانی 24 ساعته :</h6>
                                        <h5>0912.000.0000</h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">آدرس ایمیل :</h6>
                                        <h5>mail@site.com</h5>
                                    </div>
                                </div>
                            </li>

                            <li class="social-app mb-0">
                                <h5 class="mb-2 text-content">دانلود اپلیکیشن :</h5>
                                <ul>
                                    <li class="mb-0">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('front/images/playstore.svg') }}" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('front/images/appstore.svg') }}" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>

<!-- jquery ui-->
<script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>

<!-- sidebar open js -->
<script src="{{ asset('front/js/filter-sidebar.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('front/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap/popper.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('front/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('front/js/feather/feather-icon.js') }}"></script>

<!-- Lazyload Js -->
<script src="{{ asset('front/js/lazysizes.min.js') }}"></script>

<!-- Slick js-->
<script src="{{ asset('front/js/slick/slick.js') }}"></script>
<script src="{{ asset('front/js/slick/custom_slick.js') }}"></script>
<script src="{{ asset('front/js/bootstrap/bootstrap-notify.min.js') }}"></script>

<!-- Auto Height Js -->
<script src="{{ asset('front/js/auto-height.js') }}"></script>

<!-- Fly Cart Js -->
<script src="{{ asset('front/js/fly-cart.js') }}"></script>

<!-- Quantity js -->
<script src="{{ asset('front/js/quantity-2.js') }}"></script>

<!-- WOW js -->
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/custom-wow.js') }}"></script>

<!-- script js -->
<script src="{{ asset('front/js/script.js') }}"></script>

<!-- theme setting js -->
<script src="{{ asset('front/js/theme-setting.js') }}"></script>
</body>


</html>