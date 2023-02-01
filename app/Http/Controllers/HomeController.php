<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\Spp;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function show()
    {
        $siswa = siswa::all();
        return view('home', compact('siswa'));
    }
}
