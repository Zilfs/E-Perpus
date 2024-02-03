<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KategoriBukuRelasi;
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

    public function kategori(String $id)
    {
        $data = KategoriBuku::findOrFail($id);
        $buku = KategoriBukuRelasi::with('kategori', 'buku')->where('kategori_id', $id)->get();

        return view('pages.peminjam.kategori', [
            'data' => $data,
            'buku' => $buku,
        ]);
    }
}
