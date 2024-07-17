@extends('admin.layouts.table', [
    'title' => 'مدیریت سفارشات',
    'create_route' => route('admin.order.create')
])

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('table')

     @include('admin.order._filters')

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

                <td>
                    <span class="badge badge-{{ $order->status()->cssClass() }}">{{ $order->status()->translate() }}</span>
                </td>

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

    {!! $paginator->render() !!}

@endsection

@section('scripts')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection