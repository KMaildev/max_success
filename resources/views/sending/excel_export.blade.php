<table>
    <thead>
        <tr>
            <th style="width: 2vh">
                Name
            </th>
            <th style="width: 2vh">
                Oversea Company
            </th>
            <th style="width: 2vh">
                Male
            </th>
            <th style="width: 2vh">
                Female
            </th>
            <th style="width: 2vh">
                Total
            </th>
            <th style="width: 2vh">
                Sending Date
            </th>
            <th style="width: 2vh">
                Remark
            </th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($sendings as $key => $sending)
            <tr>
                <td>
                    {{ $sending->demands_table->office_table->name ?? '' }}
                </td>

                <td>
                    {{ $sending->demands_table->overseas_agencies_table->company_name ?? '' }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($sending->sending_male) }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($sending->sending_female) }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($sending->sending_male + $sending->sending_female) }}
                </td>

                <td style="text-align: center; font-weight: bold">
                    {{ $sending->sending_date }}
                </td>

                <td style="text-align: center; font-weight: bold">
                    {{ $sending->remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
