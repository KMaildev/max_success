@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Tax Report
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle btn-lg" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <span class="fa fa-fw fa-filter"></span>
                                    Filters <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu ps ps--theme_default" role="menu">

                                    <li>
                                        <a href="javascript:void(0);">
                                            This Week
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Week
                                        </a>
                                    </li>

                                    <hr class="dropdown-divider">
                                    <li>
                                        <a href="javascript:void(0);">
                                            This Month
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Month
                                        </a>
                                    </li>

                                    <hr class="dropdown-divider">
                                    <li>
                                        <a href="javascript:void(0);">
                                            Current Year
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Year
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="#" class="btn btn-danger btn-lg">
                                <i class="fa fa-file-pdf"></i>
                                PDF
                            </a>

                            <a href="#" class="btn btn-success btn-lg">
                                <i class="fa fa-file-excel"></i>
                                Excel
                            </a>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                {{-- Sale Tax  --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Sales
                                        </th>

                                        <th class="text-white w-5">
                                            NET
                                        </th>

                                        <th class="text-white w-5">
                                            TAX
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($taxes->where('tax_type', 'sale') as $key => $taxe)
                                        <tr>
                                            <td>
                                                {{ $i++ }}
                                            </td>

                                            <td>
                                                {{ $taxe->tax_name ?? '' }}
                                                ({{ ucfirst($taxe->tax_type ?? '') }})
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $income = $taxe->cashbook->sum('income');
                                                    echo number_format($income, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $tax_computation = $taxe->tax_computation;
                                                    if ($tax_computation == 'fixed') {
                                                        $fixed_tax = $taxe->cashbook->sum('tax');
                                                        echo number_format($fixed_tax, 2);
                                                    } elseif ($tax_computation == 'percent') {
                                                        $percent_tax = $taxe->cashbook->sum('tax');
                                                        $tax_amount = ($income / 100) * $percent_tax;
                                                        echo number_format($tax_amount, 2);
                                                    }
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>




                                {{-- Purchase Tax  --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Purchases
                                        </th>

                                        <th class="text-white w-5">
                                            NET
                                        </th>

                                        <th class="text-white w-5">
                                            TAX
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $y = 1;
                                    @endphp
                                    @foreach ($taxes->where('tax_type', 'purchase') as $key => $taxe)
                                        <tr>
                                            <td>
                                                {{ $y++ }}
                                            </td>

                                            <td>
                                                {{ $taxe->tax_name ?? '' }}
                                                ({{ ucfirst($taxe->tax_type ?? '') }})
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $expense = $taxe->cashbook->sum('expense');
                                                    echo number_format($expense, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $tax_computation = $taxe->tax_computation;
                                                    if ($tax_computation == 'fixed') {
                                                        $fixed_tax = $taxe->cashbook->sum('tax');
                                                        echo number_format($fixed_tax, 2);
                                                    } elseif ($tax_computation == 'percent') {
                                                        $percent_tax = $taxe->cashbook->sum('tax');
                                                        $tax_amount = ($expense / 100) * $percent_tax;
                                                        echo number_format($tax_amount, 2);
                                                    }
                                                @endphp
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
