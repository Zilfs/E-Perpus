<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaAuthController extends Controller
{
    public function index()
    {
        return view('pages.pengelola.login');
    }
}
