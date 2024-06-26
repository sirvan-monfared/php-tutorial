@extends('dashboard.layouts.main')

@section('dashboard-content')

    @include('partials._alerts')

    <div class="title">
        <h2>تغییر رمز عبور</h2>
        <span class="title-leaf">
            <svg class="icon-width bg-gray">
                <use xlink:href="{{ asset('front/svg/leaf.svg#leaf') }}"></use>
            </svg>
        </span>
    </div>

    <div class="row g-4">
        <form method="POST" action="{{ route('dashboard.password.update') }}">
            @method('PUT')
            @include('partials._csrf')

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="password" name="old_password" id="old_password" value="{{ old('old_password') }}" class="form-control">
                    <label for="old_password">رمزعبور فعلی</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['old_password'] ?? null  }}</div>
            </div>

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control">
                    <label for="password">رمزعبور جدید</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['password'] ?? null  }}</div>
            </div>

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control">
                    <label for="password_confirmation">تکرار رمز عبور</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['password_confirmation'] ?? null  }}</div>
            </div>


            <div class="col-xxl-12 d-flex justify-content-end">
                <button type="submit" class="btn theme-bg-color btn-md fw-bold text-light">ذخیره تغییرات</button>
            </div>
        </form>
    </div>
@endsection