@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Sub Account (Bank Account)
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Sub Account (Bank Account)
            </li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('subaccount.update', $edit->id) }}" method="POST" autocomplete="off"
                                id="edit-form" role="form">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Main Account Code
                                    </label>
                                    <div class="col-md-9">
                                        <select id="MainAccount" class="select2 form-select form-select-lg"
                                            data-allow-clear="true" name="main_account_code">
                                            <option value="">--Please Select Main Account Code--</option>
                                            @foreach ($chartof_accounts as $chartof_account)
                                                <option value="{{ $chartof_account->id }}"
                                                    @if ($chartof_account->id == $edit->chartof_account_id) selected @endif>
                                                    {{ $chartof_account->coa_number }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('main_account_code')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Main Account Name
                                    </label>
                                    <div class="col-md-9">
                                        <input id="mainAccountName"
                                            class="form-control @error('main_account_name') is-invalid @enderror"
                                            type="text" readonly value="{{ $edit->chartof_account_table->description ?? '' }}" />
                                        @error('main_account_name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Sub Account Number
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text"
                                            class="form-control @error('sub_account_number') is-invalid @enderror"
                                            value="{{ $edit->coa_number }}" name="sub_account_number" />
                                        @error('sub_account_number')
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
                                            type="text" name="description" value="{{ $edit->description }}" />
                                        @error('description')
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

                                <input id="accountTypeId" type="text" readonly name="account_type" hidden />
                                <input id="accountClassificationId" type="text" readonly name="account_classification_id"
                                    hidden />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateSubAccount', '#edit-form') !!}

    <script type="text/javascript">
        var mainAccountName = document.getElementById("mainAccountName");
        var accountTypeId = document.getElementById("accountTypeId");
        var accountClassificationId = document.getElementById("accountClassificationId");

        $(document).ready(function() {
            $('select[name="main_account_code"]').on('change', function() {
                var mainAccountCode = $(this).val();
                if (mainAccountCode) {
                    $.ajax({
                        url: '/chartofaccountdependent/ajax/' + mainAccountCode,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            mainAccountName.value = data.description;
                            accountTypeId.value = data.account_type_id;
                            accountClassificationId.value = data.account_classification_id;
                        }
                    });
                }
            });

            autoCallAjax();
        });


        function autoCallAjax() {
            var mainAccountCode = {{ $edit->id }};
            $.ajax({
                url: '/chartofaccountdependent/ajax/' + mainAccountCode,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    // mainAccountName.value = data.description;
                    accountTypeId.value = data.account_type_id;
                    accountClassificationId.value = data.account_classification_id;
                }
            });
        }
    </script>
@endsection
