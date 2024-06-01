@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>ویرایش کاربر</h5>
                            </div>

                            @include('partials._alerts')


                            <form method="POST" action="{{ route('admin.user.update', ['id' => $user->id]) }}" class="theme-form theme-form-2 mega-form">
                                @include('partials._csrf')
                                @method('PUT')

                                @include('admin.user._form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection