@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">Country</h5>
                <div class="card-body">

                    <form autocomplete="off" action="{{ route('country.store') }}" method="POST" id="create-form">
                        @csrf

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Country
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('country_name') form-control-danger @enderror"
                                    name="country_name">
                                @error('country_name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCountry', '#create-form') !!}
@endsection
