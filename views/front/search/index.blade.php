@extends('front.layouts.main')

@section('content')
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    @include('front.search._filter')

                    <div class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">

                        @foreach($products as $product)
                            @component('front.components.product', ['product' => $product])
                            @endcomponent
                        @endforeach

                    </div>

                    {!! $paginator->render() !!}

                </div>
            </div>
        </div>
    </section>
@endsection