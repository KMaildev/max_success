@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Account Classification
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Account Classification
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('accountclassification.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Account Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('account_name') is-invalid @enderror"
                                            type="text" name="account_name" value="{{ old('account_name') }}" />
                                        @error('account_name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-search-input" class="col-md-3 control-label">Account Code</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('account_code') is-invalid @enderror"
                                            type="text" name="account_code" value="{{ old('account_code') }}" />
                                        @error('account_code')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-2">
                                        <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                                            name="create-product-submit">
                                            <span class="fa fa-fw fa-save"></span>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreAccountClassification', '#create-form') !!}
@endsection
