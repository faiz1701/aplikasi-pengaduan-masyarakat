<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::get('/login', function () {
//     return view('Auth.Login.login');
// })->name('login');
// Route::get('/home', [LoginController::class, 'index'])->name('home');
Route::get('/pt', function () {
    return view('admin.pengaduan');
});


Route::get('/', [LoginController::class, 'loginView'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/postRegister', [LoginController::class, 'postRegister'])->name('postRegister');
Route::get('/register', [LoginController::class, 'registerView'])->name('register');


Route::group(['middleware' => ['auth', 'cekauth:masyarakat']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // pengaduan
    Route::get('/index/pengaduan', [PengaduanController::class, 'index'])->name('get.index.pengaduan');
    Route::post('/post/pengaduan', [PengaduanController::class, 'store'])->name('post.store.pengaduan');
    Route::get('/history/pengaduan', [PengaduanController::class, 'historyPengaduan'])->name('get.history.pengaduan');
    Route::get('/detail/history/pengaduan/{id}', [PengaduanController::class, 'detailHistory'])->name('show.history.pengaduan');
});

Route::group(['middleware' => ['auth', 'cekauth:admin,petugas']], function () {

    Route::get('/dashboard', [HomeController::class, 'admin'])->name('dashboard');
    Route::get('/petugas', [PetugasController::class, 'index'])->name('get.petugas');
    Route::get('/petugas-create', [PetugasController::class, 'create'])->name('get.petugas.create');
    Route::post('/petugas-store', [PetugasController::class, 'store'])->name('post.petugas.store');
    Route::get('/pengaduan', [AdminController::class, 'getPengaduan'])->name('get.admin.pengaduan');
    Route::get('/detail-pengaduan-{id}', [AdminController::class, 'detailPengaduan'])->name('get.pengaduan.detail');
});
