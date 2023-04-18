<?php

namespace App\Exports;

use App\Models\Interview;
use Maatwebsite\Excel\Concerns\FromCollection;

class InterviewExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Interview::select([
            "interview_title",
            "interview_date",
            "interview_male",
            "interview_female",
            "remark",
        ])->get();
    }
}
