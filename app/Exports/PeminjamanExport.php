<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PeminjamanExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $data = Peminjaman::with(['user', 'buku'])->get();

        return view('export.peminjaman', [
            'data' => $data,
        ]);
    }
}
