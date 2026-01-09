@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
<h1 class="text-center"> Data Mahasiswa</h1>
    <div class="row">
      <a href="/tambahmahasiswa">
        <button type="button" class="btn btn-success">Tambah Data</button>
        <table class="table">
@if ($message = Session::get('success'))

     <script>

        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: '{{ $message }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });


     </script>
@endif
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Email</th>
      <th scope="col">no. Hp</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1 ?>
    @foreach ($data as $mahasiswa)
    <tr>
        <th scope="row"><?php echo $i?></th>
        <td>{{$mahasiswa["nama"]}}</td>
        <td>{{$mahasiswa["nim"]}}</td>
        <td>{{$mahasiswa["prodi"]}}</td>
        <td>{{$mahasiswa["email"]}}</td>
        <td>{{$mahasiswa["nohp"]}}</td>
        <td>
            <a href="tampildata/{{ $mahasiswa['id'] }}" 
            class="btn btn-primary">EDIT</a>
            <a href="/deletedata/{{ $mahasiswa['id'] }}" class="btn btn-danger delete"
             data-id="{{ $mahasiswa['id'] }}" data-nama="{{
              $mahasiswa['nama'] }}">HAPUS</a>
        </td>
        <?php $i++?>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"
 integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
 crossorigin="anonymous"></script>

<script>

$(document).ready(function() {
  $('.delete').click( function(e){
    e.preventDefault();
           
    let id = $(this).attr('data-id');
    let nama = $(this).attr('data-nama');
    
    Swal.fire({
    title:"Tenane Gok?"
    text: "Data " + nama + " bakal dihapus, Yakin?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = "/deletedata/"+id;
    }
  });
  });
});

 </script>

 @endsection