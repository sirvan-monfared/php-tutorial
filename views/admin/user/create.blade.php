@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5> کاربر جدید</h5>
                            </div>

                            @include('partials._alerts')


                            <form method="POST" action="{{ route('admin.user.store') }}" class="theme-form theme-form-2 mega-form">
                                @include('partials._csrf')

                                @include('admin.user._form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection