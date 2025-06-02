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
        $request->validate([
            'hari' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
        ]);

        // cek apakah ada jadwal sama
        if (
            JadwalPeriksa::where('id_dokter', Auth::user()->id)
            ->where('hari', $request->hari)
            ->where('jam_mulai', $request->jam_mulai)
            ->where('jam_selesai', $request->jam_selesai)
            ->exists()
        ) {
            return redirect()->route('dokter.jadwal-periksa.create')->withErrors(['Jadwal sudah ada']);
        }

        JadwalPeriksa::create([
            'id_dokter' => Auth::user()->id,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => 0,
        ]);

        return redirect()->route('dokter.jadwal-periksa.index');
    }

    // public function edit($id)
    // {
    //     $jadwalPeriksas = JadwalPeriksa::findOrFail($id);
    //     return view('dokter.jadwal-periksa.create', compact('jadwalPeriksas'));
    // }

    public function update(
        // Request $request, 
        $id)
    {
        $jadwalPeriksa = JadwalPeriksa::findOrFail($id);

        // mengaktifkan
        if($jadwalPeriksa->status == 0)
        {
            JadwalPeriksa::where( 'id_dokter', Auth::user()->id )->update( ['status' => 0] );

            $jadwalPeriksa->status = 1;
            $jadwalPeriksa->save();

            return redirect()->route('dokter.jadwal-periksa.index');
        }
        // me-nonaktifkan
        $jadwalPeriksa->status = 0;
        $jadwalPeriksa->save();

        return redirect()->route('dokter.jadwal-periksa.index');
    }

    public function destroy($id)
    {
        $jadwalPeriksas = JadwalPeriksa::findOrFail($id);
        $jadwalPeriksas->delete();

        return redirect()->route('dokter.jadwal-periksa.index');
    }
}
