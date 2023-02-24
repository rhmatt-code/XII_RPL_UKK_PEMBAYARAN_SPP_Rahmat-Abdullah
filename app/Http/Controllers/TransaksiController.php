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


class TransaksiController extends Controller
{
    public function show()
    {
        $siswa = Siswa::all();
        return view('transaksi.transaksi', compact('siswa'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $results = Siswa::select("nisn", "nama")->where('nisn', 'LIKE', "%$searchTerm%")->get();

        return response()->json($results);
    }
    public function store(Request $request)
    {
        $transaksi = Pembayaran::all();
        $nisn = $request->nisn;
        $spp = Siswa::where('nisn', $nisn)->get()->last();

        Pembayaran::create([
            'id_petugas' => Auth::user()->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $spp->id_spp,
            'jumlah_bayar' => $request->jumlah_dibayar,

        ]);

        return redirect('transaksi');
    }

    public function laporan()
    {
        $transaksi = Pembayaran::with('siswa')->get();
        return view('transaksi.laporan', compact('transaksi'));
    }
}
