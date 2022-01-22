<?php

namespace App\Models;

class Galeri
{
    private static $blog_galeri = [
        [
            "title" => "Gallery",
            "slug3" => "gallery",
            "nama" => "Hasbian Nur",
            "nis" => "6275",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "kelas" => "XI-RPL",
            "sekolah" => "SMK AIRLANGGA BALIKPAPAN",
            "gambar" => "/img/hasbi.jpeg"
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
