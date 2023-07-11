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

        Validator::make($rows->toArray(), [
            '*.name' => 'required',
        ])->validate();

        foreach ($rows as $row) {
            Attendance::create([
                'name'  => strval($row['name'] ?? null),
                'attendance_date'  => strval($row['date'] ?? null),
                'on_duty'  => strval($row['on_duty'] ?? null),
                'off_duty'  => strval($row['off_duty'] ?? null),
                'clock_in'  => strval($row['clock_in'] ?? null),
                'clock_out'  => strval($row['clock_out'] ?? null),
                'late'  => strval($row['late'] ?? null),
                'early'  => strval($row['early'] ?? null),
                'absent'  => strval($row['absent'] ?? null),
                'ot_time'  => strval($row['ot_time'] ?? null),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
