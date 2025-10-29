<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Berita extends Model
{
    private static $berita = [
        [
            "judul" => "Mahasiswa yang depresi",
            "slug" => "unimus-musang",
            "penulis" => "Chelsea Dieva",
            "konten" => "Bundir dikarenakan uts menyerang diri nya",
        ],
        [
            "judul" => "Unimus nyambik",
            "slug"=> "berita-unimus-hot",
            "penulis" => "Supriyanto",
            "konten" => "Meninggal akibat tergigit semut",
        ],
        [
            "judul" => "Busay Full Percakapan 5 Menit",
            "slug" => "fatur-full-percakapan",
            "penulis" => "Dudung",
            "konten" => "Busay di selingkuhi oleh teman sendiri",
        ],
    ];
}

