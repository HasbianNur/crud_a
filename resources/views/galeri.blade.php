@extends('layout.main_galeri')

@section('container')
    @foreach ($Galeri as $gallery)
        <h1>Galeri</h1>

        <div class="gallery">
            <a href="{{ $gallery["gambar1"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar1"] }}" alt=""></a>
            <a href="{{ $gallery["gambar2"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar2"] }}" alt=""></a>
            <a href="{{ $gallery["gambar3"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar3"] }}" alt=""></a>
            <a href="{{ $gallery["gambar4"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar4"] }}" alt=""></a>
            <a href="{{ $gallery["gambar5"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar5"] }}" alt=""></a>
            <a href="{{ $gallery["gambar6"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar6"] }}" alt=""></a>
            <a href="{{ $gallery["gambar7"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar7"] }}" alt=""></a>
            <a href="{{ $gallery["gambar8"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar8"] }}" alt=""></a>
            <a href="{{ $gallery["gambar8"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar9"] }}" alt=""></a>
            <a href="{{ $gallery["gambar10"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar10"] }}" alt=""></a>
            <a href="{{ $gallery["gambar11"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar11"] }}" alt=""></a>
            <a href="{{ $gallery["gambar12"] }}" data-lightbox="mygallery"><img src="{{ $gallery["gambar12"] }}" alt=""></a>
        </div>
    @endforeach
@endsection