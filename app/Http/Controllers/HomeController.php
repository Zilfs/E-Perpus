<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KategoriBukuRelasi;
use App\Models\UlasanBuku;
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
        $buku = KategoriBukuRelasi::with('buku')->where('kategori_id', $id)->get();

        return view('pages.peminjam.kategori', [
            'data' => $data,
            'buku' => $buku,
        ]);
    }

    public function buku(String $id)
    {
        $buku = Buku::findOrFail($id);
        $ulasan = UlasanBuku::where('buku_id', $id)->get();

        return view('pages.peminjam.buku', [
            'buku' => $buku,
            'ulasan' => $ulasan,
        ]);
    }
}
