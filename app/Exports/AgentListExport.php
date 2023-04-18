<?php

namespace App\Exports;

use App\Models\AgentList;
use Maatwebsite\Excel\Concerns\FromCollection;

class AgentListExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return AgentList::select([
            "name",
            "email",
            "phone",
            "address",
            "agent_code",
            "nrc",
            "remark",
            "join_date",
        ])->get();
    }
}
