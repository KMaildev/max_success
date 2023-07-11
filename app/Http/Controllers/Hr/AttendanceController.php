<?php

namespace App\Http\Controllers\Hr;

use App\Exports\AttendanceExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendance;
use App\Imports\AttendanceImport;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $employee_name = $request->employee_name;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $search_start_date = date("n/j/Y", strtotime($start_date));
        $search_end_date = date("n/j/Y", strtotime($end_date));

        if ($employee_name) {
            $attendances  = Attendance::whereBetween('attendance_date', [$search_start_date, $search_end_date])
                ->where('name', $employee_name)
                ->get();
        } else {
            $attendances  = Attendance::whereBetween('attendance_date', [$search_start_date, $search_end_date])
                ->get();
        }

        return view('hr.attendance.index', compact('attendances', 'employee_name', 'start_date', 'end_date'));
    }


    public function create()
    {
        return view('hr.attendance.create');
    }

    public function store(StoreAttendance $request)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                Excel::import(new AttendanceImport, $file);
            }
        }
        return redirect()->back()->with('success', 'Files imported successfully.');
    }

    public function attendance_export_excel(Request $request)
    {
        $employee_name = $request->employee_name;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $search_start_date = date("n/j/Y", strtotime($start_date));
        $search_end_date = date("n/j/Y", strtotime($end_date));

        if ($employee_name) {
            $attendances  = Attendance::whereBetween('attendance_date', [$search_start_date, $search_end_date])
                ->where('name', $employee_name)
                ->get();
        } else {
            $attendances  = Attendance::whereBetween('attendance_date', [$search_start_date, $search_end_date])
                ->get();
        }

        return Excel::download(new AttendanceExport($attendances), 'attendances_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
