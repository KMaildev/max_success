@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Demand Lists
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('demand.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            Search by date
                                        </span>
                                        <input type="text" class="form-control form-control-sm" name="from_date"
                                            placeholder="1.1.2023" style="width: 100px;" />
                                        <input type="text" class="form-control form-control-sm" name="to_date"
                                            placeholder="31.1.2023" style="width: 100px;" />
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('demand.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="office_id" id="" class="form-control" style="width: 200px;">
                                            <option value="">
                                                Local Company
                                            </option>
                                            @foreach ($offices as $office)
                                                <option value="{{ $office->id ?? '' }}">
                                                    {{ $office->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('demand.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="overseas_agencie_id" class="form-control select2"
                                            style="width: 200px;" data-allow-clear="false">
                                            <option value="">
                                                --Oversea Agency Company--
                                            </option>
                                            @foreach ($overseas_agencies as $overseas_agencie)
                                                <option value="{{ $overseas_agencie->id ?? '' }}">
                                                    {{ $overseas_agencie->company_name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>


                            <a href="{{ route('demand_export_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>

                            <div class="card-header-elements  ms-2">
                                <a href="{{ route('demand.create') }}" class="dt-button create-new btn btn-primary">
                                    <span>
                                        <i class="bx bx-plus me-sm-2"></i>
                                        <span class="d-none d-sm-inline-block">Create</span>
                                    </span>
                                </a>
                            </div>
                        </div>
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
                                    Name
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Oversea Company
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Job
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Salary
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Demand Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Male
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Femal
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Total
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Balance Male
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Balance Female
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Balance Total
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Remark
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($demands as $key => $demand)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

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

                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('demand.edit', $demand->id) }}">
                                                    Edit
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('file_upload_view_demand', $demand->id) }}">
                                                    Files
                                                </a>

                                                <form action="{{ route('demand.destroy', $demand->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="dropdown-item del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>


                                {{-- Interview Info  --}}
                                @php
                                    $contract_male_total = [];
                                    $contract_female_total = [];
                                    $contact_male_female_total = [];
                                @endphp
                                @foreach ($demand->interview_table as $interview_list)
                                    <tr style="background-color: #eaedef;">
                                        <td colspan="5" style="text-align: right;">
                                            Interview Information
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $interview_list->interview_date ?? '' }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $interview_list->interview_male ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $interview_list->interview_female ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $interview_male = $interview_list->interview_male ?? 0;
                                                $interview_female = $interview_list->interview_female ?? 0;
                                                $contact_total = $interview_male + $interview_female;
                                                echo $contact_total;
                                                $interview_male_total[] = $interview_male;
                                                $interview_female_total[] = $interview_female;
                                                $contact_male_female_total[] = $contact_total;
                                            @endphp
                                        </td>

                                        {{-- Balance M --}}
                                        <td style="text-align: center;">
                                            @php
                                                $interview_balance_male = $demand_male - $interview_male;
                                                echo $interview_balance_male;
                                            @endphp
                                        </td>

                                        {{-- Balance F --}}
                                        <td style="text-align: center;">
                                            @php
                                                $interview_balance_female = $demand_female - $interview_female;
                                                echo $interview_balance_female;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $interview_balance_total = $interview_balance_male + $interview_balance_female;
                                                echo $interview_balance_total;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            <span style="font-size: 11px; color: red;">
                                                {{ $interview_list->remark ?? '' }}
                                            </span>
                                        </td>

                                        <td style="text-align: center;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item"
                                                        href="{{ route('add_interview_worker', $interview_list->id) }}">
                                                        Add Interview Labours
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('interview.show', $interview_list->id) }}">
                                                        View Interview Labours
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('interview.edit', $interview_list->id) }}">
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach




                                {{-- Contact Info  --}}
                                @php
                                    $contract_male_total = [];
                                    $contract_female_total = [];
                                    $contact_male_female_total = [];
                                @endphp
                                @foreach ($demand->contract_list_table as $contract_list)
                                    <tr style="background-color: #eaedef;">
                                        <td colspan="5" style="text-align: right;">
                                            Contract Information
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $contract_list->contract_date ?? '' }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $contract_list->contract_male ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $contract_list->contract_female ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $contract_male = $contract_list->contract_male ?? 0;
                                                $contract_female = $contract_list->contract_female ?? 0;
                                                $contact_total = $contract_male + $contract_female;
                                                echo $contact_total;
                                                $contract_male_total[] = $contract_male;
                                                $contract_female_total[] = $contract_female;
                                                $contact_male_female_total[] = $contact_total;
                                            @endphp
                                        </td>

                                        {{-- Balance M --}}
                                        <td style="text-align: center;">
                                            @php
                                                $contract_balance_male = $demand_male - $contract_male;
                                                echo $contract_balance_male;
                                            @endphp
                                        </td>

                                        {{-- Balance F --}}
                                        <td style="text-align: center;">
                                            @php
                                                $contract_balance_female = $demand_female - $contract_female;
                                                echo $contract_balance_female;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $contract_balance_total = $contract_balance_male + $contract_balance_female;
                                                echo $contract_balance_total;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            <span style="font-size: 11px; color: red;">
                                                {{ $contract_list->remark ?? '' }}
                                            </span>
                                        </td>

                                        <td style="text-align: center;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item"
                                                        href="{{ route('view_contract_labour', $contract_list->id) }}">
                                                        Contract Labours
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('file_upload_view_contract', $contract_list->id) }}">
                                                        Files
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('contract.edit', $contract_list->id) }}">
                                                        Edit
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                                {{-- Sending Info  --}}
                                @foreach ($demand->sendings_list_table as $sendings_list)
                                    <tr style="background-color: #eaedef;">
                                        <td colspan="5" style="text-align: right;">
                                            Sending Information
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $sendings_list->sending_date ?? '' }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $sendings_list->sending_male ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            {{ $sendings_list->sending_female ?? 0 }}
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $sending_male = $sendings_list->sending_male ?? 0;
                                                $sending_female = $sendings_list->sending_female ?? 0;
                                                $sending_total = $sending_male + $sending_female;
                                                echo $sending_total;
                                            @endphp
                                        </td>

                                        {{-- Balance M --}}
                                        <td style="text-align: center;">
                                            @php
                                                $sending_balance_male = $demand_male - $sending_male;
                                                echo $sending_balance_male;
                                            @endphp
                                        </td>

                                        {{-- Balance F --}}
                                        <td style="text-align: center;">
                                            @php
                                                $sending_balance_female = $demand_female - $sending_female;
                                                echo $sending_balance_female;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            @php
                                                $sending_balance_total = $sending_balance_male + $sending_balance_female;
                                                echo $sending_balance_total;
                                            @endphp
                                        </td>

                                        <td style="text-align: center;">
                                            <span style="font-size: 11px; color: red;">
                                                {{ $sendings_list->remark ?? 0 }}
                                            </span>
                                        </td>

                                        <td style="text-align: center;">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">

                                                    <a class="dropdown-item"
                                                        href="{{ route('sending_labour', $sendings_list->id) }}">
                                                        Sending Labours
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('file_upload_view_sending', $sendings_list->id) }}">
                                                        Files
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('sending.edit', $sendings_list->id) }}">
                                                        Edit
                                                    </a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
