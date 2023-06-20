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
                    Passport
                </th>

                <th class="text-center text-white w-5" style="width: 10%">
                    Received Date
                </th>

                <th class="text-center text-white w-5" style="width: 10%">
                    Remark
                </th>

                <th class="text-center text-white w-5" style="width: 10%">
                    Reason
                </th>

                <th class="text-center text-white w-5" style="width: 10%">
                    Total
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payments as $key => $payment)
                <tr>
                    <td class="text-center">
                        {{ $key + 1 }}
                    </td>

                    <td class="text-center">
                        {{ $payment->passport_table->name ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $payment->passport_table->passport ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $payment->deposit_date ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $payment->remark ?? '' }}
                    </td>

                    <td class="text-center">
                        {{ $payment->payment_reason ?? '' }}
                    </td>

                    <td style="text-align: right">
                        {{ number_format($payment->deposit, 2) }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        No records available
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tr>
            <td colspan="6">Total</td>
            <td style="text-align: right;">
                {{ number_format($payments->sum('deposit'), 2) }}
            </td>
        </tr>
    </table>
</div>
