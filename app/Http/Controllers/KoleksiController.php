<?php

namespace App\Http\Controllers;

use App\Models\KoleksiPribadi;
use Illuminate\Support\Facades\Auth;

class KoleksiController extends Controller
{
    public function index(String $id)
    {
        $data = KoleksiPribadi::with('buku')->where('user_id', $id)->get();

        return view('pages.peminjam.koleksi', [
            'data' => $data,
        ]);
    }

    public function store(String $id)
    {
        KoleksiPribadi::create([
            'user_id' => Auth::user()->id,
            'buku_id' => $id,
        ]);

        return redirect()->route('koleksi', Auth::user()->id);
    }

    public function destroy(String $id)
    {
        $item = KoleksiPribadi::findOrFail($id);

        $item->delete();

        return redirect()->route('koleksi', Auth::user()->id);
    }
}
