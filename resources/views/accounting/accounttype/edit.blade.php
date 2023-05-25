@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Account Type
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Account Type
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('accounttype.update', $account_types->id) }}" method="POST"
                                autocomplete="off" id="my-form" role="form">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Account Name</label>
                                    <div class="col-md-9">
                                        <select id="defaultSelect"
                                            class="form-select form-select select2 @error('account_type') is-invalid @enderror"
                                            name="account_type">
                                            <option value="">--Please Select Account Type--</option>
                                            @foreach ($account_classifications as $account_classification)
                                                <option value="{{ $account_classification->id }}"
                                                    @if ($account_types->account_classification_id == $account_classification->id) selected @endif>
                                                    {{ $account_classification->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('account_type')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Account Number
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('account_number') is-invalid @enderror"
                                            type="text" name="account_number" value="{{ $account_types->number }}" />

                                        @error('account_number')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Description
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('description') is-invalid @enderror"
                                            type="text" name="description" value="{{ $account_types->description }}" />
                                        @error('description')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Financial Statement
                                    </label>
                                    <div class="col-md-9">
                                        <select id="defaultSelect"
                                            class="form-select form-select select2 @error('financial_statement') is-invalid @enderror"
                                            name="financial_statement">
                                            <option value="">--Please Select Financial Statement--</option>
                                            <option value="BalanceSheet" @if ($account_types->financial_statement == 'BalanceSheet') selected @endif>
                                                Balance Sheet</option>
                                            <option value="IncomeStatement"
                                                @if ($account_types->financial_statement == 'IncomeStatement') selected @endif>Income Statement</option>
                                        </select>
                                        @error('financial_statement')
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
@endsection
