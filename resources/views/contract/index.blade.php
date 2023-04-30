@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Contact Lists
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Contact Lists
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Contact
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('contract.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Contacts
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
                                            Contract Date
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Remark
                                        </th>
                                        <th class="text-white w-5">
                                            Sending
                                        </th>
                                        <th class="text-white w-5">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contracts as $key => $contract)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $contract->demands_table->office_table->name ?? '' }}
                                            </td>

                                            <td>
                                                {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td style="text-align: right; font-weight: bold">
                                                {{ number_format($contract->contract_male) }}
                                            </td>

                                            <td style="text-align: right; font-weight: bold">
                                                {{ number_format($contract->contract_female) }}
                                            </td>

                                            <td style="text-align: right; font-weight: bold">
                                                {{ number_format($contract->contract_male + $contract->contract_female) }}
                                            </td>

                                            <td style="text-align: center; font-weight: bold">
                                                {{ $contract->contract_date }}
                                            </td>

                                            <td style="text-align: center; font-weight: bold">
                                                {{ $contract->remark ?? '' }}
                                            </td>

                                            <td style="text-align: center; font-weight: bold">
                                                @if ($contract->sending_table)
                                                    <span class="badge bg-success">
                                                        Sending
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        Pending
                                                    </span>
                                                @endif
                                            </td>

                                            <td style="text-align: center;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        <a class="dropdown-item"
                                                            href="{{ route('labour_create_view', $contract->id) }}">
                                                            Contract Labours
                                                        </a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('file_upload_view_contract', $contract->id) }}">
                                                            Files
                                                        </a>

                                                        @if ($contract->sending_table)
                                                        @else
                                                            <a class="dropdown-item"
                                                                href="{{ route('sending_create', $contract->id) }}">
                                                                Sending
                                                            </a>
                                                        @endif


                                                        <a class="dropdown-item"
                                                            href="{{ route('contract.edit', $contract->id) }}">
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('contract.destroy', $contract->id) }}"
                                                            method="POST" hidden>
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
                                <tfoot>
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
                                            Contract Date
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Remark
                                        </th>
                                        <th class="text-white w-5">
                                            Sending
                                        </th>
                                        <th class="text-white w-5">
                                            Action
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
