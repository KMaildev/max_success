@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card invoice-preview-card m-2">
                <div class="card-body">

                    <div
                        class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0">
                        <div class="col-md-8 col-lg-8">
                            <h4>
                                {{ $interview->interview_title ?? '' }}
                            </h4>
                            <div class="mb-2">
                                <span class="me-1">
                                    Overseas Company Name:
                                </span>
                                <span class="fw-semibold">
                                    {{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="me-1">Interview Date:</span>
                                <span class="fw-semibold">
                                    {{ $interview->interview_date ?? '' }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="me-1">Interview Remark:</span>
                                <span class="fw-semibold">
                                    {{ $interview->remark ?? '' }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="me-1">Interview Male:</span>
                                <span class="fw-semibold">
                                    {{ number_format($interview->interview_male) }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="me-1">Interview Female:</span>
                                <span class="fw-semibold">
                                    {{ number_format($interview->interview_female) }}
                                </span>
                            </div>
                            <div class="mb-2">
                                <span class="me-1">Interview Total:</span>
                                <span class="fw-semibold">
                                    {{ number_format($interview->interview_male + $interview->interview_female) }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
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
                                            Passport No
                                        </th>

                                        <th class="text-center text-white" style="background-color: #296166;">
                                            Issue Date of Passport
                                        </th>

                                        <th class="text-center text-white" style="background-color: #296166;">
                                            Place of Passport
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
                                            Agent
                                        </th>

                                        <th class="text-center text-white" style="background-color: #296166;">
                                            Remark
                                        </th>

                                        <th class="text-center text-white" style="background-color: #296166;">
                                            Interview Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($interview_labours as $key => $interview_labour)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                @if ($interview_labour->passport_table->photo)
                                                    <img src="{{ Storage::url($interview_labour->passport_table->photo) }}"
                                                        alt=""
                                                        style="width: 50px; height: 50px; background-position: center; background-size: cover;">
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ ucfirst($interview_labour->passport_table->gender ?? '') }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->nrc ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->father_name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->qualification ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->date_of_birth ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->address ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->passport ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->passport_date ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->place_of_passport ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->age ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->weight ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->height ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->tatto ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->smoking ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->alcohol ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->marital_status ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->mother_name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->nation_religion ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->prominent_sign ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->working_experience ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->address_line_one ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->phone ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->phone_family ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ strtoupper($interview_labour->passport_table->agent_list_table->name ?? $interview_labour->passport_table->local_agent_name) }}
                                            </td>


                                            <td class="text-center">
                                                {{ $interview_labour->passport_table->remark ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $interview->interview_date ?? '' }}
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
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreInterviewLabour', '#create-form') !!}
@endsection
