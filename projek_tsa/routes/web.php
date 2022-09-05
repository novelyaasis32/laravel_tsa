<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

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



// Route::get('/home', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);


// // Route::resource('posts', PostController::class);

// Route::get('/', function () {
//     return 'SELAMAT DATANG';
// });

// Route::get('/about', function () {
//     return 'NIM: 2241727026 <br> Nama: Novelya Asis Sholikha <br> Kelas: Web-B';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel ini dengan id '.$id;
// });
