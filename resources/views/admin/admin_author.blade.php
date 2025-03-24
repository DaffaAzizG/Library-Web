@extends('template.layout')

@section('title', 'Dashboard - Admin Perpustakaan')

@section('header')
    @include('template.navbar_admin')
@endsection

@section('main')
<div class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin_dashboard.html"
                >Admin Dashboard</a
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
        @include('template.sidebar_admin')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Penulis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                Halaman Data Penulis
                            </li>
                        </ol>
                        <a href="admin_add_author.html"
                            ><button class="btn btn-primary mb-3">
                                Tambah Penulis
                            </button></a
                        >
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Penulis</th>
                                        <th>Nama Penulis</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tere Liye</td>
                                        <td>Lahat</td>
                                        <td>21 Mei 1979</td>
                                        <td>
                                            <a href="admin_update_author.html"
                                                ><button
                                                    class="btn btn-warning"
                                                >
                                                    Update
                                                </button></a
                                            >
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