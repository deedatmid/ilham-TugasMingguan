@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Akun</h3>
        <a href="{{ route('register') }}" class="btn btn-success">Buat Akun Baru</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>Terdaftar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->last_login_at ? $user->last_login_at->format('Y-m-d H:i') : '-' }}</td>
                            <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : '-' }}</td>
                                <td>
                                    @if (config('app.env') === 'local')
                                        <form method="POST" action="{{ route('users.impersonate', $user->id) }}" style="display:inline">
                                            @csrf
                                            <button class="btn btn-sm btn-outline-primary" type="submit">Masuk sebagai</button>
                                        </form>
                                    @endif
                                </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Belum ada akun terdaftar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
