<?php

namespace App\Exports;

use App\Models\Hospital;
use Maatwebsite\Excel\Concerns\FromCollection;

class HospitalExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Hospital::select([
            "name",
            "location",
            "phone",
            "remark",
            "submit_date",
        ])->get();
    }
}
