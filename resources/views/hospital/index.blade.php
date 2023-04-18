@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">Hospital</h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('hospital.index') }}" method="GET" autocomplete="off">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                </form>
                            </div>

                            <a href="{{ route('hospital_export_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>

                            <a href="{{ route('hospital.create') }}" class="dt-button create-new btn btn-primary">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-sm" style="margin-bottom: 50px">
                        <thead>
                            <tr class="tbbg">
                                <th class="text-center text-white" style="width: 1%;">#</th>
                                <th class="text-center text-white">Hospital Name</th>
                                <th class="text-center text-white">Location</th>
                                <th class="text-center text-white">Phone</th>
                                <th class="text-center text-white">Submit Date</th>
                                <th class="text-center text-white">Remark</th>
                                <th class="text-center text-white">Attachment File</th>
                                <th class="text-center text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($countryies as $key => $country)
                                <tr>
                                    <td class="text-center">
                                        {{ $key + 1 }}
                                    </td>

                                    <td class="text-center">
                                        {{ $country->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $country->location ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        <a href="tel:{{ $country->phone ?? '' }}">
                                            {{ $country->phone ?? '' }}
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        {{ $country->submit_date ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $country->remark ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('hospital_docs_management', $country->id) }}">
                                            Attachment File
                                        </a>
                                    </td>

                                    <td style="text-align: center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('hospital.edit', $country->id) }}">
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
