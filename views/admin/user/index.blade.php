@extends('admin.layouts.table', [
    'title' => 'مدیریت کاربران',
    'create_route' => route('admin.user.create')
])

@section('table')

    <table class="table all-package theme-table" id="table_id">
        <thead>
        <tr>
            <td>شناسه</td>
            <th>تصویر</th>
            <th>نام و نام خانوادگی</th>
            <th>موبایل</th>
            <th>دسترسی</th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>
                    <div class="table-image">
                        <img src="{{ asset('admin/images/users/1.jpg') }}" class="img-fluid"
                             alt="">
                    </div>
                </td>

                <td>
                    <div class="user-name">
                        <span>{{ $user->name . ' ' . $user->last_name }}</span>
                    </div>
                </td>

                <td>{{ $user->phone }}</td>

                <td>{{ $user->isAdmin() ? 'مدیر' : 'کاربر' }}</td>

                <td>
                    <ul>
                        <li>
                            <a href="order-detail.html">
                                <i class="ri-eye-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ $user->editLink() }}">
                                <i class="ri-pencil-line"></i>
                            </a>
                        </li>

                        <li>
                            <form method="POST" class="delete-form"
                                  action="{{ route('admin.user.destroy', ['id' => $user->id]) }}">
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

@endsection

