@extends('front.layouts.main')

@section('content')
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>عضویت</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">عضویت</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="log-in-section section-b-space">
        <div class="container-fluid-lg w-100">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{ asset('front/images/inner-page/sign-up.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-5 col-lg-6 col-sm-8 mx-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>به لاراکامرس خوش آمدید</h3>
                            <h4>ایجاد حساب کاربری</h4>
                        </div>

                        <div class="input-box">
                            <form method="POST" action="{{ route('auth.register.store') }}" class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                                               placeholder="شماره تلفن">
                                        <label for="phone">شماره تلفن</label>
                                        <div class="help-block text-danger fs-7 ">{{ $errors['phone'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="رمزعبور خود را وارد کنید">
                                        <label for="password">رمزعبور</label>
                                        <div class="help-block text-danger fs-7 ">{{ $errors['password'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating">
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                                               placeholder="تکرار رمزعبور را وارد کنید">
                                        <label for="password_confirmation">تکرار رمز عبور</label>
                                        <div class="help-block text-danger fs-7 ">{{ $errors['password_confirmation'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100" type="submit">ثبت نام</button>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6></h6>
                        </div>

                        <div class="sign-up-box">
                            <h4>حساب کاربری دارید ؟</h4>
                            <a href="{{ route('auth.login') }}">وارد شوید</a>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-6 col-lg-6"></div>
            </div>
        </div>
    </section>
@endsection