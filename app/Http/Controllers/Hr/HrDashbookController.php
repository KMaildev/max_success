<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrDashbookController extends Controller
{
    public function index()
    {
        return view('hr.dashboard.index');
    }
}
