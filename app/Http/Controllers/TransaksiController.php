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
use PDF;


class TransaksiController extends Controller
{
    public function show()
    {
        $pembayaran = Pembayaran::with('siswa','spp')->get();

        return view('transaksi.transaksi', compact('pembayaran'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $results = Siswa::with('spp')->where('nisn', 'LIKE', "%$searchTerm%")->get();
        return response()->json($results);
    }
    public function store(Request $request)
    {
        $transaksi = Pembayaran::all();
        $nisn = $request->nisn;
        $spp = Siswa::where('nisn', $nisn)->get()->last();

        $hasil = Pembayaran::create([
            'id_petugas' => Auth::user()->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => $request->tgl_bayar,
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $spp->id_spp,
            'jumlah_bayar' => $request->jumlah_dibayar,

        ]);
        $id = $hasil->id;
        return redirect("summary/$id");
    }
    public function cetak_pdf($id){
        $transaksi = Pembayaran::with('siswa', 'petugas','spp')->where('id_pembayaran', $id)->get()->last();

        $pdf = PDF::loadview('summary', compact('transaksi'));
    	return $pdf->download('summary.pdf');
    }
    public function laporan()
    {
        
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $transaksi = Pembayaran::whereBetween('tgl_bayar',[$start_date,$end_date])->get();
        } else {
            $transaksi = Pembayaran::with('siswa')->get();
        }
        return view('transaksi.laporan', compact('transaksi'));
    }
}
