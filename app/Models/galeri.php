<?php

namespace App\Models;

class Galeri
{
    private static $blog_galeri = [
        [
            "gambar1" => "/img/gambar1.jpg",
            "gambar2" => "/img/gambar2.jpg",
            "gambar3" => "/img/gambar3.jpg",
            "gambar4" => "/img/gambar4.jpg",
            "gambar5" => "/img/gambar5.jpg",
            "gambar6" => "/img/gambar6.jpg",
            "gambar7" => "/img/gambar7.jpg",
            "gambar8" => "/img/gambar8.jpg",
            "gambar9" => "/img/gambar9.jpg",
            "gambar10" => "/img/gambar10.jpg",
            "gambar11" => "/img/gambar11.jpg",
            "gambar12" => "/img/gambar12.jpg",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_galeri);
    }

    public static function find($slug3)
    {
        $galeri = static::all();
        return $galeri->firstWhere('slug3', $slug3);
    }
}
