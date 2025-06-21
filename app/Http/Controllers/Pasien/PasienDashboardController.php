<?php

namespace App\Http\Controllers\Pasien;

use App\Http\Controllers\Controller;
use App\Models\JadwalPeriksa;
use App\Models\JanjiPeriksa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class PasienDashboardController extends Controller
{
    public function index()
    {
        $janjiPeriksas = JanjiPeriksa::where('id_pasien', auth()->user()->id)
            ->whereIn('id_pasien',)
            ->get();

        return view('pasien.dashboard')->with([
            'janjiPeriksas' => $janjiPeriksas,
        ]);
    }
}
