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
                        <h1 class="mt-4">Update Peminjaman</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Update Data Peminjaman
                            </li>
                        </ol>
                        <form action="">
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="peminjaman_id"
                                        class="form-label"
                                        >Peminjaman ID *</label
                                    >
                                    <input
                                        type="text"
                                        name="peminjaman_id"
                                        id="peminjaman_id"
                                        class="form-control"
                                        placeholder="Masukkan ID peminjaman"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="user" class="form-label"
                                        >User *</label
                                    >
                                    <input
                                        type="text"
                                        name="user"
                                        id="user"
                                        class="form-control"
                                        placeholder="Masukkan nama user"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="tanggal_pinjam"
                                        class="form-label"
                                        >Tanggal Pinjam *</label
                                    >
                                    <input
                                        type="date"
                                        name="tanggal_pinjam"
                                        id="tanggal_pinjam"
                                        class="form-control"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="tanggal_kembali"
                                        class="form-label"
                                        >Tanggal Kembali *</label
                                    >
                                    <input
                                        type="date"
                                        name="tanggal_kembali"
                                        id="tanggal_kembali"
                                        class="form-control"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="status" class="form-label"
                                        >Status *</label
                                    >
                                    <select
                                        name="status"
                                        id="status"
                                        class="form-control"
                                    >
                                        <option selected>-Pilih Status-</option>
                                        <option value="Dikembalikan">
                                            Dikembalikan
                                        </option>
                                        <option value="Belum Dikembalikan">
                                            Belum Dikembalikan
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="note" class="form-label"
                                        >Note</label
                                    >
                                    <input
                                        type="text"
                                        name="note"
                                        id="note"
                                        class="form-control"
                                        placeholder="Masukkan catatan jika ada"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="denda" class="form-label"
                                        >Denda *</label
                                    >
                                    <input
                                        type="number"
                                        name="denda"
                                        id="denda"
                                        class="form-control"
                                        placeholder="Masukkan denda (jika ada)"
                                    />
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4"></div>
                            </div>
                        </form>
                        <a href="admin_borrowing.html"
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