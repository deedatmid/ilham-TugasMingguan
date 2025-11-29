@extends('layouts.main')

@section('content')
<h1 class="text-center">Edit Data Mahasiswa</h1>
<div class="col-8">
  <div class="card">
    <div class="card-body">
      <form action="{{ route('editdata', $data->id) }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" id="nama" value="{{ $data->nama }}" placeholder="Nama Lengkap" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="number" name="nim" id="nim" value="{{ $data->nim }}" placeholder="Nomor induk mahasiswa" class="form-control">
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="text" name="prodi" id="prodi" value="{{ $data->prodi }}" placeholder="Program Studi" class="form-control">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" value="{{ $data->email }}" placeholder="Email" class="form-control">
        </div>
        <div class="mb-3">
          <label for="nohp" class="form-label">No HandPhone</label>
          <input type="text" name="nohp" id="nohp" value="{{ $data->nohp }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
    </div>
  </div>
</div>
@endsection