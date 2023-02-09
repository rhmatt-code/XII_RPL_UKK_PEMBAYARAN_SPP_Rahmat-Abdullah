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

class StudentController extends Controller
{
    public function show(Request $request)
    {
        $siswa = Siswa::with('kelas', 'spp')->get();
        $kelas = Kelas::all();
        $spp = Spp::all();

        return view('student.student', compact('siswa', 'kelas', 'spp'));
    }

    public function add(Request $request)
    {
        $siswa = Siswa::all();
        $nisn = $request->nisn;
        $nis = $request->nis;
        if (Siswa::where([['nisn', '=', $nisn], ['nis', '=', $nis]])->exists()) {
            return redirect('siswa')->with('message', 'Data sudah ada');
        } else {
            Siswa::create([
                'nisn' => $request->nisn,
                'nis' => $request->nis,
                'nama' => $request->nama,
                'id_kelas' => $request->kelas,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'id_spp' => $request->spp,

            ]);

            return redirect('siswa');
        }
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('student.edit', compact('siswa'));
    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->nisn = $request->nisn;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->kelas;
        $siswa->no_telp = $request->no_telp;
        $siswa->alamat = $request->alamat;
        $siswa->id_spp = $request->spp;


        $siswa->update();

        return redirect('siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::find($id)->delete();

        return redirect('siswa');
    }
}
