<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\konsultasiGejala3Controller;
use App\Http\Controllers\InputPenyakitController;
use App\Http\Controllers\InputGejalaController;
use App\Http\Controllers\InputSolusiController;

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
Route::post('/store-answer', [KonsultasiController::class, 'storeAnswer'])->name('store-answer');
// Route::post('/konsultasi/store', [KonsultasiController::class, 'storeAnswer'])->name("store-answer");
Route::get('/konsultasi-gejala-3', [konsultasiGejala3Controller::class, 'index'])->name("konsultasi-gejala-3");



// route cek session
Route::get('/view-session', function () {
    dump(session()->all());
});


// route admin
Route::prefix('admin')
    ->group(function (){
// route input penyakit
    Route::get('input-penyakit', [InputPenyakitController::class, 'index'])->name('input-penyakit');
    Route::get('penyakit/create', [InputPenyakitController::class, 'create'])->name('input-penyakit.create');
    Route::post('penyakit/store', [InputPenyakitController::class, 'store'])->name('input-penyakit.store');
    Route::delete('penyakit/destroy/{id_disease}', [InputPenyakitController::class, 'destroy'])->name('input-penyakit.destroy');

    // route input gejala
    Route::get('input-gejala', [InputGejalaController::class, 'index'])->name('input-gejala');
    Route::get('gejala/create', [InputGejalaController::class, 'create'])->name('input-gejala.create');
    Route::post('gejala/store', [InputGejalaController::class, 'store'])->name('input-gejala.store');
    Route::delete('gejala/destroy/{id_disease}', [InputGejalaController::class, 'destroy'])->name('input-gejala.destroy');


    // route input solusi
    Route::get('input-solusi', [InputSolusiController::class, 'index'])->name('input-solusi');
    Route::get('solusi/create', [InputSolusiController::class, 'create'])->name('input-solusi.create');
    Route::post('solusi/store', [InputSolusiController::class, 'store'])->name('input-solusi.store');
    Route::delete('solusi/destroy/{id_disease}', [InputSolusiController::class, 'destroy'])->name('input-solusi.destroy');
});