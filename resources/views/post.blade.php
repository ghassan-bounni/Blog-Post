<x-layout >
  <article>
    <h1>{{$post -> title}}</h1>
    <div>
      {!! $post -> body !!}
    </div>
  </article>
  <a href="/posts">back</a>
</x-layout>

{{-- @extends('layout')

    @section('content')
  <article>
    <h1>{{$post -> title}}</h1>
    <div>
      {!! $post -> body !!}
    </div>
  </article>
  <a href="/posts">back</a>
  @endsection --}}
