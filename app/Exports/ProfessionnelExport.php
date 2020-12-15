<?php

namespace App\Exports;

use App\Professionnel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProfessionnelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Professionnel::all();
    }
}
