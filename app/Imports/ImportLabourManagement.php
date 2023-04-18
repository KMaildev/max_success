<?php

namespace App\Imports;

use App\Models\LabourManagement;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class ImportLabourManagement implements ToCollection, WithHeadingRow
{

    public function __construct($demand_id, $contract_id, $overseas_agencies_id)
    {
        $this->demand_id = $demand_id;
        $this->contract_id = $contract_id;
        $this->overseas_agencies_id = $overseas_agencies_id;
    }

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            // '*.name' => 'required',
            '*.passport' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            LabourManagement::create([
                'demand_id' => $this->demand_id,
                'contract_id' => $this->contract_id,
                'overseas_agencies_id' => $this->overseas_agencies_id,

                'name' => strval($row['name'] ?? ''),
                'father_name'    => strval($row['father_name'] ?? ''),
                'nrc'    => strval($row['nrc'] ?? ''),
                'date_of_birth'    => strval($row['date_of_birth'] ?? ''),
                'passport'    => strval($row['passport'] ?? ''),
                'passport_date'    => strval($row['passport_date'] ?? ''),
                'phone'    => strval($row['phone'] ?? ''),
                'address'    => strval($row['address'] ?? ''),
                'gender'    => strval($row['gender'] ?? ''),
                'place_of_passport'    => strval($row['place_of_passport'] ?? ''),
                'remark'    => strval($row['remark'] ?? ''),
                'owic'    => strval($row['owic'] ?? ''),
                'owic_date'    => strval($row['owic_date'] ?? ''),
            ]);
        }
    }
}
