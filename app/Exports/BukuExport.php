<?php

namespace App\Exports;

use App\Models\Buku;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BukuExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $data = Buku::all();

        return view('export.buku', [
            'data' => $data,
        ]);
    }
}
