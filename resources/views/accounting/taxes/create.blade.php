@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Taxes
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Taxes > Create
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('taxes.store') }}" method="POST" autocomplete="off" id="create-form"
                                role="form">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Tax Name
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control @error('tax_name') is-invalid @enderror"
                                            name="tax_name" />

                                        @error('tax_name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Description
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('description') is-invalid @enderror"
                                            name="description" />

                                        @error('description')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Tax Type
                                    </label>
                                    <div class="col-md-9">
                                        <select name="tax_type" class="select2">
                                            <option value="sale">
                                                Sales / Income
                                            </option>
                                            <option value="purchase">
                                                Purchases / Expense
                                            </option>
                                        </select>
                                        @error('tax_type')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Tax Computation
                                    </label>
                                    <div class="col-md-9">
                                        <select name="tax_computation" id="TaxComputation" class="select2"
                                            onchange="changeTaxComputation()">
                                            <option value="fixed">
                                                Fixed
                                            </option>
                                            <option value="percent" selected>
                                                Percentage of Price
                                            </option>
                                        </select>
                                        @error('tax_computation')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Amount
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Amount" value="0"
                                                name="amount">
                                            <span class="input-group-addon percentage" id="basic-addon2">
                                                %
                                            </span>
                                        </div>

                                        @error('amount')
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreTexas', '#create-form') !!}
    <script>
        function changeTaxComputation() {
            var TaxComputation = document.getElementById("TaxComputation").value;
            if (TaxComputation === 'fixed') {
                $(".percentage").hide();
            } else {
                $(".percentage").show();
            }
        }
    </script>
@endsection
