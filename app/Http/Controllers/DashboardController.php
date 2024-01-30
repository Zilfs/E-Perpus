<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buku_terpinjam = Peminjaman::where('status_peminjaman', 'TERPINJAM')->get()->count();
        $jumlah_buku = Buku::all()->count();
        $kategori_buku = KategoriBuku::all()->count();
        $jumlah_pembaca = User::where('role', 'PEMINJAM')->get()->count();

        return view('pages.pengelola.index', [
            'buku_terpinjam' => $buku_terpinjam,
            'jumlah_buku' => $jumlah_buku,
            'kategori_buku' => $kategori_buku,
            'jumlah_pembaca' => $jumlah_pembaca,
        ]);
    }
}
