<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;
// use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Biodata;
// use App\Models\Galeri;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/biodata/{slug2}', [BiodataController::class, 'show']);

// Route::get('/galeri', [GalleryController::class, 'index']);
// Route::get('/galeri/{slug3}', [GalleryController::class, 'show']);

Route::get('/siswa', function () {
    return view('siswa', [
        "title" => "Data Siswa"
    ]);
});
