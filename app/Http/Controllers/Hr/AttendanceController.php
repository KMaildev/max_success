<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendance;
use App\Imports\AttendanceImport;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    public function index()
    {
        $att  = Attendance::all();
        return view('hr.attendance.index');
    }


    public function create()
    {
        return view('hr.attendance.create');
    }

    public function store(Request $request)
    {
        return $request->all();
        // Excel::import(new AttendanceImport, request()->file('attendance_files'));

        // if ($request->hasFile('attendance_files')) {
        //     foreach ($request->file('attendance_files') as $key => $file) {
        //         Excel::import(new AttendanceImport, $file);
        //     }
        // }
    }
}
