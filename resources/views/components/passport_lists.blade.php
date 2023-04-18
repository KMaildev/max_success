<br>
<span style="margin: 2px; font-weight: bold;">
    Total: {{ $total_passports }}
    /
    Result: {{ count($passports) }}
</span>
<div class="table-responsive text-nowrap rowheaders table-scroll" role="region" aria-labelledby="HeadersCol"
    tabindex="0">
    <table class="table table-bordered main-table">
        <thead class="tbbg">
            <tr>
                <th class="text-center text-white" style="width: 1%; background-color: #296166;">
                    #
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Name
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    M/F
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    NRC
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Father Name
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Date of Birth
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Address
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Overseas Company
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Passport No
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Date of Passport
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    OWIC
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Place of Passport
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Phone No
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Agent Name
                </th>
                <th class="text-center text-white" style="background-color: #296166;">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($passports as $key => $passport)
                <tr>
                    <td class="text-center">
                        {{ $key + 1 }}
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
                        {{ $passport->date_of_birth ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->address ?? '' }}
                    </td>

                    <td>
                        {{ $passport->labour_management_table->overseas_agency_table->company_name ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->passport ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->passport_date ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->owic ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->place_of_passport ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->phone ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $passport->agent_list_table->name ?? '' }}
                    </td>

                    <td style="text-align: center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="{{ route('reject_passport', $passport->id) }}">
                                    Reject
                                </a>

                                <form
                                    action="{{ route('labour_management.destroy', $passport->labour_management_table->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="dropdown-item del_confirm" id="confirm-text"
                                        data-toggle="tooltip">
                                        Remove from contract
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $passports->withQueryString()->links() }}
</div>
