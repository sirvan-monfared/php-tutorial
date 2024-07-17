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
                    @foreach(\App\Enums\OrderStatus::cases() as $status)
                        <option value="{{ $status->value }}" @selected($order->status === $status->value)>{{ $status->translate() }}</option>
                    @endforeach
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