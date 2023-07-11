@extends('layouts.based.hr_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Attendance
                        </h3>

                        <div class="box-tools pull-right">

                            <a href="{{ route('attendance_export_excel') }}?employee_name={{ $employee_name }}&start_date={{ $start_date }}&end_date={{ $end_date }}" class="btn btn-success">
                                <i class="fa fa-file-excel"></i>
                                Excel
                            </a>

                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('attendance.create') }}">
                                    <span class="fa fa-add"></span>
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">

                            @include('hr.attendance.search_form')
                            <br>
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">Name</th>
                                        <th class="text-white w-5">Date</th>
                                        <th class="text-white w-5">On duty</th>
                                        <th class="text-white w-5">Off duty</th>
                                        <th class="text-white w-5">Clock In</th>
                                        <th class="text-white w-5">Clock Out</th>
                                        <th class="text-white w-5">Late</th>
                                        <th class="text-white w-5">Early</th>
                                        <th class="text-white w-5">Absent</th>
                                        <th class="text-white w-5">OT Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendances as $key => $attendance)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $attendance->name ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->attendance_date ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->on_duty ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->off_duty ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->clock_in ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->clock_out ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->late ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->early ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->absent ?? '' }}
                                            </td>

                                            <td>
                                                {{ $attendance->ot_time ?? '' }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
