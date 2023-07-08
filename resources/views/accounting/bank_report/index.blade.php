@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Bank & Cash
                        </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr>
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">Bank</th>
                                        <th class="text-white w-5">Bank In</th>
                                        <th class="text-white w-5">Bank Out</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chartof_accounts as $key => $chartof_account)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->description }}
                                                /
                                                {{ $chartof_account->id }}
                                            </td>

                                            <td>
                                                {{ number_format($chartof_account->bank_cash_report->sum('income'), 2) }}
                                            </td>

                                            <td>
                                                {{ number_format($chartof_account->bank_cash_report->sum('expense'), 2) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
