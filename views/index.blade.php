@extends('layouts.main')

@section('content')
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <section class="grid grid-cols-3 gap-2">

                @foreach($posts as $post)
                    <article class="bg-white shadow-md p-5 flex flex-col gap-2">
                        <img src="https://placehold.co/600x400" alt="">
                        <p><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></p>
                    </article>
                @endforeach

            </section>
        </div>
    </main>
@endsection