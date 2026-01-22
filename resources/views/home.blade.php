@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
	<h2 class="fw-bold">Data Mahasiswa</h2>
	<a href="{{ route('register') }}" class="btn btn-outline-light text-dark"><i class="fas fa-user-plus me-2"></i>Daftar / Login</a>
</div>

@if($mahasiswas->isEmpty())
	<div class="alert alert-info">Belum ada data mahasiswa.</div>
@else
	<div class="row">
		@foreach($mahasiswas as $mhs)
			<div class="col-md-4 mb-3">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title">{{ $mhs->nama }}</h5>
						<p class="card-text"><strong>NIM:</strong> {{ $mhs->nim }}</p>
						<p class="card-text"><strong>Prodi:</strong> {{ $mhs->prodi }}</p>
						<p class="card-text"><strong>Email:</strong> {{ $mhs->email }}</p>
						<p class="card-text"><strong>No HP:</strong> {{ $mhs->nohp }}</p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endif

@endsection