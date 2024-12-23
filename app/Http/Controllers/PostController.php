<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('about', [
            'title' => 'about',
            'names' => post::all()
        ]);
    }

    public function show($slug){
        return view('keterangan', [
            'title' => 'keterangan nama',
            'name' => post::find($slug)
        ]);
    }
}
