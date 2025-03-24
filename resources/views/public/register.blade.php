@extends('template.layout')

@section('title', 'Register - Web Perpustakaan')

@section('main')
<link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="Web_Perpustakaan/login.css" />
    <section class="login-container">
        <div class="card shadow-lg">
            <div class="card-header">
                <img src="./img/book.png" alt="..." class="img-logo">
                <h3 class="text-center">Register - Web Perpustakaan</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="nama" class="form-label">nama *</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                        @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-label">Username *</label>
                        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan username Anda" value="{{old ('username')}}">
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat *</label>
                        <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat Anda" value="{{old ('alamat')}}">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail *</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan E-mail Anda" value="{{old ('email')}}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="notelp" class="form-label">No Telp.*</label>
                        <input type="text" name="notelp" id="notelp" class="form-control @error('notelp') is-invalid @enderror" placeholder="Masukkan Nomor Telepon Anda" value="{{old ('notelp')}}">
                        @error('notelp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="password" class="form-label">Password *</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password Anda" value="{{ old('password')}}">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button class="btn btn-primary" type="submit"><a href="/dashboard">Register</a></button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="/login"><p class="text-primary text-center">Punya akun? Silahkan login</p></a>
            </div>
        </div>
    </section>
@endsection
