<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index () {
    return view('berita', [
        "title" => "Berita",
        "berita" => Berita::ambildata(),
    ]);
}
    public function tampildata($slug) {
    $artikel = Berita::caridata($slug);

    if (!$artikel) {
        abort(404);
    }

    return view('singleberita', [
        "title" => $artikel['judul'] ?? 'Berita',
        "berita" => $artikel,
    ]);
}
}