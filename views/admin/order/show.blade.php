@extends('admin.layouts.main')

@section('content')
    @if($order->isPaid())
        @include('admin.order._shipment_tracking')
    @endif

    @include('admin.order._order_details')
@endsection