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
                        <h1 class="mt-4">Update Penulis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Update Data Penulis
                            </li>
                        </ol>
                        <form action="">
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="id_penulis" class="form-label"
                                        >ID Penulis *</label
                                    >
                                    <input
                                        type="text"
                                        name="id_penulis"
                                        id="id_penulis"
                                        class="form-control"
                                        placeholder="Masukkan ID Penulis"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="nama_penulis" class="form-label"
                                        >Nama Penulis *</label
                                    >
                                    <input
                                        type="text"
                                        name="nama_penulis"
                                        id="nama_penulis"
                                        class="form-control"
                                        placeholder="Masukkan Nama Penulis"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="tempat_lahir" class="form-label"
                                        >Tempat Lahir *</label
                                    >
                                    <input
                                        type="text"
                                        name="tempat_lahir"
                                        id="tempat_lahir"
                                        class="form-control"
                                        placeholder="Masukkan Tempat Lahir"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="tanggal_lahir"
                                        class="form-label"
                                        >Tanggal Lahir *</label
                                    >
                                    <input
                                        type="date"
                                        name="tanggal_lahir"
                                        id="tanggal_lahir"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4"></div>
                            </div>
                        </form>
                        <a href="admin_Author.html"
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