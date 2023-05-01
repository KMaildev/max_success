<form action="{{ route('interview.update', $interview->id) }}" method="POST" autocomplete="off" id="edit-form"
    role="form" enctype="multipart/form-data">
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
            <select class="form-control form-select select2" name="demand_id" id="EditDemandId">
                <option value="0">
                    --Select Oversea Company Name--
                </option>
                @foreach ($demands as $demand)
                    <option value="{{ $demand->id }}" @if ($demand->id == $interview->demand_id) selected @endif>
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
        2. Interview Information
    </h6>
    <hr>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Interview Title
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('interview_title') form-control-danger @enderror"
                name="interview_title" value="{{ $interview->interview_title ?? '' }}">
            @error('interview_title')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Interview Date
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control dob @error('interview_date') form-control-danger @enderror"
                name="interview_date" value="{{ $interview->interview_date ?? '' }}">
            @error('interview_date')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Interview Male
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('interview_male') form-control-danger @enderror"
                name="interview_male" oninput="EditMaleFemaleTotalCalc()" id="EditInterviewMale"
                value="{{ $interview->interview_male ?? 0 }}">
            @error('interview_male')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Interview Male
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('interview_female') form-control-danger @enderror"
                name="interview_female" oninput="EditMaleFemaleTotalCalc()" id="EditInterviewFemale"
                value="{{ $interview->interview_female ?? 0 }}">
            @error('interview_female')
                <div class="form-control-feedback" style="color: red;">
                    {{ $message }} </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Interview Total
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control" id="EditInterviewTotal" readonly>
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Remark
        </label>
        <div class="col-md-9">
            <input type="text" class="form-control @error('remark') form-control-danger @enderror" name="remark"
                value="{{ $interview->remark ?? '' }}">
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

{!! JsValidator::formRequest('App\Http\Requests\UpdateInterview', '#create-form') !!}
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

    function EditDemandAjaxAutoCall() {
        var demand_id = '{{ $interview->demand_id }}';
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
    EditDemandAjaxAutoCall();

    function EditMaleFemaleTotalCalc() {
        var male = document.getElementById("EditInterviewMale").value;
        var female = document.getElementById("EditInterviewFemale").value;
        var total = parseInt(female) + parseInt(male);
        document.getElementById('EditInterviewTotal').value = total;
    }
    EditMaleFemaleTotalCalc();
</script>
