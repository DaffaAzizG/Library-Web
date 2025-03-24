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
                        <h1 class="mt-4">Dashboard</h1>
                        <h3 class="mt-4">Selamat Datang, {{ $username }}</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Dashboard Siswa Perpustakaan
                            </li>
                        </ol>
                        <a href="admin_dashboard.html">Pindah ke mode Admin</a>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div
                                        class="card-footer d-flex align-items-center justify-content-between"
                                    >
                                        <a
                                            class="small text-white stretched-link"
                                            href="#"
                                            >View Details</a
                                        >
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div
                                        class="card-footer d-flex align-items-center justify-content-between"
                                    >
                                        <a
                                            class="small text-white stretched-link"
                                            href="#"
                                            >View Details</a
                                        >
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div
                                        class="card-footer d-flex align-items-center justify-content-between"
                                    >
                                        <a
                                            class="small text-white stretched-link"
                                            href="#"
                                            >View Details</a
                                        >
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div
                                        class="card-footer d-flex align-items-center justify-content-between"
                                    >
                                        <a
                                            class="small text-white stretched-link"
                                            href="#"
                                            >View Details</a
                                        >
                                        <div class="small text-white">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
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