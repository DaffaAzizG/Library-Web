@extends('template.layout')


@section('title', 'Login - Web Perpustakaan')

@section('main')
<link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="Web_Perpustakaan/login.css" />
    <section class="login-container">
        <div class="card shadow-lg">
            <div class="card-header">
                <img src="{{ asset('img/book.png') }}" alt="..." class="img-logo">
                <h3 class="text-center">Login - Web Perpustakaan</h3>
            </div>
            <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username" class="form-label">Username *</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username Anda" required>
    </div>
    <div class="form-group my-3">
        <label for="password" class="form-label">Password *</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda" required>
    </div>
    <div class="form-group my-3">
        <button class="btn btn-primary" type="submit">Login</button>
    </div>
</form>
            </div>
            <div class="card-footer">
                <a href="/regist"><p class="text-primary text-center">Tidak punya akun? Silahkan mendaftar</p></a>
            </div>
        </div>
    </section>
@endsection