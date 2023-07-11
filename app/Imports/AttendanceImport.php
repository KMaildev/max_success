<?php

namespace App\Imports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;


class AttendanceImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        Attendance::create([
            'name'  => strval($row['name'] ?? null),
        ]);
    }
}
