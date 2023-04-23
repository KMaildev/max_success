@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Hospital
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Hospital
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Hospital
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('hospital.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Hospital List
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-2">#</th>
                                        <th class="text-center text-white w-5">Hospital Name</th>
                                        <th class="text-center text-white w-5">Location</th>
                                        <th class="text-center text-white w-5">Phone</th>
                                        <th class="text-center text-white w-5">Submit Date</th>
                                        <th class="text-center text-white w-5">Remark</th>
                                        <th class="text-center text-white w-5">Attachment File</th>
                                        <th class="text-center text-white w-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countryies as $key => $country)
                                        <tr>
                                            <td class="text-center" data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Name">
                                                {{ $country->name ?? '' }}
                                            </td>

                                            <td data-title="Location">
                                                {{ $country->location ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="Phone">
                                                <a href="tel:{{ $country->phone ?? '' }}">
                                                    {{ $country->phone ?? '' }}
                                                </a>
                                            </td>

                                            <td class="text-center" data-title="Date">
                                                {{ $country->submit_date ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="Remark">
                                                {{ $country->remark ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="Files">
                                                <a href="{{ route('hospital_docs_management', $country->id) }}">
                                                    Attachment File
                                                </a>
                                            </td>

                                            <td style="text-align: center" data-title="Edit">
                                                <button type="button" class="btn btn-sm btn-block btn-primary"
                                                    data-toggle="modal" data-target="#editModal_{{ $country->id }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        @include('hospital.edit')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5">#</th>
                                        <th class="text-center text-white w-5">Hospital Name</th>
                                        <th class="text-center text-white w-5">Location</th>
                                        <th class="text-center text-white w-5">Phone</th>
                                        <th class="text-center text-white w-5">Submit Date</th>
                                        <th class="text-center text-white w-5">Remark</th>
                                        <th class="text-center text-white w-5">Attachment File</th>
                                        <th class="text-center text-white w-5">Actions</th>
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
