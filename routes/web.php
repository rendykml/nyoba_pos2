<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view(
        'welcome',
        [
            'title' => 'home'
        ]
    );
});

Route::get('/home', function () {
    return view('welcome', [
        'title' => 'home'
    ]);
});


Route::get('/about', [PostController::class, 'index']);
Route::get('/keterangan/{slug}', [PostController::class, 'show']);

Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/kontaks{id}', [KontakController::class, 'show']);



// Route::get('/kontak', function () {
//     return view('kontak', ['title' => 'kontak']);
// });
