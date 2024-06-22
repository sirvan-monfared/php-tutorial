@extends('front.layouts.main')

@section('content')
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    @include('front.category._filter')


                    <div
                            class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">

                        @foreach($products as $product)
                            <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{ $product->viewLink() }}">
                                            <img src="{{ $product->featuredImage() }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{ $category->name }}</span>
                                        <a href="{{ $product->viewLink() }}">
                                            <h5 class="name">{{ $product->name }}</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content">{!! str_limit($product->description, 20) !!}</p>

                                        <h5 class="price">
                                            <span class="theme-color">{{ $product->showPrice() }}</span>
                                            @if($product->prev_price)
                                                <del>{{ priceFormat($product->prev_price) }}</del>
                                            @endif
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">افزودن
                                                <span class="add-icon bg-light-gray"> <i class="fa-solid fa-plus"></i> </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    {!! $paginator->render() !!}

                </div>
            </div>
        </div>
    </section>
@endsection