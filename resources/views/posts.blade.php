@extends('layout.main')

@section('container')
    
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <img src="{{ $post["image"] }}" alt="...">
            <h5>By: {{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach

@endsection