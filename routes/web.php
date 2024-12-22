<?php

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

Route::get('/about', function () {
    $keterangan = [
        [
            'slug' => 'mahasiswa-1',
            'name' => 'Rendy God',
            'kelas' => 'D4 - Teknik Informatika 2A',
            'NPM' => '714230030'
        ],
        [
            'slug' => 'mahasiswa-2',
            'name' => 'kamaluddin',
            'kelas' => 'D4 - Teknik Informatika 2B',
            'NPM' => '714230029'
        ]
    ];
    return view('about', [
        'title' => 'about',
        'name' => $keterangan
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => 'kontak']);
});

//halaman keterangna 1 mahasiswa

Route::get('/keterangan/{slug}', function($slug){
    $keterangan = [
        [
            'slug' => 'mahasiswa-1',
            'name' => 'Rendy God',
            'kelas' => 'D4 - Teknik Informatika 2A',
            'NPM' => '714230030'
        ],
        [
            'slug' => 'mahasiswa-2',
            'name' => 'kamaluddin',
            'kelas' => 'D4 - Teknik Informatika 2B',
            'NPM' => '714230029'
        ]
    ];

    $single_name = [];
    foreach($keterangan as $z){
        if($z['slug'] === $slug ){
            $single_name = $z;
        }
    }   

    return view('keterangan', [
        'title' => 'keterangan nama',
        'name' => $single_name
    ]);
});

Route::get('post/{slug}', function($slug){
    $keterangan = [
        [
            'slug' => 'mahasiswa-1',
            'name' => 'Rendy God',
            'kelas' => 'D4 - Teknik Informatika 2A',
            'NPM' => '714230030'
        ],
        [
            'slug' => 'mahasiswa-2',
            'name' => 'kamaluddin',
            'kelas' => 'D4 - Teknik Informatika 2B',
            'NPM' => '714230029'
        ]
    ];

    $single_name = [];
    foreach($keterangan as $z){
        if($z['slug'] === $slug ){
            $single_name = $z;
        }
    }   

    return view('post',[
        'title' => 'post-woi',
        'name' => $single_name
    ]);
});