<?php

namespace App\Http\Controllers;

use App\Models\Nrc;
use Illuminate\Http\Request;

class NrcController extends Controller
{
    public function getByNrcCode($id)
    {
        $nrcs = Nrc::where('nrc_code', $id)
            ->get();
        return json_encode($nrcs);
    }
}
