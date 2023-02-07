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
        $siswa = Siswa::all();

        return view('student.student', compact('siswa'));
    }

    
}
