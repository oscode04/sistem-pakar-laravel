<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use Illuminate\Support\Facades\Session;

class KonsultasiGejala10Controller extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();

        return view('pages.line2.line2c.consultation-gejala-10', ['symptoms' => $symptoms]);
    }

    // simpan data ke session
    public function storeAnswer(Request $request)
    {
        $answer = $request->input('answer');
    
        // Mendapatkan nilai dari session yang sudah ada atau membuat session baru
        $userAnswers = session()->get('user_answer');
    
        // Memastikan bahwa $userAnswers adalah array
        if (!is_array($userAnswers)) {
            $userAnswers = [];
        }
        
        // Menambahkan nilai baru ke dalam array session
        $userAnswers[] = $answer;
    
        // Menyimpan kembali array yang telah diupdate ke dalam session
        session(['user_answer' => $userAnswers]);

        return redirect()->route('akhir-line-2-c.kesimpulan');    
    }
}
