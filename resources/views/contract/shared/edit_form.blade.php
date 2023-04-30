<form action="{{ route('contract.update', $contract->id) }}" method="POST" autocomplete="off" id="edit-form" role="form"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <br>
    <h6 style="font-size: 17px;">
        1. Demand Information
    </h6>
    <hr>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Oversea Company
        </label>
        <div class="col-md-9">
            <select class="form-control form-select select2" name="demand_id" id="EditDemandId" style="width: 100%">
                <option value="0">
                    --Select Oversea Company Name--
                </option>
                @foreach ($demands as $demand)
                    <option value="{{ $demand->id }}" @if ($demand->id == $contract->demand_id) selected @endif>
                        {{ $demand->overseas_agencies_table->company_name ?? '' }}
                        @if ($demand->demand_id)
                            / Demand Number:
                        @endif
                        {{ $demand->demand_id ?? '' }}
                    </option>
                @endforeach
            </select>
            @error('demand_id')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Demand Date
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditDemandDate" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Cabinet Date
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditCabinetDate" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Issue Date
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditIssueDate" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Issue Number
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditIssueNumber" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Male
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditMale" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Female
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditFemale" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Total
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditTotal" readonly>
        </div>
    </div>


    <br>
    <h6 style="font-size: 17px;">
        2. Contract Information
    </h6>
    <hr>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contract Date
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('contract_date') form-control-danger @enderror"
                name="contract_date" value="{{ $contract->contract_date ?? '' }}">
            @error('contract_date')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contract Male
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('contract_male') form-control-danger @enderror"
                name="contract_male" oninput="EditMaleFemaleTotalCalc()" id="EditContractMale"
                value="{{ $contract->contract_male ?? 0 }}">
            @error('contract_male')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contract Male
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('contract_female') form-control-danger @enderror"
                name="contract_female" oninput="EditMaleFemaleTotalCalc()" id="EditContractFemale"
                value="{{ $contract->contract_female ?? 0 }}">
            @error('contract_female')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Contract Total
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditContractTotal" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Remark
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('remark') form-control-danger @enderror" name="remark"
                value="{{ $contract->remark ?? '' }}">
            @error('remark')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>


    <div class="form-group" style="padding: 15px;">
        <label for="html5-search-input" class="col-md-3 control-label"></label>
        <div class="col-md-7">
            <button class="btn btn-info">
                <span class="fa fa-fw fa-pencil"></span>
                Update
            </button>
        </div>
    </div>
</form>
{!! JsValidator::formRequest('App\Http\Requests\UpdateContracts', '#create-form') !!}
<script>
    $('select[id="EditDemandId"]').on("change", function() {
        var demand_id = $(this).val();
        if (demand_id) {
            $.ajax({
                url: `/demand_ajax/${demand_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("EditMale").value = data.male;
                    document.getElementById("EditFemale").value = data.female;
                    document.getElementById("EditTotal").value = +data.male + +data.female;
                    document.getElementById("EditDemandDate").value = data.demand_date;
                    document.getElementById("EditCabinetDate").value = data.cabinet_date;
                    document.getElementById("EditIssueDate").value = data.issue_date;
                    document.getElementById("EditIssueNumber").value = data.issue_number;
                },
            });
        }
    });

    function demandAjaxAutoCall() {
        var demand_id = '{{ $contract->demand_id }}';
        if (demand_id) {
            $.ajax({
                url: `/demand_ajax/${demand_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("EditMale").value = data.male;
                    document.getElementById("EditFemale").value = data.female;
                    document.getElementById("EditTotal").value = +data.male + +data.female;
                    document.getElementById("EditDemandDate").value = data.demand_date;
                    document.getElementById("EditCabinetDate").value = data.cabinet_date;
                    document.getElementById("EditIssueDate").value = data.issue_date;
                    document.getElementById("EditIssueNumber").value = data.issue_number;
                },
            });
        }
    }
    demandAjaxAutoCall();

    function EditMaleFemaleTotalCalc() {
        var male = document.getElementById("EditContractMale").value;
        var female = document.getElementById("EditContractFemale").value;
        var total = parseInt(female) + parseInt(male);
        document.getElementById('EditContractTotal').value = total;
    }
    EditMaleFemaleTotalCalc();
</script>
