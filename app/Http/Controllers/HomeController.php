<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = KategoriBuku::all();

        return view('pages.peminjam.index', [
            'kategori' => $kategori
        ]);
    }
}
