@extends('admin.layouts.table', [
    'title' => 'مدیریت سفارشات',
    'create_route' => route('admin.order.create')
])

@section('table')

    <table class="table all-package theme-table" id="table_id">
        <thead>
            <tr>
                <td>شناسه</td>
                <th>قیمت</th>
                <th>تاریخ ثبت</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    <div class="user-name">
                        <span>{{ priceFormat($order->amount) }}</span>
                    </div>
                </td>

                <td>{{ shamsi($order->created_at, 'Y/m/d - H:i')}}</td>

                <td>{!! $order->status() !!}</td>

                <td>
                    <ul>
                        <li>
                            <a href="{{ route('admin.order.show', ['id' => $order->id]) }}">
                                <i class="ri-eye-line"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ $order->editLink() }}">
                                <i class="ri-pencil-line"></i>
                            </a>
                        </li>

                        <li>
                            <form method="POST" class="delete-form" action="{{ route('admin.order.destroy', ['id' => $order->id]) }}">
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

