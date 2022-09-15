<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MahasiswaController;
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



Route::get('/index', function () {
    return view('index');
});

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'show']);


// // Route::resource('posts', PostController::class);

Route::get('/', function () {
    echo 'SELAMAT DATANG';
});

Route::get('/about', function () {
    echo 'NIM: 2241727026 <br> Nama: Novelya Asis Sholikha <br> Kelas: Web-B';
});

Route::get('/articles/{id}', function ($id) {
    echo 'Halaman artikel ini dengan id '.$id;
});

Route::get('/home', function () {
    echo '<h1>Ini Adalah halaman Home<h1>';
});


Route::prefix('category')->group(function (){
    Route::get('/{id}', [ProdukController::class, 'produk']);
});

Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('program')->group(function (){
    Route::get('/{id}', [ProgramController::class, 'program']);
});

Route::get('/aboutus', [AboutUsController::class, 'AboutUs']);

Route::resource('/contactus', ContactUsController::class);

// Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('mahasiswa', MahasiswaController::class);
