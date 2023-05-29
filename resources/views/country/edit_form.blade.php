<form autocomplete="off" action="{{ route('country.update', $country->id) }}" method="POST" id="create-form"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Country
            <i class="required">*</i>
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('country_name') form-control-danger @enderror"
                name="country_name" value="{{ $country->title }}">
            @error('country_name')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Currency Format
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('currency_format') form-control-danger @enderror"
                name="currency_format" list="currency_formats" value="{{ $country->currency_format }}">
            <small style="font-weight: bold;">
                You can enter custom currency format. it will be use in demand section.
            </small>
            <datalist id="currency_formats">
                <option value="Dollar">
                <option value="SGD">
                <option value="MMK">
                <option value="Yen">
                <option value="Thai Baht">
                <option value="Ringgit">
                <option value="Rupees">
                <option value="AED">
                <option value="Yuan">
                <option value="Other">
            </datalist>
            @error('currency_format')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <br>
    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            GOV Standard Cost
        </label>
        <div class="col-md-3">
            <input type="text" class="form-control" name="standard_cost" value="{{ $country->standard_cost }}"
                oninput="calcExchangeRageEdit()" id="standard_cost_edit">
            @error('standard_cost')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <label for="html5-text-input" class="col-md-1 control-label" style="text-align: right;">
            MMK
        </label>
        <div class="col-md-3">
            <input type="text" class="form-control" name="standard_cost_mmk"
                value="{{ $country->standard_cost_mmk }}" oninput="calcMMKEdit()" id="standard_cost_mmk_edit">
            @error('standard_cost_mmk')
                <div class="form-control-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <br>
    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Exchange Rate
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('exchange_rate') form-control-danger @enderror"
                name="exchange_rate" oninput="calcExchangeRageEdit()" id="exchange_rate_edit"
                value="{{ $country->exchange_rate }}">
            @error('exchange_rate')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <br>
    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            MMK
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('total_amount_mmk') form-control-danger @enderror"
                name="total_amount_mmk" id="total_amount_mmk_edit" readonly value="{{ $country->total_amount_mmk }}">
            @error('total_amount_mmk')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>


    <br>
    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Photo
            <i class="required">*</i>
        </label>
        <div class="col-md-9">
            <input type="file" class="form-control @error('image') form-control-danger @enderror" name="image">
            @error('image')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
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

<script>
    function calcExchangeRageEdit() {
        const standard_cost_edit = document.getElementById("standard_cost_edit").value;
        const exchange_rate_edit = document.getElementById("exchange_rate_edit").value;
        const total_amount_edit = standard_cost_edit * exchange_rate_edit;
        document.getElementById("total_amount_mmk_edit").value = total_amount_edit;
        document.getElementById("standard_cost_mmk_edit").value = 0;
    }

    function calcMMKEdit() {
        const standard_cost_mmk_edit = document.getElementById("standard_cost_mmk_edit").value;
        document.getElementById("total_amount_mmk_edit").value = standard_cost_mmk_edit;

        document.getElementById("standard_cost_edit").value = 0;
        document.getElementById("exchange_rate_edit").value = 0;
    }
</script>
