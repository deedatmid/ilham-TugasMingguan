@extends('layouts.main')

@section('content')
<h1>berita</h1>
@foreach ( $berita as $item )
<article class="mb-5">
    <a href="/berita/{{ $item['slug'] }}"> 
    <h2> {{ $item['judul'] }} </h2>
    </a>
    <h3>{{ $item['penulis'] }}</h3>
    <p>{{ $item['konten'] }}</p>
    </article>

@endforeach

@endsection