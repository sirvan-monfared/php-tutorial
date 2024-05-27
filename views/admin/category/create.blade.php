@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>دسته بندی جدید</h5>
                            </div>

                            @include('partials._alerts')


                            <form method="POST" action="{{ route('admin.category.store') }}" class="theme-form theme-form-2 mega-form">
                                @include('partials._csrf')

                                <div class="mb-4 row align-items-center">
                                    <label for="name" class="form-label-title col-sm-3 mb-0 required">نام دسته</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="نام دسته بندی جدید">
                                        <div class="help-block text-danger fs-7 ">{{ $errors['name'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label for="slug" class="form-label-title col-sm-3 mb-0 required">نامک</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="slug" id="slug" value="{{ old('slug') }}" placeholder="نام دسته بندی جدید">
                                        <div class="help-block text-danger fs-7 ">{{ $errors['slug'] ?? null  }}</div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">ذخیره</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection