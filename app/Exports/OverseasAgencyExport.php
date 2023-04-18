<?php

namespace App\Exports;

use App\Models\OverseasAgency;
use Maatwebsite\Excel\Concerns\FromCollection;

class OverseasAgencyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OverseasAgency::select([
            "company_name",
            "type_of_company",
            "company_phone",
            "company_email",
            "company_address",
            "contact",
            "remark",
        ])->get();
    }
}
