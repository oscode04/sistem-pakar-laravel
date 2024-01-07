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
        $userAnswer = Session::get('user_answer');
        return view('pages.line1.akhir-line-1',  ['userAnswer' => $userAnswer]);
    }
}
