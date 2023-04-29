@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Demands
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Demands
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Demand
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('demand.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Demands
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
                                            Country
                                        </th>

                                        <th class="text-white w-5">
                                            Job
                                        </th>

                                        <th class="text-white w-5">
                                            Salary
                                        </th>

                                        <th class="text-white w-5">
                                            Demand Date
                                        </th>

                                        <th class="text-white w-5">
                                            Male
                                        </th>

                                        <th class="text-white w-5">
                                            Femal
                                        </th>

                                        <th class="text-white w-5">
                                            Total
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Male
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Female
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Total
                                        </th>

                                        <th class="text-white w-5">
                                            Remark
                                        </th>

                                        <th class="text-white w-5">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demands as $key => $demand)
                                        <tr>
                                            <td data-title="Sr">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Company">
                                                {{ $demand->office_table->name ?? '' }}
                                            </td>

                                            <td data-title="Oversea Company/Agent">
                                                {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td data-title="Country">
                                                {{ $demand->country->title ?? '' }}
                                            </td>

                                            <td data-title="Job">
                                                {{ $demand->job ?? '' }}
                                            </td>

                                            <td data-title="Salary">
                                                {{ $demand->salary ?? '' }}
                                                {{ $demand->country->currency_format ?? '' }}
                                            </td>

                                            <td data-title="Demand Date">
                                                {{ $demand->demand_date }}
                                            </td>

                                            <td data-title="Male">
                                                @php
                                                    $demand_male = $demand->male ?? 0;
                                                    echo $demand_male;
                                                    $demandMaleTotal[] = $demand_male;
                                                @endphp
                                            </td>

                                            <td data-title="Female">
                                                @php
                                                    $demand_female = $demand->female ?? 0;
                                                    echo $demand_female;
                                                    $demandFemaleTotal[] = $demand_female;
                                                @endphp
                                            </td>

                                            <td data-title="Total">
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
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="{{ route('demand.edit', $demand->id) }}">
                                                            Edit
                                                        </a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('file_upload_view_demand', $demand->id) }}">
                                                            Files
                                                        </a>

                                                        <form action="{{ route('demand.destroy', $demand->id) }}"
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
                                            Country
                                        </th>

                                        <th class="text-white w-5">
                                            Job
                                        </th>

                                        <th class="text-white w-5">
                                            Salary
                                        </th>

                                        <th class="text-white w-5">
                                            Demand Date
                                        </th>

                                        <th class="text-white w-5">
                                            Male
                                        </th>

                                        <th class="text-white w-5">
                                            Femal
                                        </th>

                                        <th class="text-white w-5">
                                            Total
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Male
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Female
                                        </th>

                                        <th class="text-white w-5">
                                            Balance Total
                                        </th>

                                        <th class="text-white w-5">
                                            Remark
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
