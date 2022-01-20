<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        return view('biodata', [
            "title" => "Biodata",
            "biodata" => Biodata::all()
        ]);
    }

    public function show($slug2)
    {
        return view('biodata', [
            "title" => "Biodata",
            "biodata" => Biodata::find($slug2)
        ]);
    }
}
