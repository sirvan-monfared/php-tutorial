@extends('front.layouts.main')

@section('content')
    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2 class="mb-2">ورود به حساب کاربری</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">ورود به حساب کاربری</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section background-image-2 section-b-space">
        <div class="container-fluid-lg w-100">

            @include('partials._alerts')

            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('front/images/inner-page/log-in.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h4>ورود به حساب کاربری</h4>
                        </div>

                        <div class="input-box">
                            <form action="{{ route('auth.login.store') }}" method="POST" class="row g-4">
                                @include('partials._csrf')

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}"
                                               placeholder="آدرس ایمیل خود را وارد کنید">
                                        <label for="phone">شماره تلفن</label>
                                        <div class="help-block text-danger fs-7 ">{{ $errors['phone'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="رمز عبور خود را وارد کنید">
                                        <label for="password">رمز عبور</label>
                                        <div class="help-block text-danger fs-7 ">{{ $errors['password'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box mb-4">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox" name="remember"
                                                   id="remember" value="1">
                                            <label class="form-check-label" for="remember">من را به خاطر
                                                بسپار</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-animation w-100 justify-content-center"
                                                type="submit">ورود
                                        </button>
                                    </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>
                                <a href="#" class="forgot-password">رمز عبور خود را فراموش کردم</a>
                            </h6>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>حساب کاربری ندارید ؟</h4>
                            <a href="{{ route('auth.register') }}">ثبت نام کنید</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- log in section end -->
@endsection