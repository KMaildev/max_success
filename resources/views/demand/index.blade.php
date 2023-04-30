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
                                            Cabinet Date
                                        </th>

                                        <th class="text-white w-5">
                                            Issue Date
                                        </th>

                                        <th class="text-white w-5">
                                            Issue Number Date
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
                                            Edit
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

                                            <td data-title="Cabinet Date">
                                                {{ $demand->cabinet_date }}
                                            </td>

                                            <td data-title="Issue Date">
                                                {{ $demand->issue_date }}
                                            </td>

                                            <td data-title="Demand Number">
                                                {{ $demand->issue_number }}
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

                                            <td data-title="Edit">
                                                <button type="button" class="btn btn-sm btn-block btn-primary"
                                                    data-toggle="modal" data-target="#editModal_{{ $demand->id }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('demand.edit')
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
                                            Cabinet Date
                                        </th>

                                        <th class="text-white w-5">
                                            Issue Date
                                        </th>

                                        <th class="text-white w-5">
                                            Issue Number Date
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
<script></script>
@endsection