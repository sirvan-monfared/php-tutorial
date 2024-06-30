@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">

                @include('partials._alerts')

                <div class="col-sm-8 m-auto">
                    <form action="{{ route('admin.comment.update', ['id' => $comment->id]) }}" method="POST" class="theme-form theme-form-2 mega-form">
                        @method('PUT')
                        @include('partials._csrf')

                        @include('admin.comment._form', [
                            'title' => 'ویرایش دیدگاه'
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
