<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategori = KategoriBuku::all();
        $buku = Buku::all()->take(10);

        return view('pages.peminjam.index', [
            'kategori' => $kategori,
            'buku' => $buku,
        ]);
    }
}
