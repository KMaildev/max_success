<form class="form-horizontal" action="{{ route('passport.update', $passport->id) }}" method="POST" autocomplete="off"
    id="create-form" role="form" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Name
        </label>
        <div class="col-md-8">
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                value="{{ $passport->name ?? '' }}" placeholder="Name" />
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Labour Photo
        </label>
        <div class="col-md-8">
            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo"
                value="{{ $passport->photo ?? '' }}" />
            @error('photo')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Gender
        </label>
        <div class="col-md-8">
            <div class="custom-control custom-radio">
                <input type="radio" id="male" value="male" name="gender" class="form-check-input"
                    @if ($passport->gender == 'male') checked @endif>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="female" value="female" name="gender" class="form-check-input"
                    @if ($passport->gender == 'female') checked @endif>
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            NRC
        </label>

        <div class="col-md-2">
            <select name="nrcCode" id="nrcCode" class="form-control form-select select2" required
                style="width: 100%;">
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
        </div>

        <div class="col-md-2">
            <select name="nrcName" id="nrcName" class="form-control form-select select2" required
                style="width: 100%;">
            </select>
        </div>

        <div class="col-md-2">
            <select name="nrcType" id="nrcType" class="form-control form-select select2" required
                style="width: 100%;">
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
        </div>

        <div class="col-md-2">
            <input type="text" class="form-control" name="nrcFieldCode" id="nrcFieldCode" oninput="setNrcField()"
                required>
        </div>

        <input id="nrcNo" class="form-control @error('nrc') is-invalid @enderror" type="hidden" name="nrc"
            value="{{ $passport->nrc ?? '' }}" placeholder="Enter NRC No" />

    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            NRC Front Photo
        </label>
        <div class="col-md-8">
            <input class="form-control @error('nrc_front') is-invalid @enderror" type="file" name="nrc_front"
                value="{{ $passport->nrc_front ?? '' }}" />
            @error('nrc_front')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            NRC Back Photo
        </label>
        <div class="col-md-8">
            <input class="form-control @error('nrc_back') is-invalid @enderror" type="file" name="nrc_back"
                value="{{ $passport->nrc_back ?? '' }}" />
            @error('nrc_back')
                <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Father Name
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="father_name" placeholder="Father Name"
                value="{{ $passport->father_name ?? '' }}">
            @error('father_name')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Mother Name
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="mother_name" placeholder="Mother Name"
                value="{{ $passport->mother_name ?? '' }}">
            @error('mother_name')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Qualification
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="qualification" placeholder="QUALIFICATION"
                value="{{ $passport->qualification ?? '' }}">
            @error('qualification')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Date of Birth
        </label>

        <div class="col-md-8">
            <input type="text" class="form-control dob" name="date_of_birth"
                value="{{ $passport->date_of_birth ?? '' }}">

            @error('date_of_birth')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Address
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="address" placeholder="Address"
                value="{{ $passport->address ?? '' }}">
            @error('address')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Additional Address
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="address_line_one"
                value="{{ $passport->address_line_one ?? '' }}">
            @error('address_line_one')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Passport No
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="passport" placeholder="Passport"
                value="{{ $passport->passport ?? '' }}">
            @error('passport')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Passport Issue Date
        </label>
        <div class="col-md-8">
            <input type="text" class="date_picker form-control" name="passport_date"
                placeholder="Date of Passport" value="{{ $passport->passport_date ?? '' }}">
            @error('passport_date')
                <div class="form-control-feedback"> {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Passport Expiry Date
        </label>
        <div class="col-md-8">
            <input type="text" class="date_picker form-control" name="passport_expiry_date"
                placeholder="Passport Expiry Date" value="{{ $passport->passport_expiry_date ?? '' }}">
            @error('passport_expiry_date')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Place of Passport
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="place_of_passport" placeholder="Place of Passport"
                value="{{ $passport->passport_expiry_date ?? '' }}">
            @error('place_of_passport')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>



    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Age
        </label>
        <div class="col-md-8">
            <input class="form-control @error('age') is-invalid @enderror" type="text" name="age"
                value="{{ $passport->age ?? '' }}" placeholder="Age" />
            @error('age')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Weight
        </label>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" class="form-control" name="weight" value="{{ $passport->weight ?? '' }}">
                <span class="input-group-addon" id="basic-addon2">
                    (LB)
                </span>
            </div>
            @error('weight')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <label for="html5-text-input" class="col-md-2 control-label" style="text-align: right;">
            Height
        </label>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" class="form-control" name="height" value="{{ $passport->height ?? '' }}">
                <span class="input-group-addon" id="basic-addon2">
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Tattoo (တတ်တူးရှိ/မရှိ)
        </label>
        <div class="col-md-8">
            <select name="tatto" class="form-control">
                <option value="No" @if ($passport->tatto == 'No') checked @endif>
                    No
                </option>
                <option value="Yes" @if ($passport->tatto == 'Yes') checked @endif>
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Smoking(ဆေးလိပ်သောက်/မသောက်)
        </label>
        <div class="col-md-8">
            <select name="smoking" class="form-control">
                <option value="No" @if ($passport->smoking == 'No') checked @endif>
                    No
                </option>
                <option value="Yes" @if ($passport->smoking == 'Yes') checked @endif>
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Alcohol(အရက်သောက်/မသောက်)
        </label>
        <div class="col-md-8">
            <select name="alcohol" class="form-control">
                <option value="No" @if ($passport->alcohol == 'No') checked @endif>
                    No
                </option>
                <option value="Yes" @if ($passport->alcohol == 'Yes') checked @endif>
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Marital Status
            (အိမ်ထောင်ရေးအခြေအနေ)
        </label>
        <div class="col-md-8">
            <select name="marital_status" class="form-control">
                <option value="Single" @if ($passport->marital_status == 'Single') checked @endif>
                    Single
                </option>
                <option value="Married" @if ($passport->marital_status == 'Married') checked @endif>
                    Married
                </option>
                <option value="Divorced" @if ($passport->marital_status == 'Divorced') checked @endif>
                    Divorced
                </option>
                <option value="Widowed" @if ($passport->marital_status == 'Widowed') checked @endif>
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



    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label text-end">
            သား
        </label>
        <div class="col-md-3">
            <select name="son" class="form-control">
                <option value="No" @if ($passport->son == 'No') checked @endif>
                    No
                </option>
                <option value="Yes" @if ($passport->son == 'Yes') checked @endif>
                    Yes
                </option>
            </select>
            @error('son')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label text-end">
            သမီး
        </label>
        <div class="col-md-3">
            <select name="daughter" class="form-control">
                <option value="No" @if ($passport->daughter == 'No') checked @endif>
                    No
                </option>
                <option value="Yes" @if ($passport->daughter == 'Yes') checked @endif>
                    Yes
                </option>
            </select>
            @error('daughter')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>



    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Nation / Religion
            (လူမျိုး/ဘာသာ)
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="nation_religion" placeholder="Nation / Religion"
                value="{{ $passport->nation_religion ?? '' }}">
            @error('nation_religion')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            A prominent sign
            (ထင်ရှားသော အမှတ်အသား)
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="prominent_sign"
                value="{{ $passport->prominent_sign ?? '' }}">
            @error('prominent_sign')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Working Experience
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="working_experience"
                value="{{ $passport->working_experience ?? '' }}">
            @error('working_experience')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>



    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contact No (Own)
        </label>
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                    (+959)
                </span>
                <input type="text" class="form-control" name="phone" value="{{ $passport->phone ?? '' }}">
            </div>
            @error('phone')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contact No (Family)
        </label>
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                    (+959)
                </span>
                <input type="text" class="form-control" name="phone_family"
                    value="{{ $passport->phone_family ?? '' }}">
            </div>
            @error('phone_family')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            အမွေစားအမွေခံ အမည်
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="name_of_heir"
                value="{{ $passport->name_of_heir ?? '' }}">
            @error('name_of_heir')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            တော်စပ်ပုံ
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="relative" value="{{ $passport->relative ?? '' }}">
            @error('relative')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            အမွေစားအမွေခံ၏ မှတ်ပုံတင်နံပါတ်
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="nrc_of_heir"
                value="{{ $passport->nrc_of_heir ?? '' }}">
            @error('nrc_of_heir')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Passport လျောက်/အပ်
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="passport_register_status"
                value="{{ $passport->passport_register_status ?? '' }}">
            @error('passport_register_status')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            သွားရောက်လိုသည့်နေ့ရက်
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="go_date" placeholder="Date (သို့) အမြန်သွားလိုသည်"
                value="{{ $passport->go_date ?? '' }}">
            @error('go_date')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            သွားရောက်လိုသည်နိုင်ငံ
        </label>
        <div class="col-md-8">
            <select name="selected_country" id="" class="form-control">
                <option value="">--Country--</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id ?? '' }}" @if ($country->id == $passport->selected_country) selected @endif>
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Reason
            (သွားရောက်လိုသည့်အကြောင်းအရာ)
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="go_reason" placeholder="For Job"
                value="{{ $passport->go_reason ?? '' }}">
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

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Labour Card No
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('labour_card_no') form-control-danger @enderror"
                name="labour_card_no" value="{{ $passport->labour_card_no ?? '' }}" placeholder="Labour Card No">
            @error('labour_card_no')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Issue of Labour Date
        </label>
        <div class="col-md-8">
            <input type="text"
                class="date_picker form-control @error('issue_of_labour_date') form-control-danger @enderror"
                name="issue_of_labour_date" value="{{ $passport->issue_of_labour_date ?? '' }}"
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
    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            OWIC
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('owic') form-control-danger @enderror" name="owic"
                value="{{ $passport->owic ?? '' }}" placeholder="OWIC">
            @error('owic')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            OWIC Date
        </label>
        <div class="col-md-8">
            <input type="text" class="date_picker form-control @error('owic_date') form-control-danger @enderror"
                name="owic_date" value="{{ $passport->owic_date ?? '' }}" placeholder="OWIC Date">
            @error('owic_date')
                <div class="form-control-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <hr>
    <p style="font-weight: bold;">
        If you have a Identification Card, you can add it.
        <br>
        <small style="color: red;">
            Identification Card & Date ရှိပါက ထည့်သွင်းနိုင်ပါသည်
        </small>
    </p>
    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Identification Card
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control @error('identification_card') form-control-danger @enderror"
                name="identification_card" value="{{ $passport->identification_card ?? '' }}">
            @error('identification_card')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Issue Date of ID Card
        </label>
        <div class="col-md-8">
            <input type="text"
                class="date_picker form-control @error('issue_date_of_id_card') form-control-danger @enderror"
                name="issue_date_of_id_card" value="{{ $passport->issue_date_of_id_card ?? '' }}">
            @error('issue_date_of_id_card')
                <div class="form-control-feedback"> {{ $message }} </div>
            @enderror
        </div>
    </div>

    <hr>
    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Submit Date
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control date_picker" name="entry_date"
                value="{{ $passport->entry_date ?? '' }}">
            @error('entry_date')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Agents
        </label>
        <div class="col-md-8">
            <select class="form-control form-select select2" name="agent_list_id" style="width: 100%">
                <option value="">--Select Agent--</option>
                @foreach ($agent_lists as $agent_list)
                    <option value="{{ $agent_list->id }}" @if ($agent_list->id == $passport->agent_list_id) selected @endif>
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


    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Remark
        </label>
        <div class="col-md-8">
            <textarea class="form-control" name="remark" id="" cols="30" rows="5">{{ $passport->remark ?? '' }}</textarea>
            @error('remark')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label"></label>
        <div class="col-sm-2">
            <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                name="create-product-submit">
                <span class="fa fa-fw fa-save"></span>
                Save
            </button>
        </div>
    </div>
</form>

{!! JsValidator::formRequest('App\Http\Requests\UpdatePassport', '#create-form') !!}
<script>
    $('select[id="regionId"]').on("change", function() {
        var region_id = $(this).val();
        if (region_id) {
            $.ajax({
                url: `/get_by_region_id/${region_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="township_id"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="township_id"]').append(
                            '<option value="' + value.id + '">' +
                            value.township +
                            "</option>"
                        );
                    });
                },
            });
        }
    });

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
</script>
