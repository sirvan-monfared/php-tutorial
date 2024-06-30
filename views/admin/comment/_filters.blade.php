<div id="filters">
    <form method="GET" action="{{ route('admin.comment.index') }}">
        <div class="d-flex align-items-start gap-4">
            <label>وضعیت:
                <select name="status" class="js-example-basic-single w-100">
                    <option value="">همه وضعیت ها</option>
                    <option value="{{ App\Models\Comment::PENDING }}" @selected((int) $_GET['status'] === App\Models\Comment::PENDING)>در دست بررسی</option>
                    <option value="{{ App\Models\Comment::ACCEPTED }}" @selected((int) $_GET['status'] === App\Models\Comment::ACCEPTED)>تایید شده</option>
                    <option value="{{ App\Models\Comment::SPAM }}" @selected((int) $_GET['status'] === App\Models\Comment::SPAM)>هرزنامه</option>
                </select>
            </label>
            <div type="submit" class=" mt-4 mx-auto d-flex flex-column gap-1">
                <button class="btn btn-info d-flex align-items-center gap-2">
                    <i class="fa fa-search"></i>
                    <span>اعمال فیلترها</span>
                </button>
                <a href="{{ route('admin.comment.index') }}" class="d-block text-center">حذف فیلترها</a>
            </div>
        </div>
    </form>
</div>