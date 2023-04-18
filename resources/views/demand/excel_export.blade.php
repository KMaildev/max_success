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
                Job
            </th>

            <th style="width: 2vh">
                Salary
            </th>

            <th style="width: 2vh">
                Demand Date
            </th>

            <th style="width: 2vh">
                Cabinet Date
            </th>

            <th style="width: 2vh">
                Issue Date
            </th>

            <th style="width: 2vh">
                Issue Number
            </th>

            <th style="width: 2vh">
                Male
            </th>

            <th style="width: 2vh">
                Femal
            </th>

            <th style="width: 2vh">
                Total
            </th>

            <th style="width: 2vh">
                Remark
            </th>

        </tr>
    </thead>
    <tbody class="table-border-bottom-0">
        @foreach ($demands as $key => $demand)
            <tr>

                <td>
                    {{ $demand->office_table->name ?? '' }}
                </td>

                <td>
                    {{ $demand->overseas_agencies_table->company_name ?? '' }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->job ?? '' }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->salary ?? '' }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->demand_date }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->cabinet_date }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->issue_date }}
                </td>

                <td style="text-align: center;">
                    {{ $demand->issue_number }}
                </td>

                <td style="text-align: center;">
                    @php
                        $demand_male = $demand->male ?? 0;
                        echo $demand_male;
                        $demandMaleTotal[] = $demand_male;
                    @endphp
                </td>

                <td style="text-align: center;">
                    @php
                        $demand_female = $demand->female ?? 0;
                        echo $demand_female;
                        $demandFemaleTotal[] = $demand_female;
                    @endphp
                </td>

                <td style="text-align: center;">
                    @php
                        $demald_total = $demand_male + $demand_female;
                        echo $demald_total;
                    @endphp
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
