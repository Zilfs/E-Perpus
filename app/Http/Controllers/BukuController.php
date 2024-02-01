<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\KategoriBukuRelasi;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::with('kategori_buku_relasi.kategori')->get();

        return view('pages.pengelola.buku.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = KategoriBuku::all();

        return view('pages.pengelola.buku.add', [
            'data' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('kategori');
        $kategori = $request->kategori;

        Buku::create($data);

        $buku = Buku::latest()->first()->id;
        KategoriBukuRelasi::create([
            'buku_id' => $buku,
            'kategori_id' => $kategori,
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Buku::with('kategori_buku_relasi.kategori')->where('id', $id)->first();
        $data = KategoriBuku::all();

        return view('pages.pengelola.buku.edit', [
            'item' => $item,
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Buku::findOrFail($id);
        $data = $request->except('kategori');
        $kategori = KategoriBukuRelasi::where('buku_id', $id)->first();

        $item->update($data);
        $kategori->update([
            'kategori_id' => $request->kategori
        ]);

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
