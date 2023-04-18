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
                                    <a class="nav-link active" href="{{ route('agent_list.show', $agent_list->id) }}">
                                        <i class='bx bx-user'></i> Profile
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('members_list.show', $agent_list->id) }}">
                                        <i class='bx bx-user'></i> Files
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <!-- About User -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <small class="text-muted text-uppercase">About</small>
                                    <ul class="list-unstyled mb-4 mt-3">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-id-card"></i>
                                            <span class="fw-semibold mx-2">Agent Code:</span>
                                            <span>{{ $agent_list->agent_code ?? '' }}</span>
                                        </li>

                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-user"></i>
                                            <span class="fw-semibold mx-2">Name:</span>
                                            <span>{{ $agent_list->name ?? '' }}</span>
                                        </li>

                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-id-card"></i>
                                            <span class="fw-semibold mx-2">NRC:</span>
                                            <span>{{ $agent_list->nrc ?? '' }}</span>
                                        </li>


                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-id-card"></i>
                                            <span class="fw-semibold mx-2">Region:</span>
                                            <span>{{ $agent_list->region_table->region ?? '' }}</span>
                                        </li>

                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-id-card"></i>
                                            <span class="fw-semibold mx-2">Township:</span>
                                            <span>{{ $agent_list->township_table->township ?? '' }}</span>
                                        </li>


                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-id-card"></i>
                                            <span class="fw-semibold mx-2">Remark:</span>
                                            <span>{{ $agent_list->remark ?? '' }}</span>
                                        </li>

                                    </ul>


                                    <small class="text-muted text-uppercase">
                                        CONTACTS
                                    </small>
                                    <ul class="list-unstyled mb-4 mt-3">
                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-phone"></i>
                                            <span class="fw-semibold mx-2">Phone:</span>
                                            <span>{{ $agent_list->phone ?? '' }}</span>
                                        </li>

                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-envelope"></i>
                                            <span class="fw-semibold mx-2">Email:</span>
                                            <span>{{ $agent_list->email ?? '' }}</span>
                                        </li>

                                        <li class="d-flex align-items-center mb-3">
                                            <i class="bx bx-map"></i>
                                            <span class="fw-semibold mx-2">Address:</span>
                                            <span>{{ $agent_list->address ?? '' }}</span>
                                        </li>
                                    </ul>

                                    <small class="text-muted text-uppercase">
                                        NRC Photo
                                    </small>
                                    <ul class="list-unstyled mb-4 mt-3">
                                        @if ($agent_list->nrc_front)
                                            <img src="{{ Storage::url($agent_list->nrc_front) }}" alt=""
                                                style="width: 170px; background-position: center; background-size: cover;">
                                        @endif

                                        @if ($agent_list->nrc_back)
                                            <img src="{{ Storage::url($agent_list->nrc_back) }}" alt=""
                                                style="width: 170px; background-position: center; background-size: cover;">
                                        @endif
                                    </ul>

                                </div>
                            </div>
                            <!--/ About User -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
