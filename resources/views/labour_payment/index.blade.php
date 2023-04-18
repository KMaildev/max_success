@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Labour Payment
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('labour_payment.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            Search by date
                                        </span>
                                        <input type="text" class="form-control form-control-sm" name="from_date"
                                            placeholder="1.1.2023" style="width: 100px;" />
                                        <input type="text" class="form-control form-control-sm" name="to_date"
                                            placeholder="31.1.2023" style="width: 100px;" />
                                        <input type="submit" class="dt-button create-new btn btn-primary btn-sm"
                                            value="Search">
                                    </div>
                                </form>
                            </div>


                            <div class="card-header-elements ms-2">
                                <form action="{{ route('labour_payment.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="NRC, PASSPORT, NAME, ETC.."
                                            name="search" />
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <a href="{{ route('labour_payment.create') }}" class="dt-button create-new btn btn-primary">
                                    <span>
                                        <i class="bx bx-plus me-sm-2"></i>
                                        <span class="d-none d-sm-inline-block">Create</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                    aria-labelledby="HeadersCol" tabindex="0">
                    <table class="table table-bordered main-table">
                        <thead class="tbbg">
                            <tr>
                                <th class="text-center text-white" style="width: 1%; background-color: #296166;">
                                    #
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Name
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    NRC
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Passport
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Gender
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Received Date
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Received By
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Voucher & Files
                                </th>

                                <th class="text-center text-white" style="background-color: #296166;">
                                    Total
                                </th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($payments as $key => $payment)
                                <tr>
                                    <td class="text-center">
                                        {{ $key + 1 }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->passport_table->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->passport_table->nrc ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->passport_table->passport ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->passport_table->gender ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->deposit_date ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $payment->user_table->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('labour_payment_files', $payment->id) }}">
                                            <i class="fa fa-file"></i>
                                            Manage Files
                                        </a>
                                    </td>

                                    <td style="text-align: right">
                                        {{ number_format($payment->deposit, 2) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="7">Total</td>
                            <td>
                            <td style="text-align: right;">
                                {{ number_format($payments->sum('deposit'), 2) }}
                            </td>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
