<?php

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

// Route for mapel
Route::get('/view-mapel', [MapelController::class, 'index'])->name('mapel.view');
