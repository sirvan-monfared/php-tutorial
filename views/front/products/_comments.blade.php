<div class="row">
    <div class="col-xl-5">
        <div class="product-rating-box">
            <div class="row">
                @if(auth()->check())
                    @include('front.partials._comment')
                @else
                    <div class="col-xs-12">
                        <p>برای ارسال دیدگاه باید وارد حساب کاربری خود شوید</p>
                        <a href="{{ route('auth.login') }}" class="btn btn-xs fw-bold text-light theme-bg-color">ورود به
                            حساب کاربری</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-xl-7">
        <div class="review-people">
            @if (! $product->comments())
                <div class="no-comment">
                    <h3>هیچ دیدگاهی برای این محصول ثبت نشده است</h3>
                </div>
            @endif
            <ul class="review-list">

                @foreach($product->comments() as $comment)
                    <li>
                        <div class="people-box">
                            <div>
                                <div class="people-image people-text">
                                    <img alt="user" class="img-fluid" src="{{ asset('front/images/review/1.jpg') }}">
                                </div>
                            </div>
                            <div class="people-comment">
                                <div class="people-name"><a
                                            href="javascript:void(0)"
                                            class="name">{{ $comment->user()->fullName() }}</a>
                                    <div class="date-time">
                                        <h6 class="text-content"> {{ shamsi($comment->created_at) }}</h6>
                                        <div class="product-rating">
                                            @component('front.components.rating', ['stars' => $comment->rating])
                                            @endcomponent
                                        </div>
                                    </div>
                                </div>
                                <div class="reply">
                                    <p>{{ $comment->body }}</p>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>