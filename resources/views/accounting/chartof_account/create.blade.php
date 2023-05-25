@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Chart Of Account
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Chart Of Account
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('chartofaccount.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Account Type
                                    </label>
                                    <div class="col-md-9">
                                        <select id="defaultSelect"
                                            class="form-select form-select select2 @error('account_type') is-invalid @enderror"
                                            name="account_type">
                                            <option value="">--Please Select Account Type--</option>
                                            @foreach ($account_types as $account_type)
                                                <option value="{{ $account_type->id }}">
                                                    {{ $account_type->description }}
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
                                        Account Type Code
                                    </label>
                                    <div class="col-md-9">

                                        <input id="account_code"
                                            class="form-control @error('account_code') is-invalid @enderror" type="text"
                                            readonly />

                                        @error('account_code')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        COA Account Number
                                    </label>
                                    <div class="col-md-9">

                                        <input type="text"
                                            class="form-control @error('account_number') is-invalid @enderror" name="account_number" />

                                        @error('account_number')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('description') is-invalid @enderror"
                                            type="text" name="description" value="{{ old('description') }}" />
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
{!! JsValidator::formRequest('App\Http\Requests\StoreChartofAccount', '#create-form') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="account_type"]').on('change', function() {
                var account_type_id = $(this).val();
                if (account_type_id) {
                    $.ajax({
                        url: '/accounttypedependent/ajax/' + account_type_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            document.getElementById("account_code").value = data.number;
                        }
                    });
                }
            });
        });
    </script>
@endsection
