<form action="{{ route('comment.store', ['id' => $product->id]) }}" method="POST">

    @include('partials._csrf')


    <div class="col-xl-12">

        <div class="review-title-2 mb-5">
            <h4 class="fw-bold">بازخورد این محصول</h4>
            <p>با ثبت بازخورد خود در خرید دیگران راهنمایی خوبی باشید</p>
        </div>

        <div>
            <p class="form-label">امتیاز شما *</p>
            <span class="star-rating mb-4">
                <label for="rate-1" style="--i:1"><i
                            class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rate-1"
                       value="1"  @checked((int) old('rating') === 1)>

                <label for="rate-2" style="--i:2"><i
                            class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rate-2"
                       value="2"  @checked((int) old('rating') === 2)>

                <label for="rate-3" style="--i:3"><i
                            class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rate-3"
                       value="3"  @checked((int) old('rating') === 3)>

                <label for="rate-4" style="--i:4"><i
                            class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rate-4"
                       value="4"  @checked((int) old('rating') === 4)>

                <label for="rate-5" style="--i:5"><i
                            class="fa-solid fa-star"></i></label>
                <input type="radio" name="rating" id="rate-5"
                       value="5" @checked((int) old('rating') === 5)>
            </span>

            <div class="help-block text-danger fs-7 ">{{ $errors['rating'] ?? null  }}</div>
        </div>

        <div class="review-box mb-3">
            <label for="body" class="form-label">دیدگاه شما *</label>
            <textarea id="body" rows="3" class="form-control" name="body"
                      placeholder="دیدگاه خود را تایپ کنید">{{ old('body') }}</textarea>
            <div class="help-block text-danger fs-7 ">{{ $errors['body'] ?? null  }}</div>
        </div>

        <button type="submit" class="btn btn-md fw-bold text-light theme-bg-color w-100">ثبت دیدگاه</button>

    </div>
</form>