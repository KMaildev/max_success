@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Interview
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('interview.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            Search by date
                                        </span>
                                        <input type="text" class="form-control form-control-sm dob" name="from_date"
                                            placeholder="1.1.2023" style="width: 100px;" />
                                        <input type="text" class="form-control form-control-sm dob" name="to_date"
                                            placeholder="31.1.2023" style="width: 100px;" />
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('interview.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="overseas_agencie_id" id="" class="form-control select2"
                                            style="width: 200px;">
                                            <option value="0">
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


                            <a href="{{ route('interview_export_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>


                            <div class="card-header-elements ms-2">
                                <a href="{{ route('interview.create') }}" class="dt-button create-new btn btn-primary">
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
                                    Interview Title
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Interview Date
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Oversea Company
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Male
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Female
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Total
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Interview Remark
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($interviews as $key => $interview)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $interview->interview_title ?? '' }}
                                    </td>

                                    <td>
                                        {{ $interview->interview_date ?? '' }}
                                    </td>

                                    <td>
                                        {{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($interview->interview_male) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($interview->interview_female) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($interview->interview_male + $interview->interview_female) }}
                                    </td>

                                    <td>
                                        {{ $interview->remark ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('add_interview_worker', $interview->id) }}">
                                                    Add Interview Labours
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('interview.show', $interview->id) }}">
                                                    View Interview Labours
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('interview.edit', $interview->id) }}">
                                                    Edit
                                                </a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="4">Total</td>
                            <td style="text-align: right; font-weight: bold">
                                {{ $interviews->sum('interview_male') }}
                            </td>
                            <td style="text-align: right; font-weight: bold">
                                {{ $interviews->sum('interview_female') }}
                            </td>
                            <td style="text-align: right; font-weight: bold">
                                {{ $interviews->sum('interview_male') + $interviews->sum('interview_female') }}
                            </td>
                            <td colspan="2"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
