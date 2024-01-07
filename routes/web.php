<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\InputPenyakitController;
use App\Http\Controllers\InputGejalaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index'])->name("landing-page");

Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name("konsultasi");

// route input penyakit
Route::get('admin/input-penyakit', [InputPenyakitController::class, 'index'])->name('input-penyakit');
Route::get('/admin/create', [InputPenyakitController::class, 'create'])->name('input-penyakit.create');
Route::post('admin/store', [InputPenyakitController::class, 'store'])->name('input-penyakit.store');
Route::delete('admin/destroy/{id_disease}', [InputPenyakitController::class, 'destroy'])->name('input-penyakit.destroy');

// route input gejala
Route::get('admin/input-gejala', [InputGejalaController::class, 'index'])->name('input-gejala');
Route::get('/admin/create', [InputGejalaController::class, 'create'])->name('input-gejala.create');
Route::post('admin/store', [InputGejalaController::class, 'store'])->name('input-gejala.store');
Route::delete('admin/destroy/{id_disease}', [InputGejalaController::class, 'destroy'])->name('input-gejala.destroy');
