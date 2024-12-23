<?php

namespace App\Models;


class Postb
{
    private static $keterangan = [
        [
            'slug' => 'mahasiswa-1',
            'name' => 'RendyGod',
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

    public static function all()
    {
        return collect(self::$keterangan);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
