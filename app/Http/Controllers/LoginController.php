<?php

namespace App\Http\Controllers;

use App\Models\Petugas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $data = Auth::guard('petugas')->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->remember
        );

        if ($data) {
            // $request->session()->regenerate();
            // if (Auth::user()->level == 'admin') {
            //     return redirect('home')->with('admin');
            // } else if (Auth::user()->level == 'petugas') {
            //     return redirect('home');
            // }
            var_dump('benar');
        }
    }
    public function actionlogout()
    {
        Auth::logout();

        return redirect('login');
    }
}
