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
                    <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="POST" class="theme-form theme-form-2 mega-form">

                        @include('partials._csrf')

                        @include('admin.product._form', [
                            'title' => 'ساخت محصول جدید'
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

@section('js')
    <script>
        const custom_fields_placeholder = document.getElementById('custom-fields-placeholder');
        const template = document.getElementById('custom-fields-template');
        const add_custom_field_button = document.getElementById('add-custom-fields');

        add_custom_field_button.addEventListener('click', () => {
            custom_fields_placeholder.append(document.importNode(template.content, true));
        })
    </script>
@endsection