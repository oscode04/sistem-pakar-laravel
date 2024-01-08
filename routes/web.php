<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\konsultasiGejala2Controller;
use App\Http\Controllers\konsultasiGejala3Controller;
use App\Http\Controllers\KonsultasiGejala4Controller;
use App\Http\Controllers\konsultasiGejala5Controller;
use App\Http\Controllers\konsultasiGejala5L2BController;
use App\Http\Controllers\KonsultasiGejala6Controller;
use App\Http\Controllers\konsultasiGejala7Controller;
use App\Http\Controllers\konsultasiGejala7L2Controller;
use App\Http\Controllers\KonsultasiGejala8Controller;
use App\Http\Controllers\KonsultasiGejala9Controller;
use App\Http\Controllers\KonsultasiGejala10Controller;
use App\Http\Controllers\AkhirLine1Controller;
use App\Http\Controllers\AkhirLine2Controller;
use App\Http\Controllers\AkhirLine2aController;
use App\Http\Controllers\AkhirLine2bController;
use App\Http\Controllers\AkhirLine2cController;
use App\Http\Controllers\InputPenyakitController;
use App\Http\Controllers\InputGejalaController;
use App\Http\Controllers\InputSolusiController;
use App\Http\Controllers\AntraknosaController;
use App\Http\Controllers\PhytopthoraController;


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
Route::get('/information', [InformationController::class, 'index'])->name("information");

// ini untuk pertanyaan pertama
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name("konsultasi");
Route::post('gejala-awal/store-answer', [KonsultasiController::class, 'storeAnswer'])->name('gejala-awal.store-answer');
// Route::post('/konsultasi/store', [KonsultasiController::class, 'storeAnswer'])->name("store-answer");

// line 1
// gejala 3
Route::get('/konsultasi-gejala-3', [konsultasiGejala3Controller::class, 'index'])->name("gejala-3.konsultasi-gejala-3");
Route::post('gejala-3/store-answer', [konsultasiGejala3Controller::class, 'storeAnswer'])->name("gejala-3.store-answer");
// gejala 5
Route::get('/konsultasi-gejala-5', [konsultasiGejala5Controller::class, 'index'])->name("gejala-5.konsultasi-gejala-5");
Route::post('gejala-5/store-answer', [konsultasiGejala5Controller::class, 'storeAnswer'])->name("gejala-5.store-answer");
// gejala 7
Route::get('/konsultasi-gejala-7', [konsultasiGejala7Controller::class, 'index'])->name("gejala-7.konsultasi-gejala-7");
Route::post('gejala-7/store-answer', [konsultasiGejala7Controller::class, 'storeAnswer'])->name("gejala-7.store-answer");
// akhir line 1
Route::get('/akhir-line-1/kesimpulan', [AkhirLine1Controller::class, 'index'])->name("akhir-line-1.kesimpulan");
Route::get('/back-to-landing-page', [AkhirLine1Controller::class, 'backToLandingPage'])->name("back-to-landing-page");


// line 2
// gejala 2
Route::get('/konsultasi-gejala-2', [konsultasiGejala2Controller::class, 'index'])->name("gejala-2.konsultasi-gejala-2");
Route::post('gejala-2/store-answer', [konsultasiGejala2Controller::class, 'storeAnswer'])->name("gejala-2.store-answer");
// gejala 4
Route::get('/konsultasi-gejala-4', [KonsultasiGejala4Controller::class, 'index'])->name("gejala-4.konsultasi-gejala-4");
Route::post('gejala-4/store-answer', [KonsultasiGejala4Controller::class, 'storeAnswer'])->name("gejala-4.store-answer");
// gejala 7 line 2
Route::get('/konsultasi-gejala-7-line-2', [KonsultasiGejala7L2Controller::class, 'index'])->name("gejala-7-line-2.konsultasi-gejala-7");
Route::post('gejala-7-line-2/store-answer', [KonsultasiGejala7L2Controller::class, 'storeAnswer'])->name("gejala-7-line-2.store-answer");
// akhir line 2
Route::get('/akhir-line-2/kesimpulan', [AkhirLine2Controller::class, 'index'])->name("akhir-line-2.kesimpulan");
Route::get('/back-to-landing-page', [AkhirLine1Controller::class, 'backToLandingPage'])->name("back-to-landing-page");

// line 2 A
// gejala 6
Route::get('/konsultasi-gejala-6', [KonsultasiGejala6Controller::class, 'index'])->name("gejala-6.konsultasi-gejala-6");
Route::post('gejala-6/store-answer', [KonsultasiGejala6Controller::class, 'storeAnswer'])->name("gejala-6.store-answer");
// gejala 8
Route::get('/konsultasi-gejala-8', [KonsultasiGejala8Controller::class, 'index'])->name("gejala-8.konsultasi-gejala-8");
Route::post('gejala-8/store-answer', [KonsultasiGejala8Controller::class, 'storeAnswer'])->name("gejala-8.store-answer");
// akhir line 2 A
Route::get('/akhir-line-2-a/kesimpulan', [AkhirLine2aController::class, 'index'])->name("akhir-line-2-a.kesimpulan");
Route::get('/back-to-landing-page', [AkhirLine1Controller::class, 'backToLandingPage'])->name("back-to-landing-page");

// line 2 b
// gejala 5 line b
Route::get('/konsultasi-gejala-5-line-b', [konsultasiGejala5L2BController::class, 'index'])->name("gejala-5-line-2-b.konsultasi-gejala-5");
Route::post('gejala-5-line-b/store-answer', [konsultasiGejala5L2BController::class, 'storeAnswer'])->name("gejala-5-line-2-b.store-answer");
// akhir line 2 B
Route::get('/akhir-line-2-b/kesimpulan', [AkhirLine2bController::class, 'index'])->name("akhir-line-2-b.kesimpulan");
Route::get('/back-to-landing-page', [AkhirLine1Controller::class, 'backToLandingPage'])->name("back-to-landing-page");

// line 2 c
// gejala 9
Route::get('/konsultasi-gejala-9-line-2-c', [KonsultasiGejala9Controller::class, 'index'])->name("gejala-9-line-2-c.konsultasi-gejala-9");
Route::post('gejala-9-line-2-c/store-answer', [KonsultasiGejala9Controller::class, 'storeAnswer'])->name("gejala-9-line-2-c.store-answer");
// gejala 10
Route::get('/konsultasi-gejala-10-line-2-c', [KonsultasiGejala10Controller::class, 'index'])->name("gejala-10-line-2-c.konsultasi-gejala-10");
Route::post('gejala-10-line-2-c/store-answer', [KonsultasiGejala10Controller::class, 'storeAnswer'])->name("gejala-10-line-2-c.store-answer");
// akhir line 2 B
Route::get('/akhir-line-2-c/kesimpulan', [AkhirLine2cController::class, 'index'])->name("akhir-line-2-c.kesimpulan");
Route::get('/back-to-landing-page', [AkhirLine1Controller::class, 'backToLandingPage'])->name("back-to-landing-page");

// routing information
// penyakit 1
Route::get('/antraknosa', [AntraknosaController::class, 'index'])->name("antraknosa");
Route::get('/phytopthora', [PhytopthoraController::class, 'index'])->name("phytopthora");







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