@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">

            @include('partials._alerts')

            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>لیست محصولات</h5>
                        <form class="d-inline-flex">
                            <a href="{{ route('admin.product.create') }}"
                               class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus"></i>افزودن محصول جدید
                            </a>
                        </form>
                    </div>

                    <div class="table-responsive table-product">
                        <table class="table all-package theme-table" id="table_id">
                            <thead>
                            <tr>
                                <td>شناسه</td>
                                <th>تصویر</th>
                                <th>نام محصول</th>
                                <th>قیمت</th>
                                <th>تعداد در انبار</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        <div class="table-image">
                                            <img src="{{ $product->featuredImageOrDefault() }}" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>{{ str_limit($product->name, 30) }}</span>
                                        </div>
                                    </td>

                                    <td>{{ $product->showPrice() }}</td>

                                    <td>{{ $product->stock }}</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ $product->editLink() }}">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <form method="POST" class="delete-form"
                                                      action="{{ route('admin.product.destroy', ['id' => $product->id]) }}">
                                                    @method('DELETE')
                                                    @include('partials._csrf')

                                                    <button type="submit" class="btn-delete">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                @if($paginator->hasPrevPage())
                    <a class="btn btn-primary" href="{{ $paginator->prevUrl() }}">صفحه قبل</a>
                @endif
                @if($paginator->hasNextPage())
                    <a class="btn btn-primary" href="{{ $paginator->nextUrl() }}">صفحه بعد</a>
                @endif
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        const forms = document.querySelectorAll('.delete-form');

        forms.forEach(function (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const result = confirm("آیا از حذف این آیتم اطمینان دارید؟");

                if (result) {
                    form.submit();
                }
            })
        })
    </script>
@endsection