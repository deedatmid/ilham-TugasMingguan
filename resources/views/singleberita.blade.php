

@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/berita" class="text-decoration-none"><i class="fas fa-newspaper me-1"></i>Berita</a></li>
                    <li class="breadcrumb-item active">{{ data_get($berita, 'judul', 'Berita') }}</li>
            </ol>
        </nav>

        <article class="bg-white p-4 rounded shadow-sm">
            <h1 class="display-5 fw-bold mb-4">{{ data_get($berita, 'judul', 'Berita') }}</h1>
            
            <div class="d-flex align-items-center mb-4">
                <i class="fas fa-user-circle text-primary me-2" style="font-size: 2rem;"></i>
                <div>
                    <h6 class="mb-0">{{ data_get($berita, 'penulis', 'Penulis tidak diketahui') }}</h6>
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i>
                        {{ date('d M Y') }}
                    </small>
                </div>
            </div>

            <div class="content-body">
                <p class="lead mb-4">{{ data_get($berita, 'konten', '') }}</p>
            </div>

            <hr class="my-4">

            <div class="d-flex justify-content-between align-items-center">
                <a href="/berita" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Berita
                </a>
                
                <div class="share-buttons">
                    <span class="me-2">Bagikan:</span>
                    <a href="#" class="text-primary me-2"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-info me-2"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp fa-lg"></i></a>
                </div>
            </div>
        </article>
    </div>
</div>
@endsection