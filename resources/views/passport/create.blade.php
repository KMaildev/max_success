@extends('layouts.main')
@section('content')
    <div class="row justify-content-center py-3">
        <div class="col-xl-8">

            <h6 class="text-muted">
                Add New Passport
            </h6>
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                            Single entry
                        </button>
                    </li>
                    <li class="nav-item" hidden>
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                            Import Excel
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                        <h5 class="card-header mb-4">
                            Add New Labour (Single entry)
                        </h5>
                        <form action="{{ route('passport.store') }}" method="POST" autocomplete="off" id="create-form"
                            role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" value="{{ old('name') }}" placeholder="Name" />
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Labour Photo
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                        name="photo" value="{{ old('photo') }}" />
                                    @error('photo')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Gender
                                </label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="male" value="male" name="gender"
                                            class="form-check-input" checked>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="female" value="female" name="gender"
                                            class="form-check-input">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    NRC
                                </label>
                                <div class="col-md-7">
                                    <div id="nrcOption" class="py-1">
                                        <div class="input-group">
                                            <select name="nrcCode" id="nrcCode" class="form-control select2" required>
                                                <option value="">
                                                    ---
                                                </option>

                                                <option value="1">
                                                    1/
                                                </option>

                                                <option value="2">
                                                    2/
                                                </option>

                                                <option value="3">
                                                    3/
                                                </option>

                                                <option value="4">
                                                    4/
                                                </option>

                                                <option value="5">
                                                    5/
                                                </option>

                                                <option value="6">
                                                    6/
                                                </option>

                                                <option value="7">
                                                    7/
                                                </option>

                                                <option value="8">
                                                    8/
                                                </option>

                                                <option value="9">
                                                    9/
                                                </option>

                                                <option value="10">
                                                    10/
                                                </option>

                                                <option value="11">
                                                    11/
                                                </option>

                                                <option value="12">
                                                    12/
                                                </option>

                                                <option value="13">
                                                    13/
                                                </option>

                                                <option value="14">
                                                    14/
                                                </option>

                                            </select>

                                            <select name="nrcName" id="nrcName" class="form-control select2" required>
                                            </select>

                                            <select name="nrcType" id="nrcType" class="form-control select2" required>
                                                <option value="">--Select--</option>
                                                <option value="(N)">
                                                    (N)
                                                </option>
                                                <option value="(A)">
                                                    (A)
                                                </option>
                                                <option value="(P)">
                                                    (P)
                                                </option>
                                                <option value="(Y)">
                                                    (Y)
                                                </option>
                                                <option value="(S)">
                                                    (S)
                                                </option>
                                                <option value="(T)">
                                                    (T)
                                                </option>
                                            </select>

                                            <input type="text" class="form-control" name="nrcFieldCode"
                                                id="nrcFieldCode" oninput="setNrcField()" required>
                                        </div>
                                    </div>

                                    <div id="nrcEntry" class="py-2" hidden>
                                        <input id="nrcNo" class="form-control @error('nrc') is-invalid @enderror"
                                            type="text" name="nrc" value="{{ old('nrc') }}"
                                            placeholder="Enter NRC No" />
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    NRC Front Photo
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nrc_front') is-invalid @enderror" type="file"
                                        name="nrc_front" value="{{ old('nrc_front') }}" />
                                    @error('nrc_front')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    NRC Back Photo
                                </label>
                                <div class="col-md-9">
                                    <input class="form-control @error('nrc_back') is-invalid @enderror" type="file"
                                        name="nrc_back" value="{{ old('nrc_back') }}" />
                                    @error('nrc_back')
                                        <div class="invalid-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Father Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="father_name"
                                        placeholder="Father Name" value="{{ old('father_name') }}">
                                    @error('father_name')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Mother Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mother_name"
                                        placeholder="Mother Name" value="{{ old('mother_name') }}">
                                    @error('mother_name')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Qualification
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="qualification"
                                        placeholder="QUALIFICATION" value="{{ old('qualification') }}">
                                    @error('qualification')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Date of Birth
                                </label>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <select class="form-control selected 2" required id="year" name="year"
                                            onchange="change_year(this)">
                                        </select>
                                        <span class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b><b role="presentation"></b></span>
                                        <select class="form-control" id="month" name="month"
                                            onchange="change_month(this)">
                                        </select>
                                        <select class="form-control" id="day" name="day"
                                            onchange="change_day(this)">
                                        </select>

                                        <input id="DateOfBirth" type="text" name="date_of_birth"
                                            value="{{ old('date_of_birth') }}" hidden>
                                    </div>
                                </div>
                            </div>


                            <div class="mb-3 row" hidden>
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Address in Myanmar
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address" placeholder="Address"
                                        value="{{ old('address') }}">
                                    @error('address')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Passport No
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="passport" placeholder="Passport"
                                        value="{{ old('passport') }}">
                                    @error('passport')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Passport Issue Date
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="date_picker form-control" name="passport_date"
                                        placeholder="Date of Passport" value="{{ old('passport_date') }}">
                                    @error('passport_date')
                                        <div class="form-control-feedback"> {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Passport Expiry Date
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="date_picker form-control" name="passport_expiry_date"
                                        placeholder="Passport Expiry Date" value="{{ old('passport_expiry_date') }}">
                                    @error('passport_expiry_date')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Place of Passport
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="place_of_passport"
                                        placeholder="Place of Passport" value="{{ old('place_of_passport') }}">
                                    @error('place_of_passport')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">Age</label>
                                <div class="col-md-9">
                                    <input class="form-control @error('age') is-invalid @enderror" type="text"
                                        name="age" value="{{ old('age') }}" placeholder="Age" />
                                    @error('age')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Weight
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="weight"
                                            value="{{ old('weight') }}">
                                        <span class="input-group-text" id="basic-addon2">
                                            (LB)
                                        </span>
                                    </div>
                                    @error('weight')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Height
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="height"
                                            value="{{ old('height') }}">
                                        <span class="input-group-text" id="basic-addon2">
                                            (CM)
                                        </span>
                                    </div>
                                    @error('height')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Tattoo (တတ်တူးရှိ/မရှိ)
                                </label>
                                <div class="col-md-9">
                                    <select name="tatto" class="form-control">
                                        <option value="No">
                                            No
                                        </option>
                                        <option value="Yes">
                                            Yes
                                        </option>
                                    </select>
                                    @error('tatto')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Smoking(ဆေးလိပ်သောက်/မသောက်)
                                </label>
                                <div class="col-md-9">
                                    <select name="smoking" class="form-control">
                                        <option value="No">
                                            No
                                        </option>
                                        <option value="Yes">
                                            Yes
                                        </option>
                                    </select>
                                    @error('smoking')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Alcohol(အရက်သောက်/မသောက်)
                                </label>
                                <div class="col-md-9">
                                    <select name="alcohol" class="form-control">
                                        <option value="No">
                                            No
                                        </option>
                                        <option value="Yes">
                                            Yes
                                        </option>
                                    </select>
                                    @error('alcohol')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Marital Status
                                    (အိမ်ထောင်ရေးအခြေအနေ)
                                </label>
                                <div class="col-md-9">
                                    <select name="marital_status" class="form-control">
                                        <option value="Single">
                                            Single
                                        </option>
                                        <option value="Married">
                                            Married
                                        </option>
                                        <option value="Divorced">
                                            Divorced
                                        </option>
                                        <option value="Widowed">
                                            Widowed
                                        </option>
                                    </select>
                                    @error('marital_status')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label text-end">
                                    သား
                                </label>
                                <div class="col-md-3">
                                    <select name="son" class="form-control">
                                        <option value="No">
                                            No
                                        </option>
                                        <option value="Yes">
                                            Yes
                                        </option>
                                    </select>
                                    @error('son')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <label for="html5-text-input" class="col-md-3 col-form-label text-end">
                                    အသက်
                                </label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="son_age"
                                        value="{{ old('son_age') }}">
                                    @error('son_age')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label text-end">
                                    သမီး
                                </label>
                                <div class="col-md-3">
                                    <select name="daughter" class="form-control">
                                        <option value="No">
                                            No
                                        </option>
                                        <option value="Yes">
                                            Yes
                                        </option>
                                    </select>
                                    @error('daughter')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <label for="html5-text-input" class="col-md-3 col-form-label text-end">
                                    အသက်
                                </label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="daughter_age"
                                        value="{{ old('daughter_age') }}">
                                    @error('daughter_age')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>




                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Nation / Religion
                                    (လူမျိုး/ဘာသာ)
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nation_religion"
                                        placeholder="Nation / Religion" value="{{ old('nation_religion') }}">
                                    @error('nation_religion')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    A prominent sign
                                    (ထင်ရှားသော အမှတ်အသား)
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="prominent_sign"
                                        value="{{ old('prominent_sign') }}">
                                    @error('prominent_sign')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Working Experience
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="working_experience"
                                        value="{{ old('working_experience') }}">
                                    @error('working_experience')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Address
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="address_line_one"
                                        value="{{ old('address_line_one') }}">
                                    @error('address_line_one')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Contact No (Own)
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            (+959)
                                        </span>
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
                                            value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Contact No (Family)
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            (+959)
                                        </span>
                                        <input type="text" class="form-control" name="phone_family"
                                            value="{{ old('phone_family') }}">
                                    </div>
                                    @error('phone_family')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    အမွေစားအမွေခံ အမည်
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name_of_heir"
                                        value="{{ old('name_of_heir') }}">
                                    @error('name_of_heir')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    တော်စပ်ပုံ
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="relative"
                                        value="{{ old('relative') }}">
                                    @error('relative')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    အမွေစားအမွေခံ၏ မှတ်ပုံတင်နံပါတ်
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nrc_of_heir"
                                        value="{{ old('nrc_of_heir') }}">
                                    @error('nrc_of_heir')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Passport ကုန်ကျစရိတ်
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="passport_cost"
                                        value="{{ old('passport_cost') }}">
                                    @error('passport_cost')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    ကားခ
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="car_charges"
                                        value="{{ old('car_charges') }}">
                                    @error('car_charges')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Passport လျောက်/အပ်
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="passport_register_status"
                                        value="{{ old('passport_register_status') }}">
                                    @error('passport_register_status')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row" hidden>
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Leader
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="leader"
                                        value="{{ old('leader') }}">
                                    @error('leader')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    စရံငွေ
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="deposit" value="0">
                                    @error('deposit')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    စရံငွေ ဘောက်ချာ
                                </label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="deposit_vouchers[]" multiple>
                                    @error('deposit_vouchers')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row" hidden>
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Region / State
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="region_state"
                                        placeholder="Region & State">
                                    @error('region_state')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>



                            <div class="mb-3 row" hidden>
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    သွားရောက်လိုသည့်နေ့ရက်
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="go_date">
                                    @error('go_date')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    သွားရောက်လိုသည်နိုင်ငံ
                                </label>
                                <div class="col-md-9">
                                    <select name="selected_country" id="" class="form-control">
                                        <option value="">--Country--</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->title ?? '' }}">
                                                {{ $country->title ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('selected_country')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Reason
                                    (သွားရောက်လိုသည့်အကြောင်းအရာ)
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="go_reason" placeholder="For Job"
                                        value="အလုပ်လုပ်ကိုင်ရန်">
                                    @error('go_reason')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <hr>
                            <p style="font-weight: bold;">
                                If you have a Labour Card No & Date, you can add it.
                                <br>
                                <small style="color: red;">
                                    Labour Card No & Date ရှိပါက ထည့်သွင်းနိုင်ပါသည်
                                </small>
                            </p>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Labour Card No
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="form-control @error('labour_card_no') form-control-danger @enderror"
                                        name="labour_card_no" value="{{ old('labour_card_no') }}"
                                        placeholder="Labour Card No">
                                    @error('labour_card_no')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Issue of Labour Date
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="date_picker form-control @error('issue_of_labour_date') form-control-danger @enderror"
                                        name="issue_of_labour_date" value="{{ old('issue_of_labour_date') }}"
                                        placeholder="Issue of Labour Date">
                                    @error('issue_of_labour_date')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <hr>
                            <p style="font-weight: bold;">
                                If you have an OWIC, you can add it.
                                <br>
                                <small style="color: red;">
                                    OWIC & Date ရှိပါက ထည့်သွင်းနိုင်ပါသည်
                                </small>
                            </p>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    OWIC
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="form-control @error('owic') form-control-danger @enderror" name="owic"
                                        value="{{ old('owic') }}" placeholder="OWIC">
                                    @error('owic')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    OWIC Date
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="date_picker form-control @error('owic_date') form-control-danger @enderror"
                                        name="owic_date" value="{{ old('owic_date') }}" placeholder="OWIC Date">
                                    @error('owic_date')
                                        <div class="form-control-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <hr>


                            <hr>
                            <p style="font-weight: bold;">
                                If you have a Identification Card, you can add it.
                                <br>
                                <small style="color: red;">
                                    Identification Card & Date ရှိပါက ထည့်သွင်းနိုင်ပါသည်
                                </small>
                            </p>
                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Identification Card
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="form-control @error('identification_card') form-control-danger @enderror"
                                        name="identification_card" value="{{ old('identification_card') }}">
                                    @error('identification_card')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Issue Date of ID Card
                                </label>
                                <div class="col-md-9">
                                    <input type="text"
                                        class="date_picker form-control @error('issue_date_of_id_card') form-control-danger @enderror"
                                        name="issue_date_of_id_card" value="{{ old('issue_date_of_id_card') }}">
                                    @error('issue_date_of_id_card')
                                        <div class="form-control-feedback"> {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <hr>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Submit Date
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control date_picker" name="entry_date"
                                        value="{{ date('Y-m-d') }}">
                                    @error('entry_date')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Agents
                                </label>
                                <div class="col-md-9">
                                    <select class="form-control form-select select2" name="agent_list_id">
                                        <option value="">--Select Agent--</option>
                                        @foreach ($agent_lists as $agent_list)
                                            <option value="{{ $agent_list->id }}">
                                                {{ $agent_list->name ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('agent_list_id')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="html5-text-input" class="col-md-3 col-form-label">
                                    Remark
                                </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="remark" id="" cols="30" rows="5">{{ old('remark') }}</textarea>
                                    @error('remark')
                                        <div class="form-control-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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

                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                        <h5 class="card-header mb-4">
                            Add New Passport (Import Excel)
                        </h5>

                        <form action="{{ route('passport_import') }}" method="post" autocomplete="off"
                            enctype="multipart/form-data" id="create-import-form">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-text" style="background-color: #4D84EC; color: white;">
                                    Import Excel File
                                </span>
                                <input type="file" class="form-control" name="file">
                            </div>
                            <br>
                            <a href="{{ asset('data/passport_import.xlsx') }}" class="btn btn-success">
                                Download Simple Import File
                            </a>
                            <input type="submit" class="create-new btn btn-primary" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StorePassport', '#create-form') !!}
    {!! JsValidator::formRequest('App\Http\Requests\PassportImportFile', '#create-import-form') !!}

    <script>
        var nrcFieldCodeNo = '';
        $('select[id="nrcCode"]').on("change", function() {
            var nrc_code = $(this).val();
            nrcFieldCodeNo = nrc_code;
            setNrcField();
            if (nrc_code) {
                $.ajax({
                    url: `/get_nrc_by_code/${nrc_code}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // $('select[name="nrcName"]').empty();
                        $('select[name="nrcName"]').append(
                            "<option>--Select--</option>"
                        );
                        $.each(data, function(key, value) {
                            $('select[name="nrcName"]').append(
                                '<option value="' + value.name_en + '">' +
                                value.name_en +
                                "</option>"
                            );
                        });
                    },
                });
            }
        });

        var nrcFieldName = '';
        $('select[name="nrcName"]').on("change", function() {
            nrcFieldName = $(this).val();
            setNrcField();
        });

        var nrcFieldType = '';
        $('select[name="nrcType"]').on("change", function() {
            nrcFieldType = $(this).val();
            setNrcField();
        });


        // NRC INput 
        function setNrcField() {
            var nrcFieldCode = document.getElementById("nrcFieldCode").value;
            var nrc = nrcFieldCodeNo + '/' + nrcFieldName + nrcFieldType + nrcFieldCode;
            document.getElementById("nrcNo").value = nrc;
        }







        var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]
        $(document).ready(function() {
            var option = '<option value="day">day</option>';
            var selectedDay = "day";
            for (var i = 1; i <= Days[0]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#day').append(option);
            $('#day').val(selectedDay);

            var option = '<option value="month">month</option>';
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#month').append(option);
            $('#month').val(selectedMon);

            var option = '<option value="month">month</option>';
            var selectedMon = "month";
            for (var i = 1; i <= 12; i++) {
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#month2').append(option);
            $('#month2').val(selectedMon);

            var d = new Date();
            var option = '<option value="year">year</option>';
            selectedYear = "year";
            for (var i = 1930; i <= d.getFullYear(); i++) { // years start i
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $('#year').append(option);
            $('#year').val(selectedYear);
        });

        function isLeapYear(year) {
            year = parseInt(year);
            if (year % 4 != 0) {
                return false;
            } else if (year % 400 == 0) {
                return true;
            } else if (year % 100 == 0) {
                return false;
            } else {
                return true;
            }
        }

        function change_year(select) {
            if (isLeapYear($(select).val())) {
                Days[1] = 29;

            } else {
                Days[1] = 28;
            }
            if ($("#month").val() == 2) {
                var day = $('#day');
                var val = $(day).val();
                $(day).empty();
                var option = '<option value="day">day</option>';
                for (var i = 1; i <= Days[1]; i++) { //add option days
                    option += '<option value="' + i + '">' + i + '</option>';
                }
                $(day).append(option);
                if (val > Days[month]) {
                    val = 1;
                }
                $(day).val(val);
            }
        }

        function change_month(select) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="day">day</option>';
            var month = parseInt($(select).val()) - 1;
            for (var i = 1; i <= Days[month]; i++) { //add option days
                option += '<option value="' + i + '">' + i + '</option>';
            }
            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);

        }
    </script>
@endsection
