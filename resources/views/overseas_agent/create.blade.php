@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">
                    Add New Agent
                </h5>
                <div class="card-body">

                    <form action="{{ route('overseas_agent.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Company Name
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('company_name') form-control-danger @enderror"
                                    name="company_name" value="{{ old('company_name') }}">
                                @error('company_name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contact Person
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('contact') form-control-danger @enderror"
                                    name="contact" value="{{ old('contact') }}">
                                @error('contact')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Type of Company
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('type_of_company') form-control-danger @enderror"
                                    name="type_of_company" value="{{ old('type_of_company') }}">
                                @error('type_of_company')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-9">
                                <input class="form-control @error('company_phone') is-invalid @enderror" type="text"
                                    name="company_phone" value="{{ old('company_phone') }}" />
                                @error('company_phone')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control @error('company_email') is-invalid @enderror" type="email"
                                    name="company_email" value="{{ old('company_email') }}" />
                                @error('company_email')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Address</label>
                            <div class="col-md-9">
                                <input class="form-control @error('company_address') is-invalid @enderror" type="text"
                                    name="company_address" value="{{ old('company_address') }}" />
                                @error('company_address')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Country
                            </label>
                            <div class="col-md-9">
                                <select class="form-control form-select" name="countrie_id">
                                    <option value="">--Select Country--</option>
                                    @foreach ($countryies as $country)
                                        <option value="{{ $country->id }}">
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


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">Remark</label>
                            <div class="col-md-9">
                                <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" id="" cols="20"
                                    rows="5">{{ old('remark') }}</textarea>
                                @error('remark')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreOverseaAgency', '#create-form') !!}
@endsection
