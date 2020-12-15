<?php

namespace App\Exports;

use App\Vendeur;
use Maatwebsite\Excel\Concerns\FromCollection;

class VendeurExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vendeur::all();
    }
}
