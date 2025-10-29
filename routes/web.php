<?php


use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Ilham Deedat Al-Ayyubi",
        "nohp" => "0882003309574",
        "foto" => "img/deedat.jpg",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Mahasiswa yang depresi",
            "slug" => "unimus-musang",
            "penulis" => "Chelsea Dieva",
            "konten" => "Bundir dikarenakan uts yang menyerang diri nya",
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
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {

    $data_berita = [
        [
            "judul" => "Mahasiswa yang depresi",
            "slug" => "unimus-musang",
            "penulis" => "Chelsea Dieva",
            "konten" => "Bundir dikarenakan uts yang menyerang diri nya",
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
    $new_berita = [];
    
    foreach ($data_berita as $berita)
 {

        if($berita["slug"] === $slugp)
             {
            $new_berita = $berita; ///$berita =>[judul, slug, penulis, konten]
            }
    }


    return view('singleberita', [
        "title" => "Berita",
        "berita" => $new_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});