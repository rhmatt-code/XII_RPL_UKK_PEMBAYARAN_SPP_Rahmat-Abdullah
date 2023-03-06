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
        $data = Auth::attempt(
            [
                'username' => $request->username,
                'password' => $request->password
            ],
            $request->remember
        );

        if ($data) {
            $request->session()->regenerate();
            return redirect('home');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect('home');
    }
}
