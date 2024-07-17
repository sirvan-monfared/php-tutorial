<div id="filters">
    <form method="GET" action="{{ route('admin.order.index') }}">

        <div class="d-flex align-items-start gap-4">

            <label>وضعیت :
                <select name="status" class="js-example-basic-single w-100">
                    <option value="">همه وضعیت ها</option>
                    @foreach(\App\Enums\OrderStatus::cases() as $status)
                        <option value="{{ $status->value }}" @selected(intval($_GET['status'] ?? null) === $status->value)>{{ $status->translate() }}</option>
                    @endforeach
                </select>
            </label>
            <div type="submit" class=" mt-4 mx-auto d-flex flex-column gap-1">
                <button class="btn btn-info d-flex align-items-center gap-2">
                    <i class="fa fa-search"></i>
                    <span>اعمال فیلترها</span>
                </button>
                <a href="{{ route('admin.category.index') }}" class="d-block text-center">حذف فیلترها</a>
            </div>
        </div>
    </form>
</div>