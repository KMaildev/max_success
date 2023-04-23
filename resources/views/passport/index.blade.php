@extends('layouts.based.base_main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Labour Lists
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="from_date" />
                                        <input type="date" class="form-control" name="to_date" />
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="agent_list_id" id="" class="form-control select2">
                                            <option value="0">
                                                --Select Agent--
                                            </option>
                                            @foreach ($agent_lists as $agent_list)
                                                <option value="{{ $agent_list->id ?? '' }}">
                                                    {{ strtoupper($agent_list->name ?? '') }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="NRC, PASSPORT, NAME, ETC.."
                                            name="search" />
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" style="">
                                        <li>
                                            <a href="{{ route('passport.create') }}" class="dropdown-item">
                                                Create
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('passport_export') }}" class="dropdown-item">
                                                Export Excel
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mr-6">
                        <span class="badge bg-secondary">
                            Total Passport: {{ $total_passports }}
                        </span>
                        <span class="badge bg-secondary">
                            Result: {{ count($passports) }}
                        </span>
                    </div>
                </div>

                <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table">
                        <thead class="tbbg">
                            <tr>
                                <th class="text-center text-white" style="width: 1%; background-color: #296166;">
                                    #
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Photo
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Labour Card No
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Issue of Labour Date
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
                                    Father's Name
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Qualification
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Date of Birth
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Address in Myanmar
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Job
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Factory's Address
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Passport No
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Issue Date of Passport
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Identification Card
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Issue Date of ID Card
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Place of Passport
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Salary
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Age
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Weight
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Height
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Tattoo
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Smoking
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Alcohol
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Marital Status
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Son
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Son Age
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Daughter
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Daughter Age
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Mother Name
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Nation Religion
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Prominent Sign
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Working Experience
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Address Line One
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Phone
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Family Phone
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Name Of Heir
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Relative
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    NRC Of Heir
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Passport Cost
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Car Charges
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Passport Register
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Leader
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    OWIC
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    OWIC Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Identification Card
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Issue Date of ID Card
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Agent Name
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Submit Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Contract Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Sending Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Remark
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Deposit
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Interview
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Medical Test
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

                                    <td style="text-align: center;">
                                        @if ($passport->photo)
                                            <img src="{{ Storage::url($passport->photo) }}" alt=""
                                                style="width: 50px; height: 50px; background-position: center; background-size: cover;">
                                        @endif
                                    </td>

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

                                    <td style="text-align: right">
                                        {{ number_format($passport->passport_payments_table->sum('deposit'), 2) }}
                                    </td>

                                    <td class="text-center">
                                        @if ($passport->interview_labours_status->passport_id ?? '')
                                            {{ $passport->interview_labours_status->interviews_table->interview_date ?? '' }}
                                        @else
                                            <span class="badge bg-danger">
                                                Pading
                                            </span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        @if ($passport->medical_tests_status->failed_or_pass ?? '' == null)
                                            <span class="badge bg-danger">
                                                Pading
                                            </span>
                                        @else
                                            {{ $passport->medical_tests_status->failed_or_pass ?? '' }}
                                        @endif
                                    </td>

                                    <td style="text-align: center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('passport.edit', $passport->id) }}">
                                                    Edit & OWIC
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('labour_docs_management', $passport->id) }}">
                                                    Manage Docs
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('reject_passport', $passport->id) }}">
                                                    Reject
                                                </a>

                                                <form action="{{ route('passport.destroy', $passport->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">Delete</button>
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
            </div>
        </div>
    </div>
@endsection
