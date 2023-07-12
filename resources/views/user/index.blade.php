@extends('layouts.based.hr_main')
@section('content')
    <section class="content-header">
        <h1>
            Users
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Users
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New User
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>

            @include('user.create')

        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            User List
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5">#</th>
                                        <th class="text-center text-white w-5">Photo</th>
                                        <th class="text-center text-white w-5">ID</th>
                                        <th class="text-center text-white w-5">Name</th>
                                        <th class="text-center text-white w-5">NRC</th>
                                        <th class="text-center text-white w-5">Email</th>
                                        <th class="text-center text-white w-5">Phone</th>
                                        <th class="text-center text-white w-5">Address</th>
                                        <th class="text-center text-white w-5">Join Date</th>
                                        <th class="text-center text-white w-5">Gender</th>
                                        <th class="text-center text-white w-5">Country</th>
                                        <th class="text-center text-white w-5">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $value)
                                        <tr id="row_1" role="row" class="odd">

                                            <td style="text-align: center;" data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;" data-title="Photo">
                                                @if ($value->passport_photo)
                                                    <img src="{{ Storage::url($value->passport_photo) }}" alt=""
                                                        style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                                @endif
                                            </td>

                                            <td style="text-align: center;" data-title="ID">
                                                {{ $value->employee_id }}
                                            </td>

                                            <td style="text-align: center;" data-title="Name">
                                                {{ $value->name }}
                                            </td>

                                            <td style="text-align: center;" data-title="NRC">
                                                {{ $value->nrc_number ?? '' }}
                                            </td>

                                            <td style="text-align: center;" data-title="Email">
                                                {{ $value->email }}
                                            </td>

                                            <td style="text-align: center;" data-title="Phone">
                                                {{ $value->phone ?? '' }}
                                            </td>

                                            <td style="text-align: center;" data-title="Address">
                                                {{ $value->address ?? '' }}
                                            </td>

                                            <td style="text-align: center;" data-title="Join Date">
                                                {{ $value->join_date ?? '' }}
                                            </td>

                                            <td style="text-align: center;" data-title="Gender">
                                                {{ $value->gender ?? '' }}
                                            </td>

                                            <td style="text-align: center;" data-title="Country">
                                                {{ $value->country->title ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="Edit">
                                                <a href="{{ route('users.edit', $value->id) }}"
                                                    class="btn btn-sm btn-block btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-center text-white w-5">Photo</th>
                                        <th class="text-center text-white w-5">ID</th>
                                        <th class="text-center text-white w-5">Name</th>
                                        <th class="text-center text-white w-5">NRC</th>
                                        <th class="text-center text-white w-5">Email</th>
                                        <th class="text-center text-white w-5">Phone</th>
                                        <th class="text-center text-white w-5">Address</th>
                                        <th class="text-center text-white w-5">Join Date</th>
                                        <th class="text-center text-white w-5">Gender</th>
                                        <th class="text-center text-white w-5">Country</th>
                                        <th class="text-center text-white w-5">Action</th>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreUser', '#create-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\UpdateUser', '#edit-form') !!}
@endsection
