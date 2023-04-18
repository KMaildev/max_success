<table>
    <thead>
        <tr>
            <th>MEDICAL TEST DATE</th>
            <th>HOSPITAL</th>
            <th>Agent Name</th>
            <th>Name</th>
            <th>NRC</th>
            <th>Passport</th>
            <th>Fail or Pass</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($passports as $key => $passport)
            <tr>
                <td>
                    {{ $passport->medical_test_date ?? '' }}
                </td>

                <td>
                    {{ $passport->hospital_table->name ?? '' }}
                </td>

                <td>
                    {{ $passport->passport_table->agent_list_table->name ?? '' }}
                </td>

                <td>
                    {{ $passport->passport_table->name ?? '' }}
                </td>

                <td>
                    {{ $passport->passport_table->nrc ?? '' }}
                </td>

                <td>
                    {{ $passport->passport_table->passport ?? '' }}
                </td>

                <td>
                    {{ $passport->failed_or_pass ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
