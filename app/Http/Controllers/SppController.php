<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use Laraindo\RupiahFormat;

class SppController extends Controller
{
    public function show()
    {
        $spp = Spp::all();


        return view('spp.spp', compact('spp'));
    }

    public function add(Request $request)
    {

        $spp = Spp::all();
        $tahun = $request->tahun;
        $nominal = $request->nominal;
        if (Spp::where([['tahun', '=', $tahun], ['nominal', '=', $nominal]])->exists()) {
            return redirect('spp')->with('message', 'Data sudah ada');
        } else {
            Spp::create([
                'tahun' => $request->tahun,
                'nominal' => $request->nominal,
            ]);

            return redirect('spp');
        }
    }

    public function edit($id)
    {
        $data = Spp::find($id);
        return view('spp.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $spp = Spp::find($id);
        $spp->tahun = $request->tahun;
        $spp->nominal = $request->nominal;

        $spp->update();

        return redirect('spp');
    }

    public function delete($id)
    {
        $spp = Spp::find($id)->delete();

        return redirect('spp');
    }
}
