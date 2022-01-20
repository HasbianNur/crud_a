<?php

namespace App\Models;

class Biodata
{
    private static $blog_biodata = [
        [
            "title" => "Biodata",
            "slug2" => "biodata",
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
        return collect(self::$blog_biodata);
    }

    public static function find($slug2)
    {
        $biodata = static::all();
        return $biodata->firstWhere('slug2', $slug2);
    }
}
