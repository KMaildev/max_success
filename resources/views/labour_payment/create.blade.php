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
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-8">

                            <form action="{{ route('labour_payment.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Received Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control date_picker" name="deposit_date"
                                            value="{{ old('deposit_date') }}">
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Passport
                                    </label>
                                    <div class="col-md-9">
                                        <select class="form-control form-select select2" name="passport_id" id="PassportId">
                                            <option value="">
                                                --Select Labour--
                                            </option>
                                            @foreach ($passports as $passport)
                                                <option value="{{ $passport->id }}">
                                                    {{ $passport->passport ?? $passport->name }}
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


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Name
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Name" readonly>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        NRC
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="NRC" readonly>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Address
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Address" readonly>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Received Amount
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="deposit_amount">
                                    </div>
                                </div>


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

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Payment Reason
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="payment_reason"
                                            value="{{ old('payment_reason') }}" list="payment_reason_lists">

                                        <small style="font-weight: bold;">
                                            You can enter custom payment reasont.
                                        </small>

                                        <datalist id="payment_reason_lists">
                                            <option value="Payment for passport">
                                            <option value="First Payment">
                                            <option value="Second Payment">
                                            <option value="Third Payment">
                                        </datalist>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Remark
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="remark"
                                            value="{{ old('remark') }}">
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreLabourPayment', '#create-form') !!}
    <script>
        $('select[id="PassportId"]').on("change", function() {
            var passport_id = $(this).val();
            if (passport_id) {
                $.ajax({
                    url: `/find_passport_ajax/${passport_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById("Name").value = data.name;
                        document.getElementById("NRC").value = data.nrc;
                        document.getElementById("Address").value = data.address;
                    },
                });
            }
        });
    </script>
@endsection
