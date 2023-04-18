<?php

namespace App\Exports;

use App\Models\Demand;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DemandExport implements FromView
{
    public function view(): View
    {
        $demands = Demand::all();
        return view('demand.excel_export', [
            'demands' => $demands,
        ]);
    }
}
