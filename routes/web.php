<?php

use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.index');
});

// Route for siswa
Route::get('/view-siswa', [SiswaController::class, 'index'])->name('siswa.view');

// Route for kelas
Route::get('/view-kelas', [KelasController::class, 'index'])->name('kelas.view');
Route::get('/add-kelas', [KelasController::class, 'add'])->name('kelas.add');
Route::post('/store-kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/edit-kelas/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/update-kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('/delete-kelas/{id}', [KelasController::class, 'delete'])->name('kelas.delete');

// Route for mapel
Route::get('/view-mapel', [MapelController::class, 'index'])->name('mapel.view');
Route::get('/add-mapel', [MapelController::class, 'add'])->name('mapel.add');
Route::post('/store-mapel', [MapelController::class, 'store'])->name('mapel.store');
Route::get('/edit-mapel/{id}', [MapelController::class, 'edit'])->name('mapel.edit');
Route::post('/update-mapel/{id}', [MapelController::class, 'update'])->name('mapel.update');
Route::get('/delete-mapel/{id}', [MapelController::class, 'delete'])->name('mapel.delete');

// Route for kehadiran
Route::get('/view-kehadiran', [KehadiranController::class, 'index'])->name('kehadiran.view');