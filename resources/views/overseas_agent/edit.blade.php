<div id="editModal_{{ $overseas_agency->id }}" class="modal fade" role="dialog">
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
                            <form action="{{ route('overseas_agent.update', $overseas_agency->id) }}" method="POST"
                                autocomplete="off" id="edit-form" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <p style="font-weight: bold;">
                                    Overseas Company Information
                                </p>
                                <hr>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Company Name
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('company_name') form-control-danger @enderror"
                                            name="company_name" value="{{ $overseas_agency->company_name }}">
                                        @error('company_name')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Contact
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('contact') form-control-danger @enderror"
                                            name="contact" value="{{ $overseas_agency->contact }}">
                                        @error('contact')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Type of Company
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('type_of_company') form-control-danger @enderror"
                                            name="type_of_company" value="{{ $overseas_agency->type_of_company }}">
                                        @error('type_of_company')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('company_phone') is-invalid @enderror"
                                            type="text" name="company_phone"
                                            value="{{ $overseas_agency->company_phone }}" />
                                        @error('company_phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('company_email') is-invalid @enderror"
                                            type="email" name="company_email"
                                            value="{{ $overseas_agency->company_email }}" />
                                        @error('company_email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('company_address') is-invalid @enderror"
                                            type="text" name="company_address"
                                            value="{{ $overseas_agency->company_address }} " />
                                        @error('company_address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
                                <p style="font-weight: bold;">
                                    Overseas Agent Information
                                </p>
                                <hr>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Company Name
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('agent_company_name') form-control-danger @enderror"
                                            name="agent_company_name"
                                            value="{{ $overseas_agency->agent_company_name }}">
                                        @error('agent_company_name')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Contact Person
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('agent_contact_person') form-control-danger @enderror"
                                            name="agent_contact_person"
                                            value="{{ $overseas_agency->agent_contact_person }}">
                                        @error('agent_contact_person')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Agent Phone
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('agent_phone') form-control-danger @enderror"
                                            name="agent_phone" value="{{ $overseas_agency->agent_phone }}">
                                        @error('agent_phone')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Agent Email
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('agent_email') form-control-danger @enderror"
                                            name="agent_email" value="{{ $overseas_agency->agent_email }}">
                                        @error('agent_email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Agent Address
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('agent_address') form-control-danger @enderror"
                                            name="agent_address" value="{{ $overseas_agency->agent_address }}">
                                        @error('agent_address')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <br>
                                <p style="font-weight: bold;">
                                    General
                                </p>
                                <hr>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Country
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control form-select" name="countrie_id">
                                            <option value="">--Select Country--</option>
                                            @foreach ($country_lists as $country)
                                                <option value="{{ $country->id }}"
                                                    @if ($country->id == $overseas_agency->countrie_id) selected @endif>
                                                    {{ $country->title ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('countrie_id')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Remark</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" id="" cols="20"
                                            rows="2">{{ $overseas_agency->remark ?? '' }}</textarea>
                                        @error('remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <br>
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
    </div>
</div>
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateOverseaAgency', '#create-form') !!}
@endsection
