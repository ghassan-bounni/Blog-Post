<x-layout >
    @include('posts._header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count() > 0)
            <x-posts-grid :posts="$posts" />
            @else
            <p class="text-center">No posts yet.</p>
            @endif
        </main>
</x-layout>

{{-- @extends('layout')

    @section('content')
    @foreach ($posts as $post )
    <article>
        <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        {{ $post->excerpt }}
    </article>
    @endforeach
@endsection --}}