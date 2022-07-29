@extends('layouts.main')

@section('container')
    <h3>{{ $posts->title }}</h3>
    {{-- <h5>{{ $post["author"] }}</h5> --}}

    <p>By. <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">{{ $posts->author->name }}</a> in <a href="/categories/{{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a></p>
    {!! $posts->body !!}

    {{-- Post::create([
'title' => 'Judul Ke Pertama',
'slug' => 'judul-pertama',
'excerpt' => 'Lorem Ipsum Pertama',
'body' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p>the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>'
]) --}}

    <a href="/posts" class="d-block mt-3">Back to List</a>
@endsection


