<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use Illuminate\Support\Facades\Session;

class konsultasiGejala5Controller extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();

        return view('pages.line1.consultation-gejala-5', ['symptoms' => $symptoms]);
    }
    // simpan data ke session
    public function storeAnswer(Request $request)
    {
        $answer = $request->input('answer');

        // Menyimpan nilai dari input ke dalam session
        Session::put('user_answer', $answer);

         return redirect()->route('gejala-7.konsultasi-gejala-7');
    }
}
