@extends('admin.layouts.table', [
    'page_title' => 'مدیریت محصولات',
    'title' => 'مدیریت محصولات',
    'create_route' => route('admin.product.create')
])

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('table')
    @include('admin.product._filters')

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

    {!! $paginator->render() !!}

@endsection

@section('scripts')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection