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

                            <form action="{{ route('accounttype.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">Account Name</label>
                                    <div class="col-md-9">
                                        <select id="defaultSelect"
                                            class="form-select form-select select2 @error('account_type') is-invalid @enderror"
                                            name="account_type">
                                            <option value="">--Please Select Account Type--</option>
                                            @foreach ($account_classifications as $account_classification)
                                                <option value="{{ $account_classification->id }}">
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
                                        <div class="input-group">
                                            <span class="input-group-addon ac_number" id="ac_number"></span>

                                            <input type="hidden" id="ac_number_hidden" name="account_number">

                                            <input type="text"
                                                class="form-control @error('account_number') is-invalid @enderror"
                                                oninput="getValue();" id="account_number" />
                                        </div>

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
                                            type="text" name="description" value="{{ old('description') }}" />
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
                                            <option value="BalanceSheet">Balance Sheet</option>
                                            <option value="IncomeStatement">Income Statement</option>
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

{!! JsValidator::formRequest('App\Http\Requests\StoreAccountClassification', '#create-form') !!}

@section('script')
    <script type="text/javascript">
        var ac_number_hidden = document.getElementById("ac_number_hidden");
        var account_number = document.getElementById("account_number");

        $(document).ready(function() {
            $('select[name="account_type"]').on('change', function() {
                var classificationID = $(this).val();
                if (classificationID) {
                    $.ajax({
                        url: '/classificationdependent/ajax/' + classificationID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            let text = data.ac_code
                            let acnumber = text.charAt(0);
                            document.getElementById("ac_number").innerHTML = acnumber + '-';

                            account_number.value = '';
                            ac_number_hidden.value = '';
                        }
                    });
                }

            });
        });

        function getValue() {
            var ac_number = document.querySelector(".ac_number").innerHTML;
            var account_number = document.getElementById("account_number").value;
            var classify_acnumber = ac_number + account_number;
            ac_number_hidden.value = classify_acnumber;
        }
    </script>
@endsection
