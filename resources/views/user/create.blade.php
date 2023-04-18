@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">Employee</h5>
                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST" autocomplete="off" id="create-form" role="form"
                        enctype="multipart/form-data">
                        <h6 class="mb-b fw-normal">1. Account Details</h6>
                        @csrf

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">User ID</label>
                            <div class="col-md-9">
                                <input class="form-control @error('employee_id') is-invalid @enderror" type="text"
                                    name="employee_id" value="{{ old('employee_id') }}" />
                                @error('employee_id')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control @error('email') is-invalid @enderror" type="email"
                                    name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    name="phone" value="{{ old('phone') }}" />
                                @error('phone')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Passport Photo</label>
                            <div class="col-md-9">
                                <input class="form-control @error('passport_photo') is-invalid @enderror" type="file"
                                    name="passport_photo" value="{{ old('passport_photo') }}" />
                                @error('passport_photo')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">NRC Number</label>
                            <div class="col-md-9">
                                <input class="form-control @error('nrc_number') is-invalid @enderror" type="text"
                                    name="nrc_number" value="{{ old('nrc_number') }}" />
                                @error('nrc_number')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Gender</label>
                            <div class="col-md-9">
                                <select name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <input class="form-control @error('address') is-invalid @enderror" type="text"
                                    name="address" value="{{ old('address') }}" />
                                @error('address')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control @error('password') is-invalid @enderror" type="password"
                                    name="password" value="{{ old('password') }}" />
                                @error('password')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Join Date</label>
                            <div class="col-md-9">
                                <input class="form-control date_picker @error('join_date') is-invalid @enderror"
                                    type="text" name="join_date" value="{{ old('join_date') }}" />
                                @error('join_date')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="select2Multiple" class="col-md-3 form-label">
                                Role
                            </label>
                            <div class="col-md-9">
                                <select id="select2Multiple" class="select2 form-select" multiple name="roles[]">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreUser', '#create-form') !!}
@endsection
