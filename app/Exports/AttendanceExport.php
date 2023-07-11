<?php

namespace App\Exports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class AttendanceExport implements FromView
{
    public function __construct($attendances)
    {
        $this->attendances = $attendances;
    }

    public function view(): View
    {
        return view('hr.attendance.excel_export', [
            'attendances' => $this->attendances,
        ]);
    }
}
