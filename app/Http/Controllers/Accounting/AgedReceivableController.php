<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Passport;
use Illuminate\Http\Request;

class AgedReceivableController extends Controller
{
    public function index()
    {
        $passports = Passport::with('passport_payments_table')
            ->get();

        return view('accounting.aged_receivable.index', compact('passports'));
    }
}
