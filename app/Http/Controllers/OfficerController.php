<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;

class OfficerController extends Controller
{
    public function show(){
        $petugas = Petugas::all();

        return view('officer.officer', compact('petugas'));
    }
}
