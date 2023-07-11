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
