<?php

namespace App\Http\Controllers;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view ('kontak',[
            'title' => 'kontak',
            'kontak' => Kontak::all()
        ]);

    }

    public function show($id)
    {
        return view ('kontaks',[
            'title' => 'Kontak',
            'kontak_single' => Kontak::show($id)
        ]);
    }
}
