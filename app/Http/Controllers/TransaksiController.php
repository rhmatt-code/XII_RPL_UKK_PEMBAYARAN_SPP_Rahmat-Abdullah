<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function show()
    {
        return view('transaksi.transaksi');
    }
}
