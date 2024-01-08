<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diseases;

class RembahSemaiController extends Controller
{
    public function index()
    {
        // Contoh untuk mengambil nama gejala terkait dengan sebuah penyakit
        $diseaseId = 3; // Ganti dengan ID penyakit yang diinginkan
        $disease = Diseases::find($diseaseId);

        if ($disease) {
            $symptoms = $disease->symptoms()->pluck('symptoms');
            // $symptoms akan berisi koleksi nama gejala yang terkait dengan penyakit
        }

        if ($disease) {
            $solutions = $disease->solutions()->pluck('solution');
            // $symptoms akan berisi koleksi nama gejala yang terkait dengan penyakit
        }

        if ($disease) {
            $diseaseName = $disease->disease_name;
        }

        if ($disease) {
            $diseaseDetail = $disease->disease_detail;
        }

        return view('pages.penyakit.rembah-semai', compact('symptoms', 'solutions', 'diseaseName', 'diseaseDetail'));
    }
}
