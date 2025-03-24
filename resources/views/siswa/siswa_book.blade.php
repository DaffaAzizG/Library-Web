
@extends('template.layout')

@section('title', 'Dashboard - Siswa Perpustakaan')

@section('header')
    @include('template.navbar_siswa')
@endsection

@section('main')
<div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="siswa_dashboard.html"
                >Siswa Dashboard</a
            >
            <!-- Sidebar Toggle-->
            <button
                class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
                id="sidebarToggle"
                href="#!"
            >
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        <div id="layoutSidenav">
            @include('template.sidebar_siswa')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Data Buku
                            </li>
                        </ol>
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
                                            <button class="btn btn-warning">
                                                Update
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div
                            class="d-flex align-items-center justify-content-between small"
                        >
                            <div class="text-muted">
                                Copyright &copy; Web Perpustakaan 2023
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </div>
    @endsection