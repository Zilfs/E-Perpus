<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();
        $dipinjam = Peminjaman::where('status_peminjaman', 'DIPINJAM')->get();
        $dikembalikan = Peminjaman::where([['status_peminjaman', 'DIKEMBALIKAN'], ['tanggal_dikembalikan', $today]])->get();
        $terlambat = Peminjaman::where([['status_peminjaman', 'DIPINJAM'], ['tanggal_pengembalian', '<', $today]])->get();

        return view('pages.pengelola.peminjaman.index', [
            'dipinjam' => $dipinjam,
            'dikembalikan' => $dikembalikan,
            'terlambat' => $terlambat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peminjaman::create([
            'user_id' => Auth::user()->id,
            'buku_id' => $request->buku_id,
            'tanggal_peminjaman' => Carbon::today(),
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status_peminjaman' => 'DIPINJAM',
        ]);

        return redirect()->route('dipinjam');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Peminjaman::with('buku')->where('user_id', $id)->get();

        return view('pages.peminjam.dipinjam', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
