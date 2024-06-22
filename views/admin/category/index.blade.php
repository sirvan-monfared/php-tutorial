@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">

            @include('partials._alerts')

            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>لیست دسته ها</h5>
                        <form class="d-inline-flex">
                            <a href="{{ route('admin.category.create') }}" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus"></i>افزودن دسته جدید
                            </a>
                        </form>
                    </div>

                    <div class="table-responsive table-product">
                        <table class="table all-package theme-table" id="table_id">
                            <thead>
                            <tr>
                                <th>تصویر</th>
                                <th>نام دسته</th>
                                <th>نامک</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <div class="table-image">
                                            <img src="{{ asset('admin/images/users/1.jpg') }}" class="img-fluid"
                                                 alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="user-name">
                                            <span>{{ $category->name }}</span>
                                        </div>
                                    </td>

                                    <td>{{ $category->slug }}</td>

                                    <td>
                                        <ul>
                                            <li>
                                                <a href="{{ $category->viewLink() }}">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ $category->editLink() }}">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <form method="POST" class="delete-form" action="{{ route('admin.category.destroy', ['id' => $category->id]) }}">
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
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        const forms = document.querySelectorAll('.delete-form');

        forms.forEach(function(form) {
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