<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\siswa;
use App\Models\kelas;
use App\Models\petugas;


class SiswaController extends Controller
{
    public function coba(Request $request)
    {
        $datasiswa = siswa::all();
        $datapetugas = petugas::all();
        $datakelas = kelas::all();

    return view('dimas', ['datasiswa' => $datasiswa, 'datapetugas' => $datapetugas, 'datakelas' => $datakelas]);
    }
}
