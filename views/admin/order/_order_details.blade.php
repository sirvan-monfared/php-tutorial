<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="title-header title-header-block package-card">
                <div class="d-flex justify-content-between">
                    <h5>سفارش {{$order->id}}#</h5>
                    <span class="badge badge-{{ $order->status()->cssClass() }}">{{ $order->status()->translate() }}</span>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    @if($order->payment_order_id)
                        <div>
                            <h6>شناسه پرداخت: {{ $order->payment_order_id }}</h6>
                        </div>
                    @endif
                    @if($order->track_id)
                        <div>
                            <h6>کدرهگیری: {{ $order->track_id }}</h6>
                        </div>
                    @endif
                </div>
                <div class="card-order-section">
                    <ul>
                        <li>{{ shamsi($order->created_at, 'Y/m/d ساعت H:i') }}</li>
                        <li>{{ count($order->items()) }} محصول</li>
                        <li>جمع کل : {{ priceFormat($order->amount) }}</li>
                    </ul>
                </div>
            </div>
            <div class="bg-inner cart-section order-details-table">
                <div class="row g-4">
                    <div class="col-xl-8">
                        <div class="table-responsive table-details">
                            <table class="table cart-table table-borderless">
                                <thead>
                                <tr>
                                    <th colspan="2">محصولات</th>
                                    <th class="text-end" colspan="2">
                                        <a href="javascript:void(0)"
                                           class="theme-color">ویرایش سفارش</a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($order->items() as $item)
                                    <tr class="table-order">
                                        <td>
                                            <a href="javascript:void(0)">
                                                <img src="{{ asset('front/images/profile/1.jpg') }}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <p>نام محصول</p>
                                            <h5>{{ $item->product_name }}</h5>
                                        </td>
                                        <td>
                                            <p>تعداد</p>
                                            <h5>{{ $item->quantity }}</h5>
                                        </td>
                                        <td>
                                            <p>قیمت</p>
                                            <h5>{{ priceFormat($item->unit_price) }}</h5>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>

                                <tfoot>
                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5>جمع کل :</h5>
                                    </td>
                                    <td>
                                        <h4>{{ priceFormat($order->amount) }}</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5>هزینه ارسال :</h5>
                                    </td>
                                    <td>
                                        <h4>0 تومان</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h5>مالیات :</h5>
                                    </td>
                                    <td>
                                        <h4>0 تومان</h4>
                                    </td>
                                </tr>

                                <tr class="table-order">
                                    <td colspan="3">
                                        <h4 class="theme-color fw-bold">جمع کل :</h4>
                                    </td>
                                    <td>
                                        <h4 class="theme-color fw-bold">{{ priceFormat($order->amount) }}</h4>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="order-success">
                            <div class="row g-4">
                                <h4>جزئیات سفارش</h4>
                                <ul class="order-details">
                                    <li>کد سفارش : {{ $order->ref_id }}</li>
                                    <li>تاریخ سفارش : {{ shamsi($order->created_at) }}</li>
                                    <li>جمع کل سفارش : {{ priceFormat($order->amount) }} </li>
                                </ul>

                                <h4>آدرس ارسال</h4>
                                <ul class="order-details">
                                    <li> - ایران</li>
                                    <li>خیابان - پاساژ پلاک 12</li>
                                    <li>کد پستی :</li>
                                </ul>

                                <div class="payment-mode">
                                    <h4>روش پرداخت</h4>
                                    <p>پرداخت درب منزل</p>
                                </div>

                                <div class="delivery-sec">
                                    <h3>تاریخ تحویل : 22 اردیبهشت 1402</span>
                                    </h3>
                                    <a href="order-tracking.html">پیگیری سفارش</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section end -->
        </div>
    </div>
</div>