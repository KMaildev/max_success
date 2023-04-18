@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">Users</h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('users.index') }}" method="get">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        name="search" />
                                </form>
                            </div>

                            <a href="{{ route('users.create') }}" class="dt-button create-new btn btn-primary btn-sm">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap rowheaders table-scroll outer-wrapper" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table" style="margin-bottom: 100px;">
                        <thead class="tbbg">
                            <tr>
                                <th class="text-center text-white" style="width: 1%;">#</th>
                                <th class="text-center text-white">Photo</th>
                                <th class="text-center text-white">ID</th>
                                <th class="text-center text-white">Name</th>
                                <th class="text-center text-white">NRC</th>
                                <th class="text-center text-white">Email</th>
                                <th class="text-center text-white">Phone</th>
                                <th class="text-center text-white">Address</th>
                                <th class="text-center text-white">Join Date</th>
                                <th class="text-center text-white">Gender</th>
                                <th class="text-center text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $key => $value)
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>

                                    <td style="text-align: center;">
                                        @if ($value->passport_photo)
                                            <img src="{{ Storage::url($value->passport_photo) }}" alt=""
                                                style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                        @endif
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->employee_id }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->name }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->nrc_number ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->email }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->phone ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->address ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->join_date ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        {{ $value->gender ?? '' }}
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-xs dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('users.edit', $value->id) }}">Edit</a>
                                                </li>
                                            </ul>
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
