

@extends('layouts.main')

@section('content')
<article>             
<h1>{{ $berita["judul"] }}</h1>
<h3>{{ $berita["penulis"] }}</h3>
<p>{{ $berita["konten"] }}</p>
</article>


<a href="/berita">Kembali ke berita</a>

@endsection