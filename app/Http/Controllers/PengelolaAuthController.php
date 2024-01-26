<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengelolaAuthController extends Controller
{
    public function index()
    {
        return view('pages.pengelola.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()) {
            }
        }

        return redirect()->route('login-pengelola');
    }
}
