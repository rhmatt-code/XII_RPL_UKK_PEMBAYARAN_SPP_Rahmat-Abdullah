<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\Spp;
use App\Models\Petugas;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function show()
    {
        $siswa = siswa::with('kelas','spp')->get();
        $kelas = kelas::all();
        $spp = spp::all();
        $petugas = petugas::all();
        return view('home', compact('siswa','kelas','spp','petugas'));
    }

    public function nisn(Request $request){
        if($request->search){
            $search = $request->search;
            $siswa = Siswa::with('spp')->where('nisn', 'LIKE', "%$search%")->get();
            $pembayaran = Pembayaran::with('petugas')->where('nisn', '=', $search)->get();
            $total = 0;
            foreach ($pembayaran as $data){
            $total += $data->jumlah_bayar;
            }

            return view('ceknisn', compact('siswa', 'pembayaran','total'));
        };

        return view ('ceknisn');
    }
}
