<?php

namespace App\Http\Controllers;

use App\Models\JanjiPeriksa;
use Illuminate\Http\Request;

class JanjiPeriksaController extends Controller
{
    public function index()
    {
        $janji_periksas = JanjiPeriksa::all();
        return view('pasien.janji-periksa.index'
        // , compact('janji-periksa')
    );
    }

    public function create()
    {
        return view('pasien.janji-periksa.create');
    }

    // public function store(Request $request)
    // {
    //     Obat::create([
    //         'nama_obat' => $request->nama_obat,
    //         'kemasan' => $request->kemasan,
    //         'harga' => $request->harga,
    //     ]);

    //     return redirect()->route('dokter.obat.index');
    // }

    // public function edit($id)
    // {
    //     $obat = Obat::findOrFail($id);
    //     return view('dokter.obat.edit', compact('obat'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $obat = Obat::findOrFail($id);
    //     $obat->update([
    //         'nama_obat' => $request->nama_obat,
    //         'kemasan' => $request->kemasan,
    //         'harga' => $request->harga,
    //     ]);

    //     return redirect()->route('dokter.obat.index');
    // }

    // public function destroy($id)
    // {
    //     $obat = Obat::findOrFail($id);
    //     $obat->delete();

    //     return redirect()->route('dokter.obat.index');
    // }
}
