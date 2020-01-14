<?php

namespace App\Exports;

use App\Models\Buku;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BukuExport implements FromView
{
    public function view(): View
    {
        return view('buku.cetak_excel', [
            'buku' => Buku::orderBy('created_at', 'desc')->get()
        ]);
    }
}
