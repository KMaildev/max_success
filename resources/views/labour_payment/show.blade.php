@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Labour Payment History
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('labour_payment.create') }}">
                                    <span class="fa fa-add"></span>
                                    Add New Account
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            NRC
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Passport
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Received Date
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Received By
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Voucher & Files
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%">
                                            Total
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
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
                                    <td style="text-align: right;">
                                        {{ number_format($payments->sum('deposit'), 2) }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
