<div id="editModal_{{ $agent_list->id }}" class="modal fade" role="dialog">
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
                            <form action="{{ route('agent_list.update', $agent_list->id) }}" method="POST"
                                autocomplete="off" id="edit-form" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Agent Code
                                    </label>
                                    <div class="col-md-7">
                                        <input readonly class="form-control @error('agent_code') is-invalid @enderror"
                                            type="text" name="agent_code"
                                            value="{{ $agent_list->agent_code ?? '' }}" />
                                        @error('agent_code')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ $agent_list->name ?? '' }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        NRC
                                    </label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('nrc') is-invalid @enderror" type="text"
                                            name="nrc" value="{{ $agent_list->nrc ?? '' }}" />
                                        @error('nrc')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Photo
                                    </label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                            name="photo" />
                                        @error('photo')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        NRC Front Photo
                                    </label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('nrc_front') is-invalid @enderror"
                                            type="file" name="nrc_front" value="{{ old('nrc_front') }}" />
                                        @error('nrc_front')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        NRC Back Photo
                                    </label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('nrc_back') is-invalid @enderror"
                                            type="file" name="nrc_back" value="{{ old('nrc_back') }}" />
                                        @error('nrc_back')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Phone</label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            name="phone" value="{{ $agent_list->phone ?? '' }}" />
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-7">
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            type="email" name="email" value="{{ $agent_list->email ?? '' }}" />
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Regions
                                    </label>
                                    <div class="col-md-7">
                                        <select name="region_id" id="regionId"
                                            class="form-control form-select select2" style="width: 100%">
                                            <option value="">
                                                --Please Select Region--
                                            </option>
                                            @foreach ($regions as $region)
                                                <option value="{{ $region->id }}"
                                                    @if ($region->id == $agent_list->region_id) selected @endif>
                                                    {{ $region->region ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('region_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Township

                                    </label>
                                    <div class="col-md-7">
                                        <select class="select2 form-control form-select" name="township_id"
                                            style="width: 100%">
                                        </select>
                                        @error('township_id')
                                            <div class="form-control-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Address</label>
                                    <div class="col-md-7">
                                        <input name="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror"
                                            value="{{ $agent_list->address ?? '' }}">
                                        @error('address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Remark
                                    </label>
                                    <div class="col-md-7">
                                        <input name="remark" type="text"
                                            class="form-control @error('remark') is-invalid @enderror"
                                            value="{{ $agent_list->remark ?? '' }}">
                                        @error('remark')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Join Date
                                    </label>
                                    <div class="col-md-7">
                                        <input
                                            class="form-control @error('join_date') is-invalid @enderror date_picker"
                                            type="text" name="join_date"
                                            value="{{ $agent_list->join_date ?? '' }}" />
                                        @error('join_date')
                                            <div class="invalid-feedback">
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
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateAgentList', '#create-form') !!}
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

        function getByRegionIdCall(region_id) {
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
        }
    </script>
@endsection
