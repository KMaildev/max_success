<?php

namespace App\Exports;

use App\Models\Passport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportPassport implements FromView
{

    public function __construct($passports)
    {
        $this->passports = $passports;
    }

    public function view(): View
    {
        return view('passport.export.excel_export', [
            'passports' => $this->passports,
        ]);
    }
}
