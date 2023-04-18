<table class="table">
    <thead>
        <tr>

            <th style="width: 2vh;">
                Labour Card No
            </th>

            <th style="width: 2vh;">
                Issue of Labour Date
            </th>

            <th style="width: 2vh;">
                Name
            </th>

            <th style="width: 2vh;">
                M/F
            </th>

            <th style="width: 2vh;">
                NRC
            </th>

            <th style="width: 2vh;">
                Father's Name
            </th>

            <th style="width: 2vh;">
                Qualification
            </th>

            <th style="width: 2vh;">
                Date of Birth
            </th>

            <th style="width: 2vh;">
                Address in Myanmar
            </th>

            <th style="width: 2vh;">
                Job
            </th>

            <th style="width: 2vh;">
                Factory's Address
            </th>

            <th style="width: 2vh;">
                Passport No
            </th>

            <th style="width: 2vh;">
                Issue Date of Passport
            </th>

            <th style="width: 2vh;">
                Identification Card
            </th>

            <th style="width: 2vh;">
                Issue Date of ID Card
            </th>

            <th style="width: 2vh;">
                Place of Passport
            </th>

            <th style="width: 2vh;">
                Salary
            </th>

            <th style="width: 2vh;">
                Age
            </th>

            <th style="width: 2vh;">
                Weight
            </th>

            <th style="width: 2vh;">
                Height
            </th>

            <th style="width: 2vh;">
                Tattoo
            </th>

            <th style="width: 2vh;">
                Smoking
            </th>

            <th style="width: 2vh;">
                Alcohol
            </th>

            <th style="width: 2vh;">
                Marital Status
            </th>

            <th style="width: 2vh;">
                Son
            </th>

            <th style="width: 2vh;">
                Son Age
            </th>

            <th style="width: 2vh;">
                Daughter
            </th>

            <th style="width: 2vh;">
                Daughter Age
            </th>

            <th style="width: 2vh;">
                Mother Name
            </th>

            <th style="width: 2vh;">
                Nation Religion
            </th>

            <th style="width: 2vh;">
                Prominent Sign
            </th>

            <th style="width: 2vh;">
                Working Experience
            </th>

            <th style="width: 2vh;">
                Address Line One
            </th>

            <th style="width: 2vh;">
                Phone
            </th>

            <th style="width: 2vh;">
                Family Phone
            </th>

            <th style="width: 2vh;">
                Name Of Heir
            </th>

            <th style="width: 2vh;">
                Relative
            </th>

            <th style="width: 2vh;">
                NRC Of Heir
            </th>

            <th style="width: 2vh;">
                Passport Cost
            </th>

            <th style="width: 2vh;">
                Car Charges
            </th>

            <th style="width: 2vh;">
                Passport Register
            </th>

            <th style="width: 2vh;">
                Leader
            </th>

            <th style="width: 2vh;">
                OWIC
            </th>

            <th style="width: 2vh;">
                OWIC Date
            </th>

            <th style="width: 2vh;">
                Identification Card
            </th>

            <th style="width: 2vh;">
                Issue Date of ID Card
            </th>

            <th style="width: 2vh;">
                Agent Name
            </th>

            <th style="width: 2vh;">
                Submit Date
            </th>

            <th style="width: 2vh;">
                Contract Date
            </th>

            <th style="width: 2vh;">
                Sending Date
            </th>

            <th style="width: 2vh;">
                Remark
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($passports as $key => $passport)
            <tr>

                <td class="text-center">
                    {{ $passport->labour_card_no ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->issue_of_labour_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->name ?? '' }}
                </td>

                <td class="text-center">
                    {{ ucfirst($passport->gender ?? '') }}
                </td>

                <td class="text-center">
                    {{ $passport->nrc ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->father_name ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->qualification ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->date_of_birth ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->address ?? '' }}
                </td>

                <td>
                    Job
                </td>

                <td class="text-center">
                    {{ $passport->labour_management_table->overseas_agency_table->company_name ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->passport ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->passport_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->identification_card ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->issue_date_of_id_card ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->place_of_passport ?? '' }}
                </td>

                <td class="text-center">
                    331
                </td>

                <td class="text-center">
                    {{ $passport->age ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->weight ?? '' }}
                </td>


                <td class="text-center">
                    {{ $passport->height ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->tatto ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->smoking ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->alcohol ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->marital_status ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->son ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->son_age ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->daughter ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->daughter_age ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->mother_name ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->nation_religion ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->prominent_sign ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->working_experience ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->address_line_one ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->phone ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->phone_family ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->name_of_heir ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->relative ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->nrc_of_heir ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->passport_cost ?? '' }}
                </td>


                <td class="text-center">
                    {{ $passport->car_charges ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->passport_register_status ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->leader ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->owic ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->owic_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->identification_card ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->issue_date_of_id_card ?? '' }}
                </td>

                <td class="text-center">
                    {{ strtoupper($passport->agent_list_table->name ?? $passport->local_agent_name) }}
                </td>

                <td class="text-center">
                    {{ $passport->entry_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->labour_management_table->contract_table->contract_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->labour_management_table->sending_table->sending_date ?? '' }}
                </td>

                <td class="text-center">
                    {{ $passport->remark ?? '' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
