<div class="card-body">
    <form method="POST" action="{{ route('admin.order.update_shipment', ['id' => $order->id]) }}">
        @method('PUT')
        @include('partials._csrf')

        <div class="card-header-2">
            ویرایش وضعیت ارسال سفارش
        </div>

        <div class="mb-4 row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title required" for="shipment_status">وضعیت ارسال</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="status" id="shipment_status">
                    <option value="">انتخاب کنید</option>
                    <option value="{{ \App\Models\Shipment::PROCESSING }}" @selected($order->shipment()?->status === \App\Models\Shipment::PROCESSING)>
                        پردازش سفارش
                    </option>
                    <option value="{{ \App\Models\Shipment::INVOICE }}" @selected($order->shipment()?->status === \App\Models\Shipment::INVOICE)>
                       صدور فاکتور
                    </option>
                    <option value="{{ \App\Models\Shipment::PREPARATION }}" @selected($order->shipment()?->status === \App\Models\Shipment::PREPARATION)>
                       آماده سازی
                    </option>
                    <option value="{{ \App\Models\Shipment::SENT }}" @selected($order->shipment()?->status === \App\Models\Shipment::SENT)>
                       ارسال شده
                    </option>
                    <option value="{{ \App\Models\Shipment::DELIVERED }}" @selected($order->shipment()?->status === \App\Models\Shipment::DELIVERED)>
                        تحویل داده شده
                    </option>
                </select>
                <div class="help-block text-danger fs-7 ">{{ $errors['status'] ?? null  }}</div>
            </div>
        </div>

        @component('admin.components.textarea', ['name' => 'address', 'label' => 'آدرس ارسال سفارش'])
            {{ old('address', $order->shipment()->address) }}
        @endcomponent

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">ذخیره</button>
        </div>
    </form>
</div>