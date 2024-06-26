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

            <div class="add-to-cart-box bg-white">
                <button class="btn btn-add-cart addcart-button">افزودن
                    <span class="add-icon bg-light-orange">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                </button>
                <div class="cart_qty qty-box">
                    <div class="input-group">
                        <button type="button" class="qty-left-minus" data-type="minus"
                                data-field="">
                            <i class="fa fa-minus"></i>
                        </button>
                        <input class="form-control input-number qty-input" type="text"
                               name="quantity" value="0">
                        <button type="button" class="qty-right-plus" data-type="plus"
                                data-field="">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>