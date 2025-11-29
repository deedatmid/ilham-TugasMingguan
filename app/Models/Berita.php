<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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

    public static function ambildata()
    {
        // Ensure every item has a slug (fallback: slugify the title)
        $items = array_map(function ($item) {
            if (!isset($item['slug']) || empty($item['slug'])) {
                $item['slug'] = Str::slug($item['judul'] ?? uniqid('berita-'));
            }
            return $item;
        }, self::$berita);

        return collect($items);
    }

    public static function caridata($slug)
    {
        foreach (self::$berita as $item) {
            if ($item['slug'] === $slug) {
                return $item;
            }
        }

        return null;
    }
}

