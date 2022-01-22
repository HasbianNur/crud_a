@extends('layout.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <img src="{{ $post["image"] }}" alt="...">
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/posts" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Kembali</a>
@endsection