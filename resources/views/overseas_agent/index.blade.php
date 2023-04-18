@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Overseas Agent
                        </h5>
                        <div class="card-title-elements ms-auto">
                            <div class="card-header-elements ms-auto">
                                <form action="{{ route('overseas_agent.index') }}" method="GET" autocomplete="off">
                                    <input type="text" class="form-control" placeholder="Search"
                                        name="search">
                                </form>
                            </div>


                            <a href="{{ route('overseas_agent_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>

                            <a href="{{ route('overseas_agent.create') }}"
                                class="dt-button create-new btn btn-primary">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>


                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table">
                        <thead>
                            <tr class="tbbg">
                                <th class="text-center text-white" style="width: 1%; background-color: #296166">#</th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Company Name
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Contact
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Type
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Phone
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Email
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Address
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Country
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Remark
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($overseas_agencies as $key => $overseas_agency)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_name }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->contact }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->type_of_company }}
                                    </td>

                                    <td>
                                        <a href="tel:{{ $overseas_agency->company_phone }}">
                                            {{ $overseas_agency->company_phone }}
                                        </a>
                                    </td>

                                    <td>
                                        <a href="mailto:{{ $overseas_agency->company_email }}">
                                            {{ $overseas_agency->company_email }}
                                        </a>
                                    </td>

                                    <td>
                                        {{ $overseas_agency->company_address }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->countries_table->title ?? '' }}
                                    </td>

                                    <td>
                                        {{ $overseas_agency->remark ?? '' }}
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ route('overseas_agent.edit', $overseas_agency->id) }}">Edit</a>

                                                <form action="{{ route('overseas_agent.destroy', $overseas_agency->id) }}"
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
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
