@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Foreign Agent
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Foreign Agent
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Agent
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('overseas_agent.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Foreign Agent
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">

                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Company Name
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Contact
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Type
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Phone
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Email
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Address
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Country
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Remark
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($overseas_agencies as $key => $overseas_agency)
                                        <tr>
                                            <td data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Company">
                                                {{ $overseas_agency->company_name }}
                                            </td>

                                            <td data-title="Contact">
                                                {{ $overseas_agency->contact }}
                                            </td>

                                            <td data-title="Type of Company">
                                                {{ $overseas_agency->type_of_company }}
                                            </td>

                                            <td data-title="Phone">
                                                <a href="tel:{{ $overseas_agency->company_phone }}">
                                                    {{ $overseas_agency->company_phone }}
                                                </a>
                                            </td>

                                            <td data-title="Email">
                                                <a href="mailto:{{ $overseas_agency->company_email }}">
                                                    {{ $overseas_agency->company_email }}
                                                </a>
                                            </td>

                                            <td data-title="Address">
                                                {{ $overseas_agency->company_address }}
                                            </td>

                                            <td data-title="Country">
                                                {{ $overseas_agency->countries_table->title ?? '' }}
                                            </td>

                                            <td data-title="Remark">
                                                {{ $overseas_agency->remark ?? '' }}
                                            </td>

                                            <td data-title="Edit">
                                                <button type="button" class="btn btn-sm btn-block btn-primary"
                                                    data-toggle="modal"
                                                    data-target="#editModal_{{ $overseas_agency->id }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('overseas_agent.edit')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Company Name
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Contact
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Type
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Phone
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Email
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Address
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Country
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Remark
                                        </th>
                                        <th class="text-center text-white  w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </tfoot>
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
