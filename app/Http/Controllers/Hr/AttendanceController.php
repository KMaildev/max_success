<?php

namespace App\Http\Controllers\Hr;

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
        $month = $request->month;
        $year = $request->year;
        $startOfMonth = $year . '-' . $month . '-01';
        $endOfMonth = Carbon::parse($startOfMonth)->endOfMonth()->format('Y-m-d');


        $attendances  = Attendance::all();
        return view('hr.attendance.index', compact('attendances'));
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
}
