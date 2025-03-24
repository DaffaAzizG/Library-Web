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
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Siswa
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <!-- Form Inputan -->
                        <h2 class="mt-4">Form Inputan</h2>
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label"
                                    >Nama</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nama"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label"
                                    >Username</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="username"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label"
                                    >Alamat</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="alamat"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label"
                                    >Nomor HP</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nomor_hp"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    required
                                />
                            </div>
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                        </form>
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