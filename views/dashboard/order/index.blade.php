@extends('dashboard.layouts.main')

@section('dashboard-content')
    <div class="dashboard-order">
        <div class="title">
            <h2> سفارشات من</h2>
            <span class="title-leaf title-leaf-gray">
                <svg class="icon-width bg-gray">
                    <use xlink:href="{{ asset('front/svg/leaf.svg#leaf') }}"></use>
                </svg>
            </span>
        </div>

        <div class="order-contain">
            @foreach($orders as $order)
                <div class="order-box dashboard-bg-box">
                    <div class="order-container">
                        <div class="order-icon">
                            <i data-feather="box"></i>
                        </div>

                        <div class="order-detail d-flex align-items-center gap-4">
                            <div>
                                <h4>{!! $order->status() !!}</h4>
                                <h6>
                                    کدرهگیری: {{ $order->track_id }}
                                </h6>
                            </div>
                            <div>
                                <p class="m-2">تاریخ پرداخت:  {{ shamsi($order->created_at)  }}</p>
                                <p class="">
                                    آخرین بروزرسانی:  {{ shamsi($order->updated_at) }}
                                </p>
                            </div>

                            <a href="{{ $order->viewLink() }}" class="btn btn-primary btn-xs d-flex align-items-center gap-1 ">
                                <i class="fa fa-eye"></i>
                                <span>مشاهده سفارش</span>
                            </a>
                        </div>
                    </div>

                    <div class="product-order-detail">
                        @foreach($order->items() as $item)
                            <a href="{{ $item->product()?->viewLink() }}" class="order-image">
                                <img src="{{ $item->product()?->featuredImage() }}"
                                     class="blur-up lazyload" alt="">
                            </a>
                        @endforeach


                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection