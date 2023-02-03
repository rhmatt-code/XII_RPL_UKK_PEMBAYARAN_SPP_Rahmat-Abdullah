<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function editclass($id)
    {
        $data = DB::table('kelas')->where('id_kelas', $id)->first();
        return response()->json($data);
    }


    public function addclass(Request $request)
    {
        $kelas = kelas::all();
        $nama_kelas = $request->nama_kelas;
        $jurusan = $request->kompetensi_keahlian;
        if (kelas::where([['nama_kelas', '=', $nama_kelas], ['kompetensi_keahlian', '=', $jurusan]])->exists()) {
            return redirect('class')->with('message', 'Data sudah ada');
        } else {
            Kelas::create([
                'nama_kelas' => $request->nama_kelas,
                'kompetensi_keahlian' => $request->kompetensi_keahlian,
            ]);

            return redirect('class');
        }
    }
}
