@extends('layouts.based.base_main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Sending Lists
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('sending.index') }}" method="get" autocomplete="off">
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
                                <form action="{{ route('sending.index') }}" method="get" autocomplete="off">
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
                                <form action="{{ route('sending.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="overseas_agencie_id" id="" class="form-control select2"
                                            style="width: 200px;">
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

                            <a href="{{ route('sending_export_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>

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
                                    Male
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Female
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Total
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Sending Date
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
                            @foreach ($sendings as $key => $sending)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $sending->demands_table->office_table->name ?? '' }}
                                    </td>

                                    <td>
                                        {{ $sending->demands_table->overseas_agencies_table->company_name ?? '' }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($sending->sending_male) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($sending->sending_female) }}
                                    </td>

                                    <td style="text-align: right; font-weight: bold">
                                        {{ number_format($sending->sending_male + $sending->sending_female) }}
                                    </td>

                                    <td style="text-align: center; font-weight: bold">
                                        {{ $sending->sending_date }}
                                    </td>

                                    <td style="text-align: center; font-weight: bold">
                                        {{ $sending->remark ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('sending_labour', $sending->id) }}">
                                                    Sending Labours
                                                </a>

                                                <a class="dropdown-item" href="{{ route('sending.edit', $sending->id) }}">
                                                    Edit
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('file_upload_view_sending', $sending->id) }}">
                                                    Files
                                                </a>

                                                <form hidden action="{{ route('sending.destroy', $sending->id) }}"
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
                        <tr>
                            <td colspan="3">Total</td>
                            <td style="text-align: right;">
                                {{ $sendings->sum('sending_male') }}
                            </td>
                            <td style="text-align: right;">
                                {{ $sendings->sum('sending_female') }}
                            </td>
                            <td style="text-align: right;">
                                {{ $sendings->sum('sending_male') + $sendings->sum('sending_female') }}
                            </td>
                            <td colspan="3"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
