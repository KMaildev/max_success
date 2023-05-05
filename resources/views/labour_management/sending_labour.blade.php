@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Labour Manage
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Labour Manage
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">

                        <div class="col-md-6">
                            <br>
                            @include('components.sending_information')
                        </div>

                        <div class="col-md-12">
                            <div class="table-responsive text-nowrap">
                                <table id="datatable" class="table table-bordered table-striped table-hover"
                                    data-hide-colums="">
                                    <thead>
                                        <tr class="bg-gray">
                                            <th class="text-white w-5">
                                                #
                                            </th>

                                            <th class="text-white w-5">
                                                Name
                                            </th>

                                            <th class="text-white w-5">
                                                M/F
                                            </th>

                                            <th class="text-white w-5">
                                                NRC
                                            </th>

                                            <th class="text-white w-5">
                                                Father's Name
                                            </th>

                                            <th class="text-white w-5">
                                                Qualification
                                            </th>

                                            <th class="text-white w-5">
                                                Date of Birth
                                            </th>

                                            <th class="text-white w-5">
                                                Address in Myanmar
                                            </th>

                                            <th class="text-white w-5">
                                                Passport No
                                            </th>

                                            <th class="text-white w-5">
                                                Issue Date of Passport
                                            </th>

                                            <th class="text-white w-5">
                                                Place of Passport
                                            </th>

                                            <th class="text-white w-5">
                                                Age
                                            </th>

                                            <th class="text-white w-5">
                                                Weight
                                            </th>

                                            <th class="text-white w-5">
                                                Height
                                            </th>

                                            <th class="text-white w-5">
                                                Tattoo
                                            </th>

                                            <th class="text-white w-5">
                                                Smoking
                                            </th>

                                            <th class="text-white w-5">
                                                Alcohol
                                            </th>

                                            <th class="text-white w-5">
                                                Marital Status
                                            </th>

                                            <th class="text-white w-5">
                                                Mother Name
                                            </th>

                                            <th class="text-white w-5">
                                                Nation Religion
                                            </th>

                                            <th class="text-white w-5">
                                                Prominent Sign
                                            </th>

                                            <th class="text-white w-5">
                                                Working Experience
                                            </th>

                                            <th class="text-white w-5">
                                                Address Line One
                                            </th>

                                            <th class="text-white w-5">
                                                Phone
                                            </th>

                                            <th class="text-white w-5">
                                                Family Phone
                                            </th>

                                            <th class="text-white w-5">
                                                Agent
                                            </th>

                                            <th class="text-white w-5">
                                                Remark
                                            </th>

                                            <th class="text-white w-5">
                                                Interview Company
                                            </th>

                                            <th class="text-white w-5">
                                                Interview Date
                                            </th>

                                            <th class="text-white w-5">
                                                Contract Company
                                            </th>

                                            <th class="text-white w-5">
                                                Contract Date
                                            </th>

                                            <th class="text-white w-5">
                                                Sending Date
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                    {{ $passport->qualification ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->date_of_birth ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->address ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->passport ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->passport_date ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->place_of_passport ?? '' }}
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
                                                    {{ strtoupper($passport->agent_list_table->name ?? $passport->local_agent_name) }}
                                                </td>


                                                <td class="text-center">
                                                    {{ $passport->remark ?? '' }}
                                                </td>

                                                {{-- Interview --}}
                                                <td class="text-center">
                                                    {{ $passport->interview_labours_status->overseas_agency_table->company_name ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->interview_labours_status->interviews_table->interview_date ?? '' }}
                                                </td>

                                               {{-- Contract --}}
                                                <td class="text-center">
                                                    {{ $passport->interview_labours_status->demands_table->overseas_agencies_table->company_name ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $passport->interview_labours_status->contact_table->contract_date ?? '' }}
                                                </td>

                                                {{-- Sending --}}
                                                <td>
                                                    {{ $passport->labour_management_passport_id->sending_table->sending_date ?? '' }}
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
    </section>
@endsection
@section('script')
@endsection
