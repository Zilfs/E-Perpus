<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buku_terpinjam = Peminjaman::where('status_peminjaman', 'TERPINJAM')->get()->count();
        $jumlah_buku = Buku::all()->count();
        $kategori_buku = KategoriBuku::all()->count();
        $jumlah_pembaca = User::where('role', 'PEMINJAM')->get()->count();
        $peminjaman_hari_ini = Peminjaman::with(['buku', 'user'])->where('tanggal_peminjaman', Carbon::today())->orWhere('tanggal_pengembalian', Carbon::today())->get();

        return view('pages.pengelola.index', [
            'buku_terpinjam' => $buku_terpinjam,
            'jumlah_buku' => $jumlah_buku,
            'kategori_buku' => $kategori_buku,
            'jumlah_pembaca' => $jumlah_pembaca,
            'peminjaman_hari_ini' => $peminjaman_hari_ini,
        ]);
    }
}
