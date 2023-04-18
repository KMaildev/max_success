@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Passport Lists
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <input type="date" class="form-control form-control-sm" name="from_date" />
                                        <input type="date" class="form-control form-control-sm" name="to_date" />
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="agent_list_id" id="" class="form-control form-control-sm">
                                            <option value="">
                                                --Select Agent--
                                            </option>
                                            @foreach ($agent_lists as $agent_list)
                                                <option value="{{ $agent_list->id ?? '' }}">
                                                    {{ $agent_list->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('passport.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Search"
                                            name="search" />
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <a href="{{ route('passport.create') }}"
                                    class="dt-button create-new btn btn-primary btn-sm">
                                    <span>
                                        <i class="bx bx-plus me-sm-2"></i>
                                        <span class="d-none d-sm-inline-block">Create</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <span style="margin: 2px; font-weight: bold;">
                    Total Passport: {{ $total_passports }}
                    <br>
                    Result: {{ count($passports) }}
                </span>
                <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table">
                        <thead class="tbbg">
                            <tr>
                                <th class="text-center text-white" style="width: 1%; background-color: #296166;">
                                    #
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Name
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    M/F
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    NRC
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Father Name
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Date of Birth
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Address
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Overseas Company
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Passport No
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Date of Passport
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    OWIC
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Place of Passport
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Phone No
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Agent Name
                                </th>
                                <th class="text-center text-white" style="background-color: #296166;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($passports as $key => $passport)
                                <tr>
                                    <td class="text-center">
                                        {{ $key + 1 }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ ucfirst($passport->gender ?? '') }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->nrc ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->father_name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->date_of_birth ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->address ?? '' }}
                                    </td>

                                    <td>
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport_date ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->owic ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->place_of_passport ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->phone ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->agent_list_table->name ?? '' }}
                                    </td>

                                    <td style="text-align: center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('passport.edit', $passport->id) }}">
                                                    Edit & OWIC
                                                </a>

                                                <a class="dropdown-item"
                                                    href="{{ route('cancel_reject_passport', $passport->id) }}">
                                                    Cancel (Reject)
                                                </a>

                                                <form action="{{ route('passport.destroy', $passport->id) }}"
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
                    </table>
                    {{ $passports->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
