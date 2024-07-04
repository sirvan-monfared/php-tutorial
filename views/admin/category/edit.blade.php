@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    @include('partials._alerts')

                    <form method="POST" action="{{ route('admin.category.update', ['id' => $category->id]) }}"
                          enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">

                        @method('PUT')
                        @include('partials._csrf')

                        @include('admin.category._form',[
                            'title' => 'ویرایش دسته'
                        ])

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection