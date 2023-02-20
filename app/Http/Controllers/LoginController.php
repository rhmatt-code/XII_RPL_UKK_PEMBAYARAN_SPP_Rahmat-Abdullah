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
            if(Auth::user()->level == 'admin'){
                var_dump('ini admin');
            }elseif(Auth::user()->level == 'petugas'){
                var_dump('ini petugas');
            }
        }
    }
    public function actionlogout()
    {
        Auth::logout();

        return redirect('login');
    }
}
