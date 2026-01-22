@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <div class="card-body text-center">
                    <img src="{{ asset('img/deedat.jpg') }}" alt="Foto Profil" class="rounded-circle img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h3 class="card-title mb-3">{{ $nama }}</h3>
                    <div class="text-muted mb-4">
                        <i class="fas fa-graduation-cap me-2"></i>Computer Science Student
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <a href="#" class="btn btn-primary mx-2">
                            <i class="fab fa-linkedin me-2"></i>LinkedIn
                        </a>
                        <a href="#" class="btn btn-dark mx-2">
                            <i class="fab fa-github me-2"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow mt-4">
                <div class="card-body">
                    <h5 class="card-title mb-3"><i class="fas fa-address-card me-2"></i>Contact Information</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            {{ $nohp }}
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            ilhamdeedat@unimus.ac.id
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            Semarang, Indonesia
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-8">
            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-user me-2"></i>About Me</h5>
                    <p class="lead">
                        Mahasiswa Teknologi Informasi yang bersemangat dalam pengembangan web dan teknologi modern.
                    </p>
                    <p>
                        Saya adalah seorang mahasiswa yang fokus pada pengembangan aplikasi web dengan Laravel
                        dan teknologi terkini. Selalu antusias untuk belajar hal-hal baru dan
                        mengimplementasikan solusi kreatif untuk berbagai tantangan pemrograman.
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-laptop-code me-2"></i>Skills</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6>HTML & CSS</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 85%">85%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6>JavaScript</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 75%">75%</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6>PHP & Laravel</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 80%">80%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <h6>MySQL</h6>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 70%">70%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title mb-4"><i class="fas fa-award me-2"></i>Education</h5>
                    <div class="timeline">
                        <div class="timeline-item mb-4">
                            <h6 class="fw-bold">Universitas Muhammadiyah Semarang</h6>
                            <p class="text-muted mb-2"><i class="fas fa-calendar-alt me-2"></i>2024 - Sekarang</p>
                            <p>Teknologi Informasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection