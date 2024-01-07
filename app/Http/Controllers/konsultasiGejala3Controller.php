<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use Illuminate\Support\Facades\Session;

class konsultasiGejala3Controller extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();

        return view('pages.line1.consultation-gejala-3', ['symptoms' => $symptoms]);
    }
    // public function halamanKonsultasiGejala3()
    // {
    //     // Mengambil nilai jawaban dari session
    //     $userAnswer = Session::get('user_answer');

    //     return view('pages.line1.consultation-gejala-3', ['userAnswer' => $userAnswer]);
    // }
}
