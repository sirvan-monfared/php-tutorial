<div class="onhover-dropdown header-badge">
    <button type="button" class="btn p-0 position-relative header-wishlist">
        <i data-feather="shopping-cart"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge"> {{ cart()->count() }}
                                                    <span class="visually-hidden"></span>
                                                </span>
    </button>

    <div class="onhover-div">
        <ul class="cart-list">
            @foreach(cart()->all() as $item)
                <li class="product-box-contain">
                    <div class="drop-cart">
                        <a href="{{ route('products.show', ['id' => $item['id']]) }}" class="drop-image">
                            <img src="{{ asset('front/images/vegetable/product/1.png') }}"
                                 class="blur-up lazyload" alt="">
                        </a>

                        <div class="drop-contain">
                            <a href="{{ route('products.show', ['id' => $item['id']]) }}">
                                <h5>{{ $item['name'] }}</h5>
                            </a>
                            <h6><span>{{ $item['qty'] }} x</span> {{ priceFormat($item['price']) }} </h6>
                            <button class="close-button close_button">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="price-box">
            <h5>جمع کل :</h5>
            <h4 class="theme-color fw-bold">{{ priceFormat(cart()->sum()) }}</h4>
        </div>

        <div class="button-group">
            <a href="{{ route('cart.index') }}" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">مشاهده سبد خرید</a>
        </div>
    </div>
</div>