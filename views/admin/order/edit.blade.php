@extends('admin.layouts.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="col-sm-12">

        @include('partials._alerts')

        @if($order->isPaid())

            <div class="card">
                    @include('admin.order._edit_shipping')
            </div>

        @endif

        <div class="card">
            @include('admin.order._edit_order')
        </div>

    </div>

    @include('admin.order._order_details')
@endsection

@section('scripts')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection