<?php

namespace App\Imports;

use App\Models\LabourManagement;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use App\Models\Passport;

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
            $passport = Passport::where('passport', $row['passport'])->first();
            if ($passport) {
                $passport_id = $passport->id;

                LabourManagement::create([
                    'demand_id' => $this->demand_id,
                    'contract_id' => $this->contract_id,
                    'overseas_agencies_id' => $this->overseas_agencies_id,
    
                    'name' => strval($row['name'] ?? ''),
                    'passport_id'    => $passport_id,
                    'passport'    => strval($row['passport'] ?? ''),
                    'remark'    => strval($row['remark'] ?? ''),
                ]);
            }
           
        }
    }
}
