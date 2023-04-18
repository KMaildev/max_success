@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h5 class="card-header">
                    Add Labour Payment
                </h5>
                <div class="card-body">

                    <form action="{{ route('labour_payment.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                RECEIVED DATE
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control date_picker" name="deposit_date"
                                    value="{{ old('deposit_date') }}">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Passport
                            </label>
                            <div class="col-md-9">
                                <select class="form-control form-select select2" name="passport_id" id="PassportId">
                                    <option value="">
                                        --Select Labour--
                                    </option>
                                    @foreach ($passports as $passport)
                                        <option value="{{ $passport->id }}">
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


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Name
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="Name" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                NRC
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="NRC" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Address
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="Address" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                RECEIVED Amount
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="deposit_amount">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                payment_reason
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="payment_reason"
                                    value="{{ old('payment_reason') }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="remark" value="{{ old('remark') }}">
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
