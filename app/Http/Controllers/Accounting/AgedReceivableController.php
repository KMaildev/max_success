<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgedReceivableController extends Controller
{
    public function index()
    {
        return view('accounting.aged_receivable.index');
    }
}
