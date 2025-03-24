<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookInputController;
use App\Http\Controllers\PagesController;

// Menangani GET request untuk menampilkan form registrasi
//Route::get('/register', [RegisterController::class, 'show'])->name('register');

// Menangani POST request untuk memproses data form
//Route::post('/register', [RegisterController::class, 'register']);


Route::get('/', function () {
    return view('webchallange');
});

/*Route::get('/submit', function () {
    return response('<h1>The Form is Submited!</h1>');
});
Route::get('/registerr', function () {
    return view('challange_mdl2');
});*/
Route::get('/register', [RegisterController::class, 'create'])->name('public.register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('public.register.store');
/*Route::controller(HomeController::class)->group(function () {
    Route::get('/{user_name}', function($user_name){
        return 'Route dengan prefix user';
        $user_name;
    });
});*/

/*Route::get('/', function (Request $request) {
    $nama = $request->query('nama');
    return 'Route dengan prefix user dengan query parameter nama ' . $nama;
});*/

Route::controller(RegisterController::class)->group(function () {
    Route::get('/', 'index');
});


Route::get('/BookDataInput', [BookInputController::class, 'create'])->name('BookInput.create');
Route::post('/BookDataInput', [BookInputController::class, 'store'])->name('BookInput.store');

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/login', [PagesController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [PagesController::class, 'login'])->name('login');

Route::get('/regist', [PagesController::class, 'registrasi']);
Route::get('/admin-book', [PagesController::class, 'adminBook']);

Route::get('/add-author', [PagesController::class, 'add_author']);

// Route siswa
Route::get('/siswa-book', [PagesController::class, 'siswa_book']);
Route::get('/siswa-borrowing', [PagesController::class, 'siswa_borrow']);
Route::get('/siswa-add-borrowing', [PagesController::class, 'siswa_add_borrow']);
Route::get('/siswa-dashboard', [PagesController::class, 'siswa_dashboard'])-> name('siswa_dashboard');
Route::get('/siswa-setting', [PagesController::class, 'siswa_setting']);

// Route Admin
Route::get('/admin-book', [PagesController::class, 'book']);
Route::get('/admin-borrowing', [PagesController::class, 'borrow']);
Route::get('/admin-author', [PagesController::class, 'author']);
Route::get('/admin-dashboard', [PagesController::class, 'dashboard'])-> name('dashboard');
Route::get('/admin-category', [PagesController::class, 'category']);
Route::get('/admin-publosher', [PagesController::class, 'publisher']);
Route::get('/admin-setting', [PagesController::class, 'setting']);
Route::get('/admin-add-borrowing', [PagesController::class, 'add_borrow']);
Route::get('/admin-add-author', [PagesController::class, 'add_author']);
Route::get('/admin-add-book', [PagesController::class, 'add_book']);
// Route::get('/admin-add-publisher', [PagesController::class, 'add_publisher']);
Route::get('/admin-update-author', [PagesController::class, 'up_author']);
Route::get('/admin-update-book', [PagesController::class, 'up_book']);
Route::get('/admin-update-borrowing', [PagesController::class, 'up_borrow']);
Route::get('/admin-publisher', [PagesController::class, 'up_publisher']);

// Route Controller
Route::post('/admin-add-publisher', [PenerbitController::class, 'create'])->name('actio
n.createpenerbit');
Route::get('/admin-add-publisher', [PagesController:: class, 'create_penerbit'])->name
('create_penerbit');