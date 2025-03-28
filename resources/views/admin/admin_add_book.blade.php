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
        </nav>
        <div id="layoutSidenav">
        @include('template.sidebar_admin')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Buku</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Tambah Data Buku
                            </li>
                        </ol>
                        <form action="">
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="judul_buku" class="form-label"
                                        >Judul Buku *</label
                                    >
                                    <input
                                        type="text"
                                        name="judul_buku"
                                        id="judul_buku"
                                        class="form-control"
                                        placeholder="Masukkan judul buku"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="penulis_buku" class="form-label"
                                        >Penulis Buku *</label
                                    >
                                    <select
                                        name="penulis_buku"
                                        id="penulis_buku"
                                        class="form-control"
                                    >
                                        <option selected>
                                            -Pilih Penulis Buku-
                                        </option>
                                        <option value="Tere Liye">
                                            Tere Liye
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="penerbit_buku"
                                        class="form-label"
                                        >Penerbit Buku *</label
                                    >
                                    <select
                                        name="penerbit_buku"
                                        id="penerbit_buku"
                                        class="form-control"
                                    >
                                        <option selected>
                                            -Pilih Penerbit Buku-
                                        </option>
                                        <option value="Gramedia">
                                            Gramedia
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="tahun_terbit" class="form-label"
                                        >Tahun Terbit *</label
                                    >
                                    <input
                                        type="text"
                                        name="tahun_terbit"
                                        id="tahun_terbit"
                                        class="form-control"
                                        placeholder="Masukkan tahun terbit"
                                    />
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label
                                        for="kategori_buku"
                                        class="form-label"
                                        >Kategori Buku *</label
                                    >
                                    <select
                                        name="kategori_buku"
                                        id="kategori_buku"
                                        class="form-control"
                                    >
                                        <option selected>
                                            -Pilih Kategori Buku-
                                        </option>
                                        <option value="Fiksi">Fiksi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="rak_buku" class="form-label"
                                        >Rak Buku *</label
                                    >
                                    <select
                                        name="rak_buku"
                                        id="rak_buku"
                                        class="form-control"
                                    >
                                        <option selected>
                                            -Pilih Rak Buku-
                                        </option>
                                        <option value="4-L">4-L</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="isbn" class="form-label"
                                        >Nomor ISBN *</label
                                    >
                                    <input
                                        type="text"
                                        name="isbn"
                                        id="isbn"
                                        class="form-control"
                                        placeholder="Masukkan nomor ISBN"
                                    />
                                </div>
                            </div>
                            <div class="row my-3"></div>
                        </form>
                        <div class="col-12 col-md-4">
                            <a href="admin_book.html">
                                <button class="btn btn-primary">
                                    Tambahkan
                                </button>
                            </a>
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