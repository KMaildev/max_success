<?php

namespace App\Imports;

use App\Models\Passport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PassportImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [
            '*.name' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            Passport::create([
                'name'  => strval($row['name'] ?? null),
                'gender'  => strval($row['gender'] ?? null),
                'nrc'  => strval($row['nrc'] ?? null),
                'father_name'  => strval($row['father_name'] ?? null),
                'qualification'  => strval($row['qualification'] ?? null),
                'date_of_birth'  => strval($row['date_of_birth'] ?? null),
                'address'  => strval($row['address'] ?? null),
                'passport'  => strval($row['passport_no'] ?? null),
                'passport_date'  => strval($row['date_of_passport'] ?? null),
                'place_of_passport'  => strval($row['place_of_passport'] ?? null),
                'passport_expiry_date'  => strval($row['passport_expiry_date'] ?? null),
                'age'  => strval($row['age'] ?? null),
                'weight'  => strval($row['weight'] ?? null),
                'height'  => strval($row['height'] ?? null),
                'tatto'  => strval($row['tattoo'] ?? null),
                'smoking'  => strval($row['smoking'] ?? null),
                'alcohol'  => strval($row['alcohol'] ?? null),
                'marital_status'  => strval($row['marital_status'] ?? null),
                'son'  => strval($row['son'] ?? null),
                'son_age'  => strval($row['son_age'] ?? null),
                'daughter'  => strval($row['daughter'] ?? null),
                'daughter_age'  => strval($row['daughter_age'] ?? null),
                'mother_name'  => strval($row['mother_name'] ?? null),
                'nation_religion'  => strval($row['nation_religion'] ?? null),
                'prominent_sign'  => strval($row['prominent_sign'] ?? null),
                'working_experience'  => strval($row['working_experience'] ?? null),
                'address_line_one'  => strval($row['address_line_one'] ?? null),
                'phone'  => strval($row['phone'] ?? null),
                'phone_family'  => strval($row['family_phone'] ?? null),

                'name_of_heir'  => strval($row['name_of_heir'] ?? null),
                'relative'  => strval($row['relative'] ?? null),
                'nrc_of_heir'  => strval($row['nrc_of_heir'] ?? null),
                'passport_cost'  => strval($row['passport_cost'] ?? null),
                'car_charges'  => strval($row['car_charges'] ?? null),
                'passport_register_status'  => strval($row['passport_register'] ?? null),
                'leader'  => strval($row['leader'] ?? null),
                'labour_card_No'  => strval($row['labour_card_no'] ?? null),
                'issue_of_labour_date'  => strval($row['issue_of_labour_date'] ?? null),
                'owic'  => strval($row['owic'] ?? null),
                'owic_date'  => strval($row['owic_date'] ?? null),
                'identification_card'  => strval($row['identification_card'] ?? null),
                'issue_date_of_id_card'  => strval($row['issue_date_of_id_card'] ?? null),
                'local_agent_name'  => strval($row['agent_name'] ?? null),
                'entry_date'  => strval($row['submit_date'] ?? null),
                'remark'  => strval($row['remark'] ?? null),

                'go_date'  => strval($row['go_date'] ?? null),
                'go_reason'  => strval($row['reason'] ?? null),
                'nation_religion'  => strval($row['nation_religion'] ?? null),
                'region_state'  => strval($row['region_state'] ?? null),
                'selected_country'  => strval($row['country'] ?? null),

                'created_at'  => now(),
                'updated_at'  => now(),
                'join_date'  => date("Y-m-d"),
                'user_id'  => auth()->user()->id,

                'agent_list_id'  => null,
                'reject_status'  => null,
                'reject_date'  => null,
                'reject_reason'  => null,
            ]);
        }
    }
}
