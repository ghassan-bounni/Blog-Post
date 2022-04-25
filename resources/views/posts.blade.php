<x-layout >
        @foreach ($posts as $post )
    <article>
        <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>

    <p>By <a href="/users/{{$post->author->id}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
        <div>
            {{ $post->excerpt }}
        </div>
    </article>
    @endforeach
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