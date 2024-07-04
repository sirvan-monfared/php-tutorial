<div>
    <div class="product-box product-box-bg wow fadeInUp">
        <div class="product-image">
            <a href="{{ $product->viewLink() }}">
                <img src="{{ $product->featuredImageOrDefault() }}"
                     class="img-fluid blur-up lazyload" alt="">
            </a>
            <ul class="product-option">
                <li data-bs-toggle="tooltip" data-bs-placement="top" title="نمایش">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                        <i data-feather="eye"></i>
                    </a>
                </li>

                <li data-bs-toggle="tooltip" data-bs-placement="top" title="مقایسه">
                    <a href="compare.html">
                        <i data-feather="refresh-cw"></i>
                    </a>
                </li>

                <li data-bs-toggle="tooltip" data-bs-placement="top" title="لیست علاقه‌مندی">
                    <a href="wishlist.html" class="notifi-wishlist">
                        <i data-feather="heart"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="product-detail">
            <a href="{{ $product->viewLink() }}">
                <h6 class="name">
                    {{ $product->name }}
                </h6>
            </a>

            <h5 class="sold text-content">
                <span class="theme-color price">{{ $product->showPrice() }} </span>
                @if($product->prev_price)
                    <del>{{ number_format($product->prev_price) }}</del>
                @endif
            </h5>

            <div class="product-rating mt-2">
                <ul class="rating">
                    <li>
                        <i data-feather="star" class="fill"></i>
                    </li>
                    <li>
                        <i data-feather="star" class="fill"></i>
                    </li>
                    <li>
                        <i data-feather="star" class="fill"></i>
                    </li>
                    <li>
                        <i data-feather="star" class="fill"></i>
                    </li>
                    <li>
                        <i data-feather="star"></i>
                    </li>
                </ul>

                <h6 class="theme-color">
                    {{ $product->stock > 0 ? 'موجود در ابنار' : 'ناموجود' }}
                </h6>
            </div>

            <div class="dynamic-checkout mt-3">

                <form action="{{ route('cart.store') }}" method="POST">
                    @include('partials._csrf')

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <button class="border-theme-color btn btn-md scroll-button" type="submit">
                        <div><i class="ri-shopping-cart-line me-1"></i> افزودن به سبد خرید</div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>