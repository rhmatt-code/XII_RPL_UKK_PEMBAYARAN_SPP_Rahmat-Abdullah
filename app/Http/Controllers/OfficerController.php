<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;

class OfficerController extends Controller
{
    public function show()
    {
        $petugas = Petugas::all();

        return view('officer.petugas', compact('petugas'));
    }

    public function add(Request $request)
    {
        $petugas = Petugas::all();
        $username = $request->nisn;
        if (Petugas::where([['username', '=', $username]])->exists()) {
            return redirect('petugas')->with('message', 'Data sudah ada');
        } else {
            Petugas::create([
                'username' => $request->username,
                'password' => $request->password,
                'nama_petugas' => $request->nama_petugas,
                'level' => $request->level,

            ]);

            return redirect('petugas');
        }
    }

    public function edit($id)
    {
        $petugas = Petugas::find($id);
        return view('officer.edit', compact('petugas'));
    }

    public function update(Request $request, $id)
    {
        $petugas = Petugas::find($id);
        $petugas->username = $request->username;
        $petugas->password = $request->password;
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->level = $request->level;



        $petugas->update();

        return redirect('petugas');
    }

    public function delete($id)
    {
        $petugas = Petugas::find($id)->delete();

        return redirect('petugas');
    }
}
