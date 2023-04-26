@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Agent Lists
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Agent Lists
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
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Photo
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Agent Code
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Name
                                        </th>
                                        <th class="text-center text-white w-5">
                                            NRC
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Phone
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Email
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Region
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Township
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Address
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Worker
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Edit
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Detail
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agent_lists as $key => $agent_list)
                                        <tr>
                                            <td data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Photo">
                                                @if ($agent_list->photo)
                                                    <img src="{{ Storage::url($agent_list->photo) }}" alt=""
                                                        style="width: 50px; height: 50px; background-position: center; background-size: cover;">
                                                @endif
                                            </td>

                                            <td data-title="Agent Code">
                                                {{ $agent_list->agent_code ?? '' }}
                                            </td>

                                            <td data-title="Name">
                                                {{ $agent_list->name ?? '' }}
                                            </td>

                                            <td data-title="NRC">
                                                {{ $agent_list->nrc ?? '' }}
                                            </td>

                                            <td data-title="Phone">
                                                <a href="tel:{{ $agent_list->phone }}">
                                                    {{ $agent_list->phone }}
                                                </a>
                                            </td>

                                            <td data-title="Email">
                                                <a href="mailto:{{ $agent_list->email }}">
                                                    {{ $agent_list->email }}
                                                </a>
                                            </td>

                                            <td data-title="Region">
                                                {{ $agent_list->region_table->region ?? '' }}
                                            </td>

                                            <td data-title="Township">
                                                {{ $agent_list->township_table->township ?? '' }}
                                            </td>

                                            <td data-title="Address">
                                                {{ $agent_list->address }}
                                            </td>

                                            <td data-title="Total Worker">
                                                <a href="{{ route('passport.index', ['agent_list_id' => $agent_list->id]) }}"
                                                    class="btn btn-primary btn-sm">
                                                    Total: {{ $agent_list->passport_table_count ?? 0 }}
                                                </a>
                                            </td>

                                            <td data-title="Edit">
                                                <a href="{{ route('agent_list.edit', $agent_list->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    Edit
                                                </a>
                                            </td>

                                            <td data-title="Detail">
                                                <a href="{{ route('agent_list.show', $agent_list->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Photo
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Agent Code
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Name
                                        </th>
                                        <th class="text-center text-white w-5">
                                            NRC
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Phone
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Email
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Region
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Township
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Address
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Worker
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Edit
                                        </th>
                                        <th class="text-center text-white w-5">
                                            Detail
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
