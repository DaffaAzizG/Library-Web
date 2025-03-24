

@extends('template.layout')

@section('title', 'Dashboard - Admin Perpustakaan')

@section('header')
    @include('template.navbar_admin')
@endsection

@section('main')
    <div id="layoutSidenav">
        @include('template.sidebar_admin')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman Dashboard Admin Perpustakaan</li>
                    </ol>
                    <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Halaman Data Buku</li>
                        </ol>
                        <button class="btn btn-primary mb-3">Tambah Buku</button>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis Buku</th>
                                        <th>Penerbit Buku</th>
                                        <th>Tahun Terbit</th>
                                        <th>Kategori Buku</th>
                                        <th>Rak Buku</th>
                                        <th>ISBN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bulan</td>
                                        <td>Tere Liye</td>
                                        <td>Gramedia</td>
                                        <td>2018</td>
                                        <td>Fiksi</td>
                                        <td>L-4</td>
                                        <td>12345464564564</td>
                                        <td>
                                            <button class="btn btn-warning">Update</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Web Perpustakaan 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
