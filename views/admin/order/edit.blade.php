@extends('admin.layouts.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card">
            @include('partials._alerts')
            <div class="card-body">
                <form method="POST" action="{{ route('admin.order.update', ['id' => $order->id]) }}">
                    @method('PUT')
                    @include('partials._csrf')

                    <div class="card-header-2">
                        ویرایش سفارش
                    </div>

                    <div class="mb-4 row align-items-center">
                        <label class="col-sm-3 col-form-label form-label-title required" for="status">وضعیت سفارش</label>
                        <div class="col-sm-9">
                            <select class="js-example-basic-single w-100" name="status" id="status">
                                <option value="">انتخاب کنید</option>
                                <option value="{{ \App\Models\Order::NOT_PAID }}" @selected($order->status === \App\Models\Order::NOT_PAID)>پرداخت نشده</option>
                                <option value="{{ \App\Models\Order::PAID }}" @selected($order->status === \App\Models\Order::PAID)>پرداخت شده</option>
                                <option value="{{ \App\Models\Order::FAILED }}" @selected($order->status === \App\Models\Order::FAILED)>پرداخت ناموفق</option>
                            </select>
                            <div class="help-block text-danger fs-7 ">{{ $errors['status'] ?? null  }}</div>
                        </div>
                    </div>

                    @component('admin.components.input', ['name' => 'payment_order_id', 'label' => 'شناسه پرداخت'])
                        {{ old('payment_order_id', $order->payment_order_id) }}
                    @endcomponent

                    @component('admin.components.input', ['name' => 'track_id', 'label' => 'کد پیگیری'])
                        {{ old('track_id', $order->track_id) }}
                    @endcomponent

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">ذخیره</button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    @include('admin.order._order_details')
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection