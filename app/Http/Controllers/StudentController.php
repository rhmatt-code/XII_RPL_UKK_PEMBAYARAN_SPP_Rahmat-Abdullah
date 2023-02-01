<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\Spp;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function show(Request $request)
    {
        $siswa = Siswa::all();

        if ($siswa->contains('name')) {
            request()->validate([
                'nisn' => ['required', 'string'],
                'nis' => ['required', 'string'],
                'name' => ['required', 'string'],
                'class' => ['required'],
                'address' => ['required', 'string'],
                'phone' => ['required', 'string'],
            ]);
            siswa::create([
                'nisn' => $request->nisn,
                'nis' => $request->nis,
                'name' => $request->name,
                'class' => $request->class,
                'address' => $request->address,
                'phone' => $request->no_telp,
            ]);

            return redirect('student.student');
        };

        return view('student.student', compact('siswa'));
    }
}
