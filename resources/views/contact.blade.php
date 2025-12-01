@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Hubungi Kami</h1>
    
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                        </div>

                        <div class="form-group">
                            <label for="nohp">Nomor HP</label>
                            <input type="tel" class="form-control" id="nohp" name="nohp" placeholder="081234567890" required>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                    </form>
                </div>
            </div>

            <div class="mt-4 card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Kontak</h5>
                    <p><strong>Alamat:</strong> Universitas Muhammadiyah Semarang, Jl. Kedungmundu No.18, Semarang</p>
                    <p><strong>Email:</strong> info@unimus.ac.id</p>
                    <p><strong>Telepon:</strong> (024) 6711446</p>
                    <p><strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 16:00 WIB</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
