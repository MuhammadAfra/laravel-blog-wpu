@extends('layouts.main')

@section('container')
    <h1>Halaman Blog</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2 class>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            {{-- <h5>By : {{ $post["author"] }}</h5> --}}
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                    {{ $post->category->name }}</a></p>

            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
