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
        $kelas = kelas::all();



        return view('class.class', compact('kelas'));
    }

    public function addclass(Request $request)
    {
        $kelas = kelas::all();
        $kelas_check = kelas::where('nama_kelas')->first();
        $jurusan = kelas::where('kompetensi_keahlian')->first();
        if($kelas_check === null and $jurusan === null){
            return redirect('class')->with('message', 'Data sudah ada');
        }else{
            Kelas::create([
                'nama_kelas' => $request->nama_kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);
        }

    }
}
