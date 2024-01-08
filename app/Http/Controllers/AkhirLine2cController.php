<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Diseases;
use Illuminate\Support\Facades\Session;

class AkhirLine2cController extends Controller
{
    public function index()
    {
        // Mengambil nilai jawaban dari session
        $userAnswers = Session::get('user_answer', []);
        $diseases = Diseases::where('disease_code', 'P4')->get();

        foreach ($diseases as $disease) {
            // Ambil penyakit berdasarkan ID
            $currentDisease = Diseases::find($disease->id_disease);

            // Mengambil solusi untuk penyakit ini
            $solutions = $currentDisease->solutions;

            // Lakukan sesuatu dengan solusi-solusi ini...
        }

        
        return view('pages.line2.line2b.akhir-line-2-b', compact('userAnswers', 'diseases', 'solutions'));
    }

    public function backToLandingPage()
    {
        // Menghapus seluruh data dari session
        session()->flush();

        // Redirect ke halaman landing page atau halaman lainnya
        return redirect()->route('landing-page');
    }

    public function retrieveSolutions($idDisease)
    {
        $disease = Disease::find($idDisease);

        if (!$disease) {
            abort(404); // Handle jika penyakit tidak ditemukan
        }

        $solutions = $disease->solutions; // Mengambil solusi berdasarkan relasi

        return view('pages.line1.akhir-line-1', ['solutions' => $solutions, 'userAnswers' => $userAnswers]);
    }
}
