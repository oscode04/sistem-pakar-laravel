<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KonsultasiController2 extends Controller
{
    public function halamanDua()
    {
        // Mengambil nilai jawaban dari session
        $userAnswer = Session::get('user_answer');

        return view('pages.consultation2', ['userAnswer' => $userAnswer]);
    }
}
