@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>لیست کاربران</h5>
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
                                                <a href="order-detail.html">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ $category->editLink() }}">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#exampleModalToggle">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
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