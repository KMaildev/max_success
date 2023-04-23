<form class="form-horizontal" action="{{ route('users.store') }}" method="POST" autocomplete="off" id="create-form"
    role="form" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#general" data-toggle="tab" aria-expanded="false">
                        General
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- General Start -->
                <div class="tab-pane active" id="general">
                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            User ID
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('employee_id') is-invalid @enderror" type="text"
                                name="employee_id" value="{{ old('employee_id') }}" />
                            @error('employee_id')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Name
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                name="name" value="{{ old('name') }}" />
                            @error('name')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Email
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Phone
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                name="phone" value="{{ old('phone') }}" />
                            @error('phone')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Photo
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('passport_photo') is-invalid @enderror" type="file"
                                name="passport_photo" value="{{ old('passport_photo') }}" />
                            @error('passport_photo')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            NRC Number
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('nrc_number') is-invalid @enderror" type="text"
                                name="nrc_number" value="{{ old('nrc_number') }}" />
                            @error('nrc_number')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Gender
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Address
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('address') is-invalid @enderror" type="text"
                                name="address" value="{{ old('address') }}" />
                            @error('address')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Password
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                name="password" value="{{ old('password') }}" />
                            @error('password')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Join Date
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control date_picker @error('join_date') is-invalid @enderror"
                                type="text" name="join_date" value="{{ old('join_date') }}" />
                            @error('join_date')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="select2Multiple" class="col-md-3 control-label">
                            Role
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <select class="select2 form-control" multiple name="roles[]" style="width: 100%">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="select2Multiple" class="col-md-3 control-label">
                            Country
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <select class="form-control" name="countrie_id" style="width: 100%">
                                @foreach ($countries as $countrie)
                                    <option value="{{ $countrie->id }}">
                                        {{ $countrie->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- General End -->

                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-4">
                        <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                            name="create-product-submit">
                            <span class="fa fa-fw fa-save"></span>
                            Save
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <button type="reset" class="btn btn-warning btn-block" id="reset" name="reset">
                            <span class="fa fa-circle-o"></span>
                            Reset
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
