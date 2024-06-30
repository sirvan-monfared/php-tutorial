<div class="card">
    <div class="card-body">
        <div class="card-header-2">
            <h5>{{ $title ?? '' }}</h5>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title required" for="rating">امتیاز</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="rating" id="rating">
                    @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" @selected((int) old('rating', $comment->rating) === $i)>{{ $i }} ستاره</option>
                    @endfor
                </select>
                <div class="help-block text-danger fs-7 ">{{ $errors['rating'] ?? null  }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <label for="body" class="form-label-title col-sm-3 mb-0">متن دیدگاه</label>
                    <div class="col-sm-9">
                        <textarea name="body" id="body" class="w-100">{{ old('body', $comment->body) }}</textarea>
                        <p class="help-block fs-6 text-danger">{{ $errors['body'] ?? null }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 row align-items-center">
            <label class="col-sm-3 col-form-label form-label-title required" for="status">وضعیت</label>
            <div class="col-sm-9">
                <select class="js-example-basic-single w-100" name="status" id="status">
                    @component('admin.components.comment_status', ['value' => old('status', $comment->status)])

                    @endcomponent
                </select>
                <div class="help-block text-danger fs-7 ">{{ $errors['status'] ?? null  }}</div>
            </div>
        </div>

        <div class="card-header-2 d-flex justify-content-end mb-0 mt-3">
            <button type="submit" class="btn btn-theme">ذخیره</button>
        </div>

    </div>
</div>

