@extends('layouts.main')

@section('content')
<h1 class="text-centre">Tambah Data Mahasiswa</h1>
    <div class="col-8">
    <div class="card">
        <div class="card-body">
            <form action="/insertdata" method="POST" enctype="multipart/form.data">
            @csrf
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="name" id="nama" placeholder="Nama Lengkap" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="Number" name="nim" id="nim"placeholder="Nomor induk mahasiswa" class="form-control">
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Prodi</label>
    <input type="text" name="prodi" id="prodi" placeholder="Nama Lengkap" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No HandPhone</label>
    <input type="Number" name="nohp" id="nohp" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
@endsection