<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;

class OverseaCompanyReportController extends Controller
{
    public function show($id)
    {
        $overseas_agency = OverseasAgency::findOrFail($id);
        return view('accounting.oversea_company_report.show', compact('overseas_agency'));
    }
}
