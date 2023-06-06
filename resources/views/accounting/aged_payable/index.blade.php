@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Aged Payable
                        </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">
                                            Company Name
                                        </th>
                                        <th class="text-white w-5">
                                            Total Payable Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Total Paid Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Total Remaining Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $all_pay_amount = [];
                                        $all_remaining_amount = [];
                                    @endphp
                                    @foreach ($demand_invoices as $key => $demand_invoice)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $demand_invoice->overseas_agencies->company_name ?? '' }}
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $total_amount = $demand_invoice->total_amount ?? 0;
                                                    echo number_format($total_amount, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $total_pay_amount = $demand_invoice->cash_books->sum('expense');
                                                    echo number_format($total_pay_amount, 2);
                                                    $all_pay_amount[] = $total_pay_amount;
                                                @endphp
                                            </td>

                                            {{-- Remaining Amount --}}
                                            <td style="text-align: right">
                                                @php
                                                    $remaining_amount = $total_amount - $total_pay_amount;
                                                    echo number_format($remaining_amount, 2);
                                                    $all_remaining_amount[] = $remaining_amount;
                                                @endphp
                                            </td>
                                            
                                            <td class="text-center">
                                                <a href="">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr>
                                    <td colspan="2">
                                        Total
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_total_amount = $demand_invoices->sum('total_amount');
                                            echo number_format($all_total_amount, 2);
                                        @endphp
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_total_pay_amount = array_sum($all_pay_amount);
                                            echo number_format($all_total_pay_amount, 2);
                                        @endphp
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_remaining_amount = array_sum($all_remaining_amount);
                                            echo number_format($all_remaining_amount, 2);
                                        @endphp
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
@section('script')
@endsection
