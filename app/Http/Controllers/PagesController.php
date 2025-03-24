<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function showLoginForm()
    {
        return view('public.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Proses login sederhana, ganti ini dengan proses otentikasi sesuai kebutuhan Anda
        if ($request->username == 'admin' && $request->password == 'admin12345') {
            return redirect()->route('dashboard');
        } else {
            session(['username' => $request->username]);
            return redirect()->route('siswa_dashboard');
        }
    }

    

    public function registrasi(){
        return view('public.register');
    }

    // Admin Controller
    public function dashboard() {
        return view('admin.dashboard')->with('mode', 'username');

    }

    public function add_author(){
        return view('admin.admin_add_author');
    }

    public function add_book() {
        return view('admin.admin_add_book');

    }
    public function add_borrow(){
        return view('admin.admin_add_borrowing');
    }

    public function add_publisher(){
        return view('admin.admin_add_publisher');
    }
    public function author() {
        return view('admin.admin_author');

    }
    public function book(){
        return view('admin.admin_book');
    }

    public function borrow(){
        return view('admin.admin_borrowing');
    }

    public function category() {
        return view('admin.category');

    }
    public function publisher(){
        return view('admin.admin_publisher');
    }

    public function setting(){
        return view('admin.admin_setting');
    }
    public function up_author() {
        return view('admin.admin_update_author');

    }
    public function up_book(){
        return view('admin.admin_update_book');
    }

    public function up_borrow(){
        return view('admin.admin_update_borrowing');
    }

    public function up_publisher() {
        return view('admin.admin_update_publisher');

    }
    public function adminBook(){
        return view('admin.admin_book');
    }

    // Siswa Controller
    
    public function siswa_book(){
        return view('siswa.siswa_book');
    }
    public function siswa_add_borrow(){
        return view('siswa.siswa_add_borrowing');
    }
    public function siswa_borrow(){
        return view('siswa.siswa_borrowing');
    }
    public function siswa_dashboard(){
        $username = session('username');
        return view('siswa.siswa_dashboard', compact('username'));
    }
    public function siswa_setting(){
        return view('siswa.siswa_setting');
    }
}