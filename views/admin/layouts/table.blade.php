@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-12">

            @include('partials._alerts')

            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>{{ $title }}</h5>
                        <div class="d-flex align-items-center gap-2">
                            <a id="filters-handler" class="text-primary" href="#">فیلترها</a>
                            <a href="{{ $create_route }}" class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus"></i>افزودن
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive table-product">
                        @yield('table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        const filter_handler = document.getElementById('filters-handler');
        const filters = document.getElementById('filters');

        filter_handler.addEventListener('click', (e) => {
            e.preventDefault();
            filters.classList.toggle('d-none');
        });



        const forms = document.querySelectorAll('.delete-form');

        forms.forEach(function (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();

                const result = confirm("آیا از حذف این آیتم اطمینان دارید؟");

                if (result) {
                    form.submit();
                }
            })
        })


    </script>
@endsection

