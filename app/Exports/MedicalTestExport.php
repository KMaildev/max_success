<?php

namespace App\Exports;

use App\Models\MedicalTest;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MedicalTestExport implements FromView
{
    public function view(): View
    {
        $passports = MedicalTest::all();
        return view('medical_test.excel_export', [
            'passports' => $passports,
        ]);
    }
}
