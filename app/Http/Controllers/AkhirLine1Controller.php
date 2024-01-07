<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use Illuminate\Support\Facades\Session;

class AkhirLine1Controller extends Controller
{
    public function index()
    {
        // Mengambil nilai jawaban dari session
        $userAnswers = Session::get('user_answer', []);

        return view('pages.line1.akhir-line-1',  ['userAnswers' => $userAnswers]);
    }
    public function backToLandingPage()
    {
        // Menghapus seluruh data dari session
        session()->flush();

        // Redirect ke halaman landing page atau halaman lainnya
        return redirect()->route('landing-page');
    }
}
