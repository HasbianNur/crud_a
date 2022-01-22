<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GalleryController extends Controller
{
    public function index()
    {
        return view('galeri', [
            "title" => "Galeri",
            "Galeri" => Galeri::all()
        ]);
    }

    public function show($slug3)
    {
        return view('galeri', [
            "title" => "Galeri",
            "Galeri" => Galeri::find($slug3)
        ]);
    }
}
