@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">Hospital</h5>
                <div class="card-body">

                    <form autocomplete="off" action="{{ route('hospital.update', $country->id) }}" method="POST"
                        id="create-form">
                        @csrf
                        @method('PUT')

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Hospital Name
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                    name="name" value="{{ $country->name ?? '' }}">
                                @error('name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Location
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('location') form-control-danger @enderror"
                                    name="location" value="{{ $country->location ?? '' }}">
                                @error('location')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Phone
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('phone') form-control-danger @enderror"
                                    name="phone" value="{{ $country->phone ?? '' }}">
                                @error('phone')
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateHospital', '#create-form') !!}
@endsection
