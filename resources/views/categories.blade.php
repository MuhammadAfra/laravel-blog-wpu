@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>

    @foreach ($categories as $category)
        <article class="mt-4">
            <ul>
                <li>
                    <h2>
                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                    </h2>
                </li>
            </ul>
            {{-- <h5>By : {{ $post["author"] }}</h5> --}}
        </article>
    @endforeach
@endsection
