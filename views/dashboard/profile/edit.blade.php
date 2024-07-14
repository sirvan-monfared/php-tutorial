@extends('dashboard.layouts.main')

@section('dashboard-content')

    @include('partials._alerts')

    <div class="title">
        <h2>تغییر اطلاعات پروفایل</h2>
        <span class="title-leaf">
            <svg class="icon-width bg-gray">
                <use xlink:href="{{ asset('front/svg/leaf.svg#leaf') }}"></use>
            </svg>
        </span>
    </div>

    <div class="row g-4">
        <form method="POST" action="{{ route('dashboard.profile.update') }}">
            @method('PUT')
            @include('partials._csrf')

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control">
                    <label for="name">نام</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['name'] ?? null  }}</div>
            </div>

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control">
                    <label for="last_name">نام خانوادگی</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['last_name'] ?? null  }}</div>
            </div>

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control">
                    <label for="email">آدرس ایمیل</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['email'] ?? null  }}</div>
            </div>

            <div class="col-xxl-12 mb-4">
                <div class="form-floating theme-form-floating">
                    <textarea name="address" id="address" class="form-control" rows="20" style="height: 100px">{{ old('address', $user->address) }}</textarea>
                    <label for="address">آدرس ارسال سفارشات</label>
                </div>
                <div class="help-block text-danger fs-7 ">{{ $errors['address'] ?? null  }}</div>
            </div>


            <div class="col-xxl-12 d-flex justify-content-end">
                <button type="submit" class="btn theme-bg-color btn-md fw-bold text-light">ذخیره تغییرات</button>
            </div>
        </form>
    </div>
@endsection