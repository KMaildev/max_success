<?php

namespace App\Imports;

use App\Models\InterviewLabour;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use App\Models\Passport;


class InterviewLabourImport implements ToCollection, WithHeadingRow
{
    public function __construct($demand_id, $interview_id, $overseas_agencie_id)
    {
        $this->demand_id = $demand_id;
        $this->interview_id = $interview_id;
        $this->overseas_agencie_id = $overseas_agencie_id;
    }

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.passport' => 'required',
        ])->validate();

   
        foreach ($rows as $row) {
            $passport = Passport::where('passport', $row['passport'])->first();
            if ($passport) {
                $passport_id = $passport->id;
                $agent_list_id = $passport->agent_list_id;
                InterviewLabour::create([
                    'demand_id' => $this->demand_id,
                    'interview_id' => $this->interview_id,
                    'overseas_agencie_id' => $this->overseas_agencie_id,
                    
                    'passport_id'    => $passport_id,
                    'agent_list_id'    => $agent_list_id,
                    'passport'    => strval($row['passport'] ?? ''),
                    'user_id'    => auth()->user()->id,

                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }

        }
    }
}
