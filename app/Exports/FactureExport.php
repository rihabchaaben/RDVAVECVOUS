<?php

namespace App\Exports;

use App\Facture;
use Maatwebsite\Excel\Concerns\FromCollection;

class FactureExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Facture::all();
    }
}
