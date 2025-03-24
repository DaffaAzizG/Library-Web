@extends('template.layout')

@section('title', 'Dashboard - Admin Perpustakaan')

@section('header')
    @include('template.navbar_admin')
@endsection

@section('main')
<div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Admin Dashboard</a>
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
        @include('template.sidebar_admin')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Publisher</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Update Data Pengguna
                            </li>
                        </ol>
                        <form action="">
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="id" class="form-label"
                                        >ID *</label
                                    >
                                    <input
                                        type="text"
                                        name="id"
                                        id="id"
                                        class="form-control"
                                        placeholder="Masukkan ID pengguna"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="nama" class="form-label"
                                        >Nama *</label
                                    >
                                    <input
                                        type="text"
                                        name="nama"
                                        id="nama"
                                        class="form-control"
                                        placeholder="Masukkan nama pengguna"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="alamat" class="form-label"
                                        >Alamat *</label
                                    >
                                    <input
                                        type="text"
                                        name="alamat"
                                        id="alamat"
                                        class="form-control"
                                        placeholder="Masukkan alamat pengguna"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="notelp" class="form-label"
                                        >No. Telp *</label
                                    >
                                    <input
                                        type="text"
                                        name="notelp"
                                        id="notelp"
                                        class="form-control"
                                        placeholder="Masukkan nomor telepon"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="email" class="form-label"
                                        >Email *</label
                                    >
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="Masukkan email pengguna"
                                    />
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4"></div>
                            </div>
                        </form>
                        <a href="admin_publisher.html"
                            ><button class="btn btn-warning">Update</button></a
                        >
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
