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
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 1) {
                return redirect("admin");
            } else if (Auth::user()->level == 0) {
                return redirect('resepsionis');
            }
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }
    public function actionlogout()
    {
        Auth::logout();

        return redirect('login');
    }
}
