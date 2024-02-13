<?php

namespace App\Exports;

use App\Models\KategoriBuku;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KategoriExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $data = KategoriBuku::all();

        return view('export.kategori', [
            'data' => $data,
        ]);
    }
}
