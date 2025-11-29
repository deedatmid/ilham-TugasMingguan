@extends('layouts.main')

@section('content')
<h1 class="text-centre">Tambah Data Mahasiswa</h1>
    <div class="card">
        <div class="card-body">
    <form action="/insertdata" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name = "nama" id = "nama" placeholder="Nama Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="Number" name = "nim" placeholder="nomor induk mahasiswa" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" name ="prodi" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="nohp" class="form-label">NoHp</label>
    <input type="Number" name="nohp" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
@endsection