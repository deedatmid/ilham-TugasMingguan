@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container login-page d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-10 col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header">Login</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autocomplete="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                        </div>
                        @if (!empty($recentAccounts) && $recentAccounts->count())
                            <div class="mt-3">
                                <h6 class="mb-2">Akun terakhir masuk</h6>
                                <ul class="list-group" id="recent-accounts">
                                    @foreach($recentAccounts as $acct)
                                        <li class="list-group-item list-group-item-action recent-account d-flex flex-column" data-email="{{ $acct->email }}">
                                            <div class="fw-bold">{{ $acct->name }}</div>
                                            <div class="small text-muted text-truncate">{{ $acct->email }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="d-grid mt-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="mt-2 text-center">
                            <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.recent-account');
        items.forEach(function (el) {
            el.addEventListener('click', function () {
                const email = this.getAttribute('data-email');
                const emailInput = document.getElementById('email');
                if (emailInput) {
                    emailInput.value = email;
                    emailInput.focus();
                }
            });
        });
    });
</script>
@endpush
@endsection