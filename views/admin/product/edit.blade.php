@extends('admin.layouts.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">

                @include('partials._alerts')

                <div class="col-sm-8 m-auto">
                    <form action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                        @method('PUT')
                        @include('partials._csrf')

                        @include('admin.product._form', [
                            'title' => 'ویرایش محصول'
                        ])

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('admin/js/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/js/ckeditor-custom.js') }}"></script>

    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection