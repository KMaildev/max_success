@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Add Labour Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Add Labour Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="box box-success">
                <div class="box-body">
                    <form action="{{ route('labour_payment.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            Passport
                                        </label>
                                        <div class="col-md-9">
                                            <select class="form-control form-select select2" name="passport_id"
                                                id="PassportId">
                                                <option value="">
                                                    --Select Labour--
                                                </option>
                                                @foreach ($passports as $passport)
                                                    <option value="{{ $passport->id }}">
                                                        {{ $passport->name ?? '' }}
                                                        @
                                                        {{ $passport->passport ?? '' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('passport_id')
                                                <div class="form-control-feedback" style="color: red;">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            Name
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="Name" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            NRC
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="NRC" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            Address
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="Address" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            Country
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="Country" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <label for="html5-text-input" class="col-md-3 control-labe">
                                            MMK Amount
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="TotalMMKAmount" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Received Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control date_picker" name="deposit_date"
                                            value="{{ old('deposit_date') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Received Amount
                                    </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="received_amount"
                                                value="{{ old('received_amount') }}" oninput="calcExchangeRage()"
                                                id="received_amount">

                                            <span class="input-group-addon" id="basic-addon2"
                                                style="padding: 0px 0px !important; border: 0px solid #ccc;">
                                                <select name="currencyFormat" class="form-control" style="width: 100px;">
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Exchange Rate
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="exchange_rate"
                                            value="{{ old('exchange_rate') }}" oninput="calcExchangeRage()"
                                            id="exchange_rate">
                                        @error('exchange_rate')
                                            <div class="form-control-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <label for="html5-text-input" class="col-md-3 control-label"
                                        style="text-align: right;">
                                        Total Amount
                                    </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" name="deposit_amount"
                                            value="{{ old('deposit_amount') }}" id="deposit_amount">
                                        @error('deposit_amount')
                                            <div class="form-control-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Voucher & Files
                                    </label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="deposit_vouchers[]" multiple>
                                        @error('deposit_vouchers')
                                            <div class="form-control-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Payment Reason
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="payment_reason"
                                            value="{{ old('payment_reason') }}" list="payment_reason_lists">
                                        <datalist id="payment_reason_lists">
                                            <option value="Payment for passport">
                                            <option value="First Payment">
                                            <option value="Second Payment">
                                            <option value="Third Payment">
                                        </datalist>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Remark
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="remark"
                                            value="{{ old('remark') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Received Person
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control form-select select2" name="user_id">
                                            <option value="">
                                                --Received Person--
                                            </option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
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
                            </div>


                        </div>
                    </form>

                    <div class="col-md-12 py-5">
                        <br>
                        <h4>Payment History</h4>
                        <div class="paymentHistory"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreLabourPayment', '#create-form') !!}
    <script src="{{ asset('data/app/countries.js') }}"></script>

    <script>
        $('select[id="PassportId"]').on("change", function() {
            var passport_id = $(this).val();
            if (passport_id) {
                ajaxCallPassport(passport_id);
            }
        });

        function ajaxCallPassport(passport_id) {
            $.ajax({
                url: `/find_passport_ajax/${passport_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("Name").value = data.name;
                    document.getElementById("NRC").value = data.nrc;
                    document.getElementById("Address").value = data.address;
                    document.getElementById("Country").value = data.selected_country;
                    document.getElementById("TotalMMKAmount").value = parseFloat(data
                        .total_amount_mmk).toLocaleString('en-US');
                },
            });

            $.ajax({
                url: `/payment_history/${passport_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('.paymentHistory').html(data.html);
                },
            });
        }

        ajaxCallPassport({{ Session::has('passport_id') ? Session::get('passport_id') : '' }})


        for (var i = 0; i < currencies.length; i++) {
            $('select[name="currencyFormat"]').append(
                '<option value="' + currencies[i].currency + '">' +
                currencies[i].currency +
                "</option>"
            );
        }


        function calcExchangeRage() {
            const received_amount = document.getElementById("received_amount").value;
            const exchange_rate = document.getElementById("exchange_rate").value;
            if (exchange_rate === null || exchange_rate === '' || exchange_rate === 0) {
                document.getElementById("deposit_amount").value = received_amount;
            } else {
                const total_amount = received_amount * exchange_rate;
                document.getElementById("deposit_amount").value = total_amount;
            }
        }
    </script>
@endsection
