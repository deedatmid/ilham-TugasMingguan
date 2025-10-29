<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "berita",
            "beritas" => Berita::ambildata(),
        ]);
    }

    public function tampildata ($slugp) {

    return view ('singleberita', [
        "new_berita" => Berita::caridata($slugp),
    ]);
}
}