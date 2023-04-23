<div id="editModal_{{ $country->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header ng-scope ui-draggable-handle">
                <button ng-click="closeSupplierEditModal();" type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h3 class="modal-title ng-binding" id="modal-title">
                    <span class="fa fa-fw fa-pencil"></span>
                    Edit Country
                </h3>
            </div>
            <div class="modal-body ng-scope" id="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div bind-html-compile="rawHtml">
                            <h4 class="sub-title ng-scope">
                                Update
                            </h4>
                            <form autocomplete="off" action="{{ route('country.update', $country->id) }}" method="POST"
                                id="create-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Country
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('country_name') form-control-danger @enderror"
                                            name="country_name" value="{{ $country->title }}">
                                        @error('country_name')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 15px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Photo
                                        <i class="required">*</i>
                                    </label>
                                    <div class="col-md-9">
                                        <input type="file"
                                            class="form-control @error('image') form-control-danger @enderror"
                                            name="image">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateCountry', '#create-form') !!}
@endsection
