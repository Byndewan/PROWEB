<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminTrashController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TugasUserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'authenticate'])->name('admin.authenticate');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('admin')->name('admin.dashboard');

Route::get('/admin/progress', [ProgressController::class, 'index'])->middleware('admin')->name('admin.progress');
Route::get('/admin/progress/create', [ProgressController::class, 'create'])->middleware('admin')->name('admin.progress.create');
Route::post('/admin/progress/create/store', [ProgressController::class, 'store'])->name('admin.progress.create.store');
Route::get('/admin/progress/edit/{id}', [ProgressController::class, 'edit'])->middleware('admin')->name('admin.progress.edit');
Route::post('/admin/progress/edit/update/{id}', [ProgressController::class, 'update'])->name('admin.progress.edit.update');
Route::get('/admin/progress/destroy/{id}', [ProgressController::class, 'destroy'])->middleware('admin')->name('admin.progress.destroy');

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('front.dashboard');
Route::get('/profile', [FrontController::class, 'profile'])->name('front.profile');
Route::get('/laporan', [FrontController::class, 'laporan'])->name('front.laporan');



Route::get('/login', [FrontController::class, 'login'])->name('front.login');
Route::post('/user/login', [FrontController::class, 'authenticate'])->name('user.authenticate');
Route::get('/logout', [FrontController::class, 'logout'])->name('front.logout');


Route::get('/admin/tugas', [TugasController::class, 'index'])->middleware('admin')->name('admin.tugas');
Route::post('/admin/tugas/store', [TugasController::class, 'store'])->name('admin.tugas.store');
Route::get('/admin/tugas/destroy/{id}', [TugasController::class, 'destroy'])->middleware('admin')->name('admin.tugas.destroy');

Route::get('/admin/tugas/user', [TugasUserController::class, 'index'])->middleware('admin')->name('admin.tugas.user');
Route::post('/admin/tugas/user/store', [TugasUserController::class, 'store'])->name('admin.tugas.user.store');
Route::get('/admin/tugas/user/destroy/{id}', [TugasUserController::class, 'destroy'])->middleware('admin')->name('admin.tugas.user.destroy');

Route::get('/admin/detail/tugas/user/{id}', [TugasUserController::class, 'detail'])->middleware('admin')->name('admin.detail.tugas.user');
Route::post('/admin/detail/tugas/user/store', [TugasUserController::class, 'detailStore'])->name('admin.detail.tugas.user.store');
Route::get('/admin/detail/tugas/user/acc/{id}', [TugasUserController::class, 'detailTugasAcc'])->name('admin.detail.tugas.user.acc');
Route::get('/admin/detail/tugas/destroy/{id}', [TugasUserController::class, 'detaildestroy'])->middleware('admin')->name('admin.detail.tugas.destroy');

Route::get('/admin/tugas/sampah', [AdminTrashController::class, 'tugasSampah'])->name('admin.tugas.sampah');
Route::get('/admin/tugas/sampah/destroy/{id}', [AdminTrashController::class, 'tugasSampahDestroy'])->name('admin.tugas.sampah.destroy');
Route::get('/admin/tugas/sampah/restore/{id}', [AdminTrashController::class, 'tugasSampahRestore'])->name('admin.tugas.sampah.restore');
