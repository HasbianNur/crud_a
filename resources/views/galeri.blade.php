@extends('layout.main')

@section('container')
    @foreach ($Galeri as $gallery)
        <img src="{{ $gallery["gambar"] }}" alt="">
    @endforeach
@endsection