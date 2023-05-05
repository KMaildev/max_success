@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Sending Lists / Departure
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Sending Lists
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Sending Lists
                        </h3>
                    </div>
                    <div class="box-body">
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
                                            Oversea Company
                                        </th>
                                        <th class="text-white w-5">
                                            Male
                                        </th>
                                        <th class="text-white w-5">
                                            Female
                                        </th>
                                        <th class="text-white w-5">
                                            Total
                                        </th>
                                        <th class="text-white w-5">
                                            Sending Date
                                        </th>
                                        <th class="text-white w-5">
                                            Remark
                                        </th>
                                        <th class="text-white w-5">
                                            Sending Labour
                                        </th>
                                        <th class="text-white w-5">
                                            Files
                                        </th>
                                        <th class="text-white w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sendings as $key => $sending)
                                        <tr>
                                            <td data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Office">
                                                {{ $sending->demands_table->office_table->name ?? '' }}
                                            </td>

                                            <td data-title="Company Name">
                                                {{ $sending->demands_table->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td data-title="Male" style="text-align: right; font-weight: bold">
                                                {{ number_format($sending->sending_male) }}
                                            </td>

                                            <td data-title="Female" style="text-align: right; font-weight: bold">
                                                {{ number_format($sending->sending_female) }}
                                            </td>

                                            <td data-title="Total" style="text-align: right; font-weight: bold">
                                                {{ number_format($sending->sending_male + $sending->sending_female) }}
                                            </td>

                                            <td data-title="Depature/Sending Date"
                                                style="text-align: center; font-weight: bold">
                                                {{ $sending->sending_date }}
                                            </td>

                                            <td data-title="Remark" style="text-align: center; font-weight: bold">
                                                {{ $sending->remark ?? '' }}
                                            </td>

                                            <td data-title="Remark" style="text-align: center; font-weight: bold">
                                                <a href="{{ route('sending_labour', $sending->id) }}">
                                                    Sending Labours
                                                </a>
                                            </td>

                                            <td>
                                                <a data-title="Files" style="text-align: center; font-weight: bold"
                                                    href="{{ route('file_upload_view_sending', $sending->id) }}">
                                                    Doc Management
                                                </a>
                                            </td>

                                            <td data-title="Edit" style="text-align: center">
                                                <a href="{{ route('sending.edit', $sending->id) }}"
                                                    class="btn btn-sm btn-block btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>
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
    </section>
@endsection

@section('script')
@endsection
