@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Manage Interview Labour
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Manage Interview Labour
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Manage Interview Labour for
                            {{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="card-header border-bottom">
                            <ul class="nav nav-tabs card-header-tabs" id="nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="{{ route('add_interview_worker', $interview->id) }}" class="nav-link active"
                                        aria-selected="true">
                                        Upload Contract Labour
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('interview.show', $interview->id) }}" class="nav-link"
                                        aria-selected="true">
                                        View Contract Labour
                                    </a>
                                </li>
                            </ul>
                        </div>



                        <div class="col-md-12" style="padding-top: 30px;">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($interview_labours as $key => $interview_labour)
                                            <tr>
                                                <td class="text-center">
                                                    {{ $key + 1 }}
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
                                                    {{ $interview_labour->overseas_agency_table->company_name ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview->interview_date ?? '' }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
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
