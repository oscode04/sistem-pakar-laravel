<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use Illuminate\Support\Facades\Session;

class KonsultasiController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();

        return view('pages.consultation', ['symptoms' => $symptoms]);
    }

    // simpan data ke session
    public function storeAnswer(Request $request)
    {
        $answer = $request->input('answer');

        // Menyimpan nilai dari input ke dalam session
        Session::put('user_answer', $answer);

         return redirect()->route('konsultasi2');
    }
}
