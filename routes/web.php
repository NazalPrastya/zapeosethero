<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSiswaController;
use App\Http\Controllers\DashboardProjectController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/murid', [SiswaController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index'])->name('search');
Route::post('/tambah/saran', [DashboardController::class, 'store'])->name('tambah-saran');





Route::group(['middleware' => ['auth:user']], function () {
    // Ganti Password
    Route::get('/dashboard/change-password', [DashboardSiswaController::class, 'password']);
    Route::put('/dashboard/passsword/update', [DashboardSiswaController::class, 'updatePassword'])->name('ganti-password');
});


Route::group(['middleware' => ['auth:admin']], function () {

    // Tambah siswa
    Route::get('/dashboard/murid', [DashboardSiswaController::class, 'index']);
    Route::get('/dashboard/murid/tambah', [DashboardSiswaController::class, 'create']);
    Route::post('/dashboard/murid/add', [DashboardSiswaController::class, 'store'])->name('tambahSiswa');
    Route::get('/dashboard/murid/edit/{user:id}', [DashboardSiswaController::class, 'edit']);
    Route::delete('/dashboard/murid/{user:id}', [DashboardSiswaController::class, 'destroy']);
    Route::get('/dashboard/saran', [DashboardController::class, 'saran']);
    Route::delete('/dashboard/saran/{saran:id}', [DashboardController::class, 'destroy'])->name('hapus-saran');
});

Route::group(['middleware' => ['auth:user,admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Tambah Edit Hapus Project
    Route::get('/dashboard/project', [DashboardProjectController::class, 'index']);
    Route::get('/dashboard/project/tambah', [DashboardProjectController::class, 'create'])->name('tambah-project');
    Route::post('/dashboard/project/kuy', [DashboardProjectController::class, 'store'])->name('tambahProject');
    Route::get('/dashboard/project/{post:id}/edit', [DashboardProjectController::class, 'edit']);
    Route::patch('/dashboard/project/update/{post:id}', [DashboardProjectController::class, 'update'])->name('updateProject');
    Route::delete('/dashboard/project/{post:id}', [DashboardProjectController::class, 'destroy'])->name('deleteProject');

    // Edit Siswa
    Route::get('/dashboard/siswa/edit/{user:id}', [DashboardSiswaController::class, 'edit']);
    Route::put('/dashboard/siswa/{user:id}', [DashboardSiswaController::class, 'update']);
});
