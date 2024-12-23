<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak
{
    private static $kontak =
    [
        [
            'id' => '1',
            'kontak_ig'=>'https://www.instagram.com/rendy_kamaluddin/',
            'kontak_wa'=> '0881423929193'
        ], 
        [
            'id' => '2',
            'kontak_ig' => 'https://www.instagram.com/p/DD4vPDLyx7h/',
            'kontak_wa' => 'acumalaka'
        ]
    ];
    
    public static function all() 
    {
        return collect(self::$kontak);
    }

    public static function show($id)
    {
        $psot = static::all();
        return $psot->firstWhere('id', $id);
    }
}
