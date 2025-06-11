<?php

namespace App\Http\Controllers\pasien;

use App\Models\JanjiPeriksa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatPeriksaController extends Controller
{
    public function index()
    {
        $janjiPeriksa = JanjiPeriksa::where('id_pasien', auth()->user()->id)
            ->get();

        return view('pasien.riwayat-periksa.index')->with([
            'janjiPeriksa' => $janjiPeriksa,
        ]);
    }

    public function detail($id)
    {
        $janjiPeriksa = JanjiPeriksa::with(['jadwalPeriksa', 'periksa'])
            ->findOrFail($id);

        return view('pasien.riwayat-periksa.detail')->with([
            'janjiPeriksa' => $janjiPeriksa,
        ]);
    }

    public function riwayat($id)
    {
        $janjiPeriksa = JanjiPeriksa::with(['jadwalPeriksa', 'periksa'])
            ->findOrFail($id);

        return view('pasien.riwayat-periksa.riwayat')->with([
            'janjiPeriksa' => $janjiPeriksa,
        ]);
    }
}
