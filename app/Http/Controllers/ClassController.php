<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\Spp;
use Carbon\Carbon;

class ClassController extends Controller
{
    public function show(Request $request)
    {
        $class = Kelas::all();



        return view('class.class', compact('class'));
    }

    public function addclass(Request $request)
    {

        request()->validate([
            'nama_kelas' => ['required', 'string'],
            'kompentensi_keahlian' => ['required', 'string'],
        ]);
        Kelas::create([
            'nama_kelas' => $request->id_kelas,
            'kompetensi_keahlian' => $request->kompetensi_keahlian,
        ]);

        return redirect('class.class');
    }
}
