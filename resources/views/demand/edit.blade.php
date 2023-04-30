<div id="editModal_{{ $demand->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header ng-scope ui-draggable-handle">
                <button ng-click="closeSupplierEditModal();" type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title ng-binding" id="modal-title">
                    <span class="fa fa-fw fa-pencil"></span>
                    Edit Agent
                </h3>
            </div>
            <div class="modal-body ng-scope" id="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div bind-html-compile="rawHtml">
                            <h4 class="sub-title ng-scope">
                                Update
                            </h4>
                            <form action="{{ route('demand.update', $demand->id) }}" method="POST" autocomplete="off"
                                id="create-form" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" value="new_demand" name="demand_status">

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Company Name
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control form-select" name="office_id">
                                            @foreach ($offices as $office)
                                                <option value="{{ $office->id }}"
                                                    @if ($office->id == $demand->company_name) selected @endif>
                                                    {{ $office->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('office_id')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Country
                                    </label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control form-select" name="countrie_id"
                                            id="countryId" style="width: 100%">
                                            <option value="0">--Select Country--</option>
                                            @foreach ($countryies as $country)
                                                <option value="{{ $country->id }}"
                                                    @if ($country->id == $demand->countrie_id) selected @endif>
                                                    {{ $country->title ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('countrie_id')
                                            <div class="form-control-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Overseas Agent
                                    </label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control form-select" name="overseas_agencie_id"
                                            style="width: 100%">
                                            @foreach ($overseas_agencies as $overseas_agencie)
                                                <option value="{{ $overseas_agencie->id }}"
                                                    @if ($overseas_agencie->id == $demand->overseas_agencie_id) selected @endif>
                                                    {{ $overseas_agencie->company_name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Job
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('job') form-control-danger @enderror"
                                            name="job" value="{{ $demand->job ?? '' }}">
                                        @error('job')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Salary
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control @error('salary') form-control-danger @enderror"
                                                name="salary" value="{{ $demand->salary ?? '' }}">
                                            <span class="input-group-addon" id="EditCurrency">
                                                Currency
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Male
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('male') form-control-danger @enderror"
                                            name="male" oninput="editMaleFemaleTotalCalc()" id="editMale"
                                            value="{{ $demand->male ?? 0 }}" placeholder="Male Total">
                                        @error('male')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Female
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('female') form-control-danger @enderror"
                                            name="female" oninput="MaleFemaleTotalCalc()" id="editFemale"
                                            value="{{ $demand->female ?? 0 }}" placeholder="Female Total">
                                        @error('female')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Demand Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="date_picker form-control @error('demand_date') form-control-danger @enderror"
                                            name="demand_date" placeholder="Demand Date"
                                            value="{{ $demand->demand_date ?? '' }}">
                                        @error('demand_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Cabinet Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="date_picker form-control @error('cabinet_date') form-control-danger @enderror"
                                            name="cabinet_date" placeholder="Cabinet Date"
                                            value="{{ $demand->cabinet_date ?? '' }}">
                                        @error('cabinet_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Issue Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="date_picker form-control @error('issue_date') form-control-danger @enderror"
                                            name="issue_date" placeholder="Issue Date"
                                            value="{{ $demand->issue_date ?? '' }}">
                                        @error('issue_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Issue Number
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="date_picker form-control @error('issue_number') form-control-danger @enderror"
                                            name="issue_number" placeholder="Issue Number"
                                            value="{{ $demand->issue_number ?? '' }}">
                                        @error('issue_number')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Demand Number
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('demand_number') form-control-danger @enderror"
                                            name="demand_number" placeholder="Demand Number"
                                            value="{{ $demand->demand_number ?? '' }}">
                                        @error('demand_number')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

