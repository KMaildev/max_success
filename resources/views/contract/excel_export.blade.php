<table>
    <thead class="tbbg">
        <tr>
            <th style="widht: 2vh">
                Name
            </th>
            <th style="widht: 2vh">
                Oversea Company
            </th>
            <th style="widht: 2vh">
                Male
            </th>
            <th style="widht: 2vh">
                Female
            </th>
            <th style="widht: 2vh">
                Total
            </th>
            <th style="widht: 2vh">
                Contract Date
            </th>
            <th style="widht: 2vh">
                Contract Remark
            </th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($contracts as $key => $contract)
            <tr>
                <td>
                    {{ $contract->demands_table->office_table->name ?? '' }}
                </td>

                <td>
                    {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($contract->contract_male) }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($contract->contract_female) }}
                </td>

                <td style="text-align: right; font-weight: bold">
                    {{ number_format($contract->contract_male + $contract->contract_female) }}
                </td>

                <td style="text-align: center; font-weight: bold">
                    {{ $contract->contract_date }}
                </td>

                <td style="text-align: center; font-weight: bold">
                    {{ $contract->remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
