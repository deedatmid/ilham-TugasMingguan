@extends('layouts.main')

@section('content')
<div class="row mb-4">
    <div class="col">
        <h1 class="display-4 fw-bold text-primary mb-4"><i class="fas fa-newspaper me-3"></i>Berita Terkini</h1>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($berita as $item)
    <div class="col">
        <div class="card h-100 shadow-sm">
            <!-- Placeholder image - Anda bisa ganti dengan gambar berita asli jika ada -->
            <div class="card-img-top bg-light text-center py-4">
                <i class="fas fa-newspaper text-primary" style="font-size: 4rem;"></i>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/berita/{{ data_get($item, 'slug', '') }}" class="text-decoration-none text-dark">
                        {{ data_get($item, 'judul', 'Untitled') }}
                    </a>
                </h5>
                <p class="card-text text-muted mb-2">
                    <small><i class="fas fa-user me-2"></i>{{ data_get($item, 'penulis', 'Penulis') }}</small>
                </p>
                <p class="card-text">{{ Str::limit(data_get($item, 'konten', ''), 100) }}</p>
            </div>
            <div class="card-footer bg-transparent border-top-0">
                <a href="/berita/{{ data_get($item, 'slug', '') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-arrow-right me-1"></i> Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection