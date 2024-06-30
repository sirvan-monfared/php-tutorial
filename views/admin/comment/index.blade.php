@extends('admin.layouts.table', [
    'title' => 'مدیریت دیدگاه ها',
    'create_route' => route('admin.comment.create')
])

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/select2.min.css') }}">
@endsection

@section('table')
    @include('admin.comment._filters')

    <table class="table all-package theme-table" id="table_id">
        <thead>
            <tr>
                <td>شناسه</td>
                <th>نام کاربر</th>
                <th>نام محصول</th>
                <th>متن</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>
                        <div >
                            <a href="{{ $comment->user()->editLink() }}" target="_blank">{{ $comment->user()->name }}</a>
                        </div>
                    </td>

                    <td>
                        <div class="user-name">
                            <a href="{{ $comment->product()->editLink() }}" target="_blank">{{ $comment->product()->name }}</a>
                        </div>
                    </td>

                    <td>{{ $comment->body }}</td>

                    <td>{!! $comment->status() !!}</td>

                    <td>
                        <ul>
                            <li>
                                <a href="order-detail.html">
                                    <i class="ri-eye-line"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $comment->editLink() }}">
                                    <i class="ri-pencil-line"></i>
                                </a>
                            </li>

                            <li>
                                <form method="POST" class="delete-form"
                                      action="{{ route('admin.comment.destroy', ['id' => $comment->id]) }}">
                                    @method('DELETE')
                                    @include('partials._csrf')

                                    <button type="submit" class="btn-delete">
                                        <i class="ri-delete-bin-line"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $paginator->render() !!}

@endsection

@section('scripts')
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/js/select2-custom.js') }}"></script>
@endsection