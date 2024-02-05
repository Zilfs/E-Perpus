<?php

namespace App\Http\Controllers;

use App\Exports\KategoriExport;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KategoriBuku::all();

        return view('pages.pengelola.kategori.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pengelola.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        KategoriBuku::create($data);

        return redirect()->route('kategori-buku.index');
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
        $item = KategoriBuku::findOrFail($id);

        return view('pages.pengelola.kategori.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = KategoriBuku::findOrFail($id);
        $data = $request->all();

        $item->update($data);

        return redirect()->route('kategori-buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = KategoriBuku::findOrFail($id);

        $item->delete();

        return redirect()->route('kategori-buku.index');
    }

    public function export()
    {
        return Excel::download(new KategoriExport, 'laporan-data-kategori.xlsx');
    }
}
