<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Minecraft",
            "slug" => "minecraft",
            "author" => "Hasbian Nur",
            "body" => "Minecraft is a sandbox video game originally created by Markus (Notch) Persson. It is maintained by Mojang Studios, a part of Xbox Game Studios, which in turn is part of Microsoft.",
            "isi" => "From its creation, Minecraft was developed almost exclusively by Notch until Jens (Jeb) Bergensten started working with him and has since become head of its development. It features music by Daniel (C418) Rosenfeld and by Lena Raine and paintings by Kristoffer Zetterstrand. Initially released as what is now known as Minecraft Classic on May 17, 2009, the game was fully released on November 18, 2011. Since its release, Minecraft has expanded to mobile devices and consoles. On November 6, 2014, Minecraft and all of Mojang Studios' assets were acquired by Microsoft for US$2.5 billion.[5][6] Notch has since left Mojang and is no longer working on Minecraft.",
            "image" => "/img/MC.jpg"
        ],
        [
            "title" => "Dead Cells",
            "slug" => "dead-cells",
            "author" => "Jony",
            "body" => "Dead Cells adalah gim video roguelike yang terinspirasi oleh gim bergaya Metroidvania dan The Binding of Isaac, dikembangkan dan diterbitkan oleh Motion Twin.
            
            Setelah satu tahun dalam akses awal, Dead Cells dirilis untuk Linux, macOS, Microsoft Windows, Nintendo Switch, PlayStation 4, dan Xbox One pada 7 Agustus 2018.",
            "image" => "/img/DC.jpg"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
