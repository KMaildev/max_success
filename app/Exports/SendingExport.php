<?php

namespace App\Exports;

use App\Models\Sending;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SendingExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $sendings = Sending::all();
        return view('sending.excel_export', [
            'sendings' => $sendings,
        ]);
    }
}
