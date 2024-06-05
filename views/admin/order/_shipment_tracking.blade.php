<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <ol class="progtrckr">
                <li class="progtrckr-{{ $order->shipment()->status >= App\Models\Shipment::PROCESSING ? 'done' : 'todo' }}">
                    <h5>پردازش سفارش</h5>
                </li>
                <li class="progtrckr-{{ $order->shipment()->status >= App\Models\Shipment::INVOICE ? 'done' : 'todo' }}">
                    <h5>صدور فاکتور</h5>
                </li>
                <li class="progtrckr-{{ $order->shipment()->status >= App\Models\Shipment::PREPARATION ? 'done' : 'todo' }}">
                    <h5>آماده سازی</h5>
                </li>
                <li class="progtrckr-{{ $order->shipment()->status >= App\Models\Shipment::SENT ? 'done' : 'todo' }}">
                    <h5>ارسال</h5>
                </li>
                <li class="progtrckr-{{ $order->shipment()->status >= App\Models\Shipment::DELIVERED ? 'done' : 'todo' }}">
                    <h5>تحویل</h5>
                </li>
            </ol>

        </div>
    </div>
</div>
