@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>

@foreach ($posts as $post)
<article class="mb-5">
    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach

@endsection