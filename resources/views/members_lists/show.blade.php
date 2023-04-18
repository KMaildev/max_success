@extends('layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 col-lg-8">
            <div class="row">
                <div class="col-12">

                    <div class="card mb-4">
                        <div class="user-profile-header-banner">
                            <img src="{{ asset('assets/img/pages/profile-banner.png') }}" alt="Banner image"
                                class="rounded-top">
                        </div>
                        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                @if ($agent_list->photo)
                                    <img src="{{ Storage::url($agent_list->photo) }}" alt=""
                                        class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                                @else
                                    <img src="{{ asset('data/profile.png') }}" alt="user image"
                                        class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                                @endif
                            </div>
                            <div class="flex-grow-1 mt-3 mt-sm-5">
                                <div
                                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                    <div class="user-profile-info">
                                        <h4>{{ $agent_list->name }}</h4>
                                        <ul
                                            class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                            <li class="list-inline-item fw-semibold">
                                                <i class='bx bx-calendar-alt'></i>
                                                Joined
                                                {{ $agent_list->created_at->diffForHumans() }}
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="mailto:{{ $agent_list->email }}" class="btn btn-primary text-nowrap">
                                        <i class='bx bx-mail-send'></i> Send Mail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent_list.show', $agent_list->id) }}">
                                        <i class='bx bx-user'></i> Profile
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('members_list.show', $agent_list->id) }}">
                                        <i class='bx bx-user'></i> Files
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4>
                                        Files
                                    </h4>

                                    <form action="{{ route('members_list.store') }}" method="POST" autocomplete="off"
                                        id="create-form" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="agent_list_id" value="{{ $agent_list->id }}" required>
                                        <div class="input-group">
                                            <input class="form-control @error('members_list_files') is-invalid @enderror"
                                                type="file" name="members_list_files[]" multiple
                                                value="{{ old('members_list_files') }}" required />
                                            @error('members_list_files')
                                                <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                            <button class="btn btn-outline-primary" type="submit"
                                                id="inputGroupFileAddon04">Upload</button>
                                        </div>
                                    </form>

                                    <div class="col-xl-12 col-lg-12 col-md-12 py-3">
                                        <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                                            aria-labelledby="HeadersCol" tabindex="0">
                                            <table class="table table-bordered main-table">
                                                <thead class="tbbg">
                                                    <tr>
                                                        <th class="text-center text-white" style="width: 1%;">#</th>
                                                        <th class="text-center text-white">File Name</th>
                                                        <th class="text-center text-white">Photo</th>
                                                        <th class="text-center text-white">Download</th>
                                                        <th class="text-center text-white">Upload By</th>
                                                        <th class="text-center text-white" style="width: 1%;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    @foreach ($members_lists as $key => $value)
                                                        <tr>
                                                            <td>
                                                                {{ $key + 1 }}
                                                            </td>

                                                            <td>
                                                                <strong>{{ $value->file_name ?? '' }}</strong>
                                                            </td>

                                                            <td>
                                                                @php
                                                                    $file_extension = substr(strrchr($value->file_name, '.'), 1);
                                                                @endphp
                                                                @if ($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg')
                                                                    <img src="{{ Storage::url($value->file_path) }}"
                                                                        alt=""
                                                                        style="width: 50px; height: 50px; background-position: center; background-size: cover;"
                                                                        data-enlargeable="">
                                                                @endif
                                                            </td>

                                                            <td>
                                                                <a href="{{ Storage::url($value->file_path) }}"
                                                                    download="{{ $value->file_name ?? '' }}">
                                                                    <i class="fa fa-download fa-lg text-danger"></i>
                                                                    <strong>Download</strong>
                                                                </a>
                                                            </td>

                                                            <td>
                                                                <i class="fa fa-user fa-lg text-success"></i>
                                                                <strong>{{ $value->users_table->name ?? '' }}</strong>
                                                            </td>

                                                            <td>
                                                                <form
                                                                    action="{{ route('members_list.destroy', $value->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button"
                                                                        class="btn btn-danger btn-sm del_confirm"
                                                                        id="confirm-text"
                                                                        data-toggle="tooltip">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
