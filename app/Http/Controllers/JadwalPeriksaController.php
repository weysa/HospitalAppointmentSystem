<?php

namespace App\Http\Controllers;

use App\Models\JadwalPeriksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalPeriksaController extends Controller
{
    public function index()
    {
        $jadwalPeriksas = JadwalPeriksa::where('id_dokter', Auth::user()->id)->get();
        return view('dokter.jadwal-periksa.index', compact('jadwalPeriksas'));
    }

    public function create()
    {
        return view('dokter.jadwal-periksa.create');
    }

    public function store(Request $request)
    {
        JadwalPeriksa::create([
            // 'nama_obat' => $request->nama_obat,
            // 'kemasan' => $request->kemasan,
            // 'harga' => $request->harga,
        ]);

        return redirect()->route('dokter.jadwal-periksa.index');
    }

    // public function edit($id)
    // {
    //     $jadwalPeriksas = JadwalPeriksa::findOrFail($id);
    //     return view('dokter.jadwal-periksa.create', compact('jadwalPeriksas'));
    // }

    public function update(Request $request, $id)
    {
        $jadwalPeriksas = JadwalPeriksa::findOrFail($id);
        $jadwalPeriksas->update([
            // 'nama_obat' => $request->nama_obat,
            // 'kemasan' => $request->kemasan,
            // 'harga' => $request->harga,
        ]);

        return redirect()->route('dokter.jadwal-periksa.create');
    }

    public function destroy($id)
    {
        $jadwalPeriksas = JadwalPeriksa::findOrFail($id);
        $jadwalPeriksas->delete();

        return redirect()->route('dokter.jadwal-periksa.create');
    }
}
