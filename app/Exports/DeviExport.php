<?php

namespace App\Exports;

use App\Devi;
use Maatwebsite\Excel\Concerns\FromCollection;

class DeviExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Devi::all();
    }
}
