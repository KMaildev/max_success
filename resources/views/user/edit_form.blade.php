@extends('layouts.based.hr_main')
@section('content')
    <section class="content-header">
        <h1>
            Edit user
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Edit user
            </li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">
                            <form action="{{ route('users.update', $value->id) }}" method="POST" autocomplete="off"
                                id="edit-form" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Employee ID
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('employee_id') is-invalid @enderror"
                                            type="text" name="employee_id" value="{{ $value->employee_id }}" />
                                        @error('employee_id')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Name
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ $value->name }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Email
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                                            name="email" value="{{ $value->email }}" />
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Phone
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ $value->phone }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Photo
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('passport_photo') is-invalid @enderror"
                                            type="file" name="passport_photo" value="{{ old('passport_photo') }}" />
                                        @error('passport_photo')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        NRC Number
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('nrc_number') is-invalid @enderror" type="text"
                                            name="nrc_number" value="{{ $value->nrc_number }}" />
                                        @error('nrc_number')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Gender
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control">
                                            <option value="male" @if ($value->gender == 'male') selected @endif>
                                                Male
                                            </option>
                                            <option value="female" @if ($value->gender == 'female') selected @endif>
                                                Female
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Address
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('address') is-invalid @enderror" type="text"
                                            name="address" value="{{ $value->address }}" />
                                        @error('address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Password
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            type="password" name="password" value="{{ old('password') }}" />
                                        @error('password')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Join Date
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control date_picker @error('join_date') is-invalid @enderror"
                                            type="text" name="join_date" value="{{ $value->join_date }}" />
                                        @error('join_date')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="select2Multiple" class="col-md-3 control-label">
                                        Role
                                    </label>
                                    <div class="col-md-9">
                                        <select id="select2Multiple" class="select2 form-select" multiple name="roles[]">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}"
                                                    @if (in_array($role->id, $old_roles)) selected @endif>
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="select2Multiple" class="col-md-3 control-label">
                                        Country
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="countrie_id" style="width: 100%">
                                            @foreach ($countries as $countrie)
                                                <option value="{{ $countrie->id }}"
                                                    @if ($countrie->id == $value->countrie_id) selected @endif>
                                                    {{ $countrie->title ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-search-input" class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <button class="btn btn-info">
                                            <span class="fa fa-fw fa-pencil"></span>
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
